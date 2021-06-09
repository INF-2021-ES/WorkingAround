<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $workerId = Auth::id();
        try {
            $myServices = DB::table('services')->where('id', '=', $workerId)->get();
        } catch (\Throwable $th) {
            return view('home');
        }
        return view('home', ['services' => $myServices]);
    }
}
