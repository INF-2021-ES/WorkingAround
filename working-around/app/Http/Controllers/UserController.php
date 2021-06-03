<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Create user
    public function createPage()
    {
        return view('user.create'); // Shows the form for creating a new user
    }

    // Insert user into the DB
    public function insert(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'address' => 'required'
        ]);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        
        $user = new User();
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = $input['password'];
        $user->address = $input['address'];
        $user->save();

        return redirect()->route('user.index')->with('success', 'User has been created successfully');
    }

    // Show User Edit page
    public function editPage(User $user)
    {
        return view('user.edit', ['user' => $user]); 
        // Return a form page for editing 
    }

    // Function to update the user in the DB
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'address' => 'required'
        ]);

        $input = $request->all();
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = Hash::make($input['password']);
        $user->address = $request->address;
        
        $user->save();
        return redirect()->route('user.index')->with('success', 'User has been edited successfully');
    }


    // Delete user
    public function remove($id)
    {
        User::find($id)->delete();
        return redirect()->route('user.index')->with('success', 'User has been deleted');
    }
}
