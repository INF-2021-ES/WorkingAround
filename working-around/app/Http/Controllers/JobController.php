<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    // Show all jobs. Front-end developer should only show the ones from the user
    public function indexPage()
    {
        $jobs = Job::all();
        return view('jobs.index', ['jobs' => $jobs]);
    }

    // Return jobs form page
    public function createPage()
    {
        return view('jobs.create');
    }

    // Insert job into the DB
    public function insert(Request $request, User $user)
    {
        $data = $request->all();
        $category_id = DB::table('category')->select('category_id')->where('name', '=', $data['category']);
        $worker_id = $user->id;
        
    }
}
