<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    // Shows jobs from the logged in user, in this case, from worker
    public function indexPage()
    {
        $workerId = Auth::id();
        try {
            $jobs = DB::table('job')
            ->join('users', 'id', '=', $workerId)
            ->get();
            //$jobs = DB::table('job')->where('worker_id', '=', $workerId)->get();
        } catch (\Throwable $th) {
            return view('jobs.index', ['jobs' => null]);
        }
        return view('jobs.index', ['jobs' => $jobs]);
    }

    // Must receive the service object as a parameter 
    // in order to get all the info about it
    // As soon as the worker accepts the job, it must be hiden from the public 
    public function acceptService(Service $service)
    {
        DB::table('service')->where('id', '=', $service->id)->update(
            array('reserved' => true)
        );
        DB::table('job')->where('service_id', '=', $service->id)->update(
            array('accepted' => true)
        );
        return redirect()->route('jobs.index');
    }

    // If the worker rejects the service, it must go back to public and delete from his own jobs
    public function declineService(Service $service)
    {
        DB::table('service')->where('id', '=', $service->id)->update(
            array('reserved' => false)
        );
        DB::table('job')->where('service_id', '=', $service->id)->delete();
        return redirect()->route('jobs.index');
    }

    public function showJob($id)
    {
        $job = DB::table('job')->where('id', '=', $id)->get();
        return view('jobs.show', ['job' => $job]);
    }
}
