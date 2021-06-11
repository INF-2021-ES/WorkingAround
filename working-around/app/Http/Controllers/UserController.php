<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class UserController extends Controller
{
    public function indexPage()
    {
        /*
        $user = DB::table('users')->where('id', '=', Auth::id())->first();
        return view('user.index', ['user' => $user]);*/
    }

    // Create user
    public function createPage()
    {

        $roles = Role::pluck('name', 'name')->all();
        return view('user.create', compact('roles')); // Shows the form for creating a new user
    }

    // Insert user into the DB
    public function insert(Request $request)
    {
        $input = $request->all();
        
        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => bcrypt($input['password']),
            'address' => $input['address']
        ]);
        
        if (strtolower($input['roles']) == 'client') {
            $user->assignRole('client');
        }
        elseif (strtolower($input['roles']) == 'worker') {
            $user->assignRole('worker');        
        }
        return redirect()->route('home');
        
    }

    // Show User Edit page
    public function editPage($id)
    {
        $user = DB::table('users')->where('id', '=', $id)->first();
        return view('user.edit', ['user' => $user]); 
        // Return a form page for editing 
    }

    // Function to update the user in the DB
    public function update(Request $request)
    {

        $data = $request->all();
        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
            DB::table('users')->where('id', '=', Auth::id())->update(
                array('password' => $data['password'])
            );
        }
        else {
            $data = Arr::except($data, array('password'));
        }
        DB::table('users')->where('id', '=', Auth::id())->update(
            array('name' => $data['name'],
            'email' => $data['email'],
            'address' => $data['address'])
        );
        return redirect()->route('user.index')->with('success', 'User has been edited successfully');
    }


    // Delete user, if we delete user, we also have to delete in jobs and services table
    public function removeWorker($id)
    {
        $hasJobs = false;
        
        try {
            //code...
            DB::table('job')->where('worker_id', '=', $id)->delete();
            $hasJobs = true;
        } catch (\Throwable $th) {
            if (!$hasJobs) { // In case there's an error, delete only user
                DB::table('users')->where('id', '=', $id)->delete();
            }
        }
        if ($hasJobs) {
            DB::table('service')->where('worker_id', '=', $id)->delete(); 
            DB::table('users')->where('id', '=', $id)->delete();   
        }
        return redirect()->route('home')->with('success', 'Worker has been deleted');
    }

    public function removeClient($id)
    {
        try {
            DB::table('job')->where('client_id', '=', Auth::id())->delete();
            DB::table('users')->where('id', '=', Auth::id())->delete();
        } catch (\Throwable $th) {
            DB::table('users')->where('id', '=', Auth::id())->delete();
        }
        return redirect()->route('home')->with('success', 'Client has been deleted');
    }
}
