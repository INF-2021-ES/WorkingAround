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
        if (JobController::hasJobs() && JobController::hasAcceptedJobs()) {
            $toAccept = DB::table('job')->join('service', 'job.service_id', '=', 'service.id')->where('job.workerId', '=', Auth::id())->where('job.accepted', '=', false)->get();
            $accepted = DB::table('job')->join('service', 'job.service_id', '=', 'service.id')->where('job.workerId', '=', Auth::id())->where('job.accepted', '=', true)->get();
            return view('jobs.index', ['jobs' => $toAccept, 'accepted' => $accepted]);
        }
        elseif (JobController::hasJobs() && !JobController::hasAcceptedJobs()) {
            $toAccept = DB::table('job')->join('service', 'job.service_id', '=', 'service.id')->where('job.workerId', '=', Auth::id())->where('job.accepted', '=', false)->get();
            return view('jobs.index', ['jobs' => $toAccept, 'accepted' => null]);
        }
        elseif (JobController::hasAcceptedJobs() && !JobController::hasJobs()) {
            $accepted = DB::table('job')->join('service', 'job.service_id', '=', 'service.id')->where('job.workerId', '=', Auth::id())->where('job.accepted', '=', true)->get();
            return view('jobs.index', ['jobs' => null, 'accepted' => $accepted]);
        }
        return view('jobs.index', ['jobs' => null, 'accepted' => null]);
    }

    private static function hasAcceptedJobs()
    {
        try {
            $valor = DB::table('job')->where('workerId', '=', Auth::id())->where('accepted', '=', true)->first(); // only needs at least one to return true
            if ($valor->accepted) {
                return true;
            }
            return false; 
        } catch (\Throwable $th) {
            return false;
        }
    }

    private static function hasJobs()
    {
        try {
            $valor = DB::table('job')->where('workerId', '=', Auth::id())->where('accepted', '=', false)->first(); // only needs at least one to return true 
            if (!$valor->accepted) {
                return true;
            }  
            return false;   
        } catch (\Throwable $th) {
            return false;
        }
    }

    // As soon as the worker accepts the job, it must be hiden from the public 
    public function acceptService($id)
    {
        DB::table('service')->where('id', '=', $id)->update(
            array('reserved' => true)
        );
        DB::table('job')->where('service_id', '=', $id)->update(
            array('accepted' => true)
        );
        $serviceDb = DB::table('service')->where('id', '=', $id)->first();
        
        $service = new Service();
        $service->id = $serviceDb->id;
        $service->category_id = $serviceDb->category_id;
        $service->worker_id = $serviceDb->worker_id;
        $service->description = $serviceDb->description;
        $service->price = $serviceDb->price;
        $service->reserved = $serviceDb->reserved;

        $job = DB::table('job')->where('id', '=', $id)->first();
        $client = DB::table('users')->where('id', '=', $job->clientId)->first();
        $worker = DB::table('users')->where('id', '=', $job->workerId)->first();
        SendEmailController::sendEmail($service, $client->name, $client->email, $worker->name);
        return redirect()->route('jobs.index');
    }

    // If the worker rejects the service, it must go back to public and delete from his own jobs
    public function declineService($id)
    {
        DB::table('service')->where('id', '=', $id)->update(
            array('reserved' => false)
        );
        DB::table('job')->where('service_id', '=', $id)->delete();
        return redirect()->route('jobs.index');
    }

    public function showJob($id)
    {
        $job = DB::table('job')->select('job.clientId as clientid', 'job.service_id as serviceid')->where('id', '=', $id)->first();
        $client = DB::table('users')->where('id', '=', $job->clientid)->first();
        $service = DB::table('service')->where('id', '=', $job->serviceid)->first();
        return view('jobs.show', ['job' => $job, 'client' => $client, 'service' => $service]);
    }


    public function showClientReservation()
    {
        $check = DB::table('job')->where('clientId', '=', Auth::id())->first();
        if ($check->accepted != null) {
            $reservation = DB::table('job')->join('service', 'job.service_id', '=', 'service.id')->where('job.clientId', '=', Auth::id())->where('job.accepted', '=', false)->get();
            return view('jobs.requests', ['reservations' => $reservation]);
        }
        return view('jobs.requests', ['reservations' => null]);
    }
}
