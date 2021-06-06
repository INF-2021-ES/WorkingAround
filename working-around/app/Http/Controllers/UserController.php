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
        $user = DB::table('users')->where('id', '=', Auth::id())->first();
        return view('user.index', ['user' => $user]);
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'address' => 'required',
            'roles' => 'required'
        ]);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        return redirect()->route('user.index')->with('success', 'User has been created successfully');
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
        /*
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'address' => 'required',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        }
        else {
            $input = Arr::except($input, array('password'));
        }
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model-id', $id)->delete();
        $user->assignRole($request->input('roles'));
        return redirect()->route('user.index')->with('success', 'User has been edited successfully');
        */

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
            'address' => $data['address'],
            'roles' => $data['roles'])
        );
        return redirect()->route('user.index')->with('success', 'User has been edited successfully');
    }


    // Delete user
    public function remove($id)
    {
        User::find($id)->delete();
        return redirect()->route('user.index')->with('success', 'User has been deleted');
    }
}
