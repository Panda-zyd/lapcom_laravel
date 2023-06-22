<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin2.crud.user', compact('users'));
        // Logic to fetch and display a list of resources
    }

    public function create()
    {
        return view('admin2.crud.users_create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255|unique:users|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'phone' => 'required|numeric',
            'address' => 'required|min:5',
            'status' => 'required',
            ]);
        if($data){
            User::create($data);
            return redirect()->route("users.index")->with('success', 'User Created Successfully');
        } else{
            return redirect()->route("users.create")->with('error', 'Please check your Credentials');
        }
    }

    public function show($id)
    {
        // Logic to fetch and display a specific resource
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin2.crud.edituser', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->validate([
            'name' => 'required|max:255|min:3',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'phone' => 'required|numeric',
            'address' => 'required|min:5',
            'status' => 'required',
            ]);
        if($data){
            $user->update($data);
            return redirect()->route("users.index")->with('success', 'User Updated Successfully');
            } else{
            return redirect()->route("users.edit", $id)->with('error', 'Please check your Credentials');
        }
    }

    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        return redirect()->route("users.index")->with('success', 'User Deleted Successfully');
    }
}
