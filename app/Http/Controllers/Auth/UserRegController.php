<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserRegController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8',
            'contact' => 'required|string|max:15',
        ]);

        $userData = new User();
        $userData->name = $request->input('name');
        $userData->role = $request->input('role');
        $userData->email = $request->input('email');
        $userData->password = $request->input('password');
        $userData->contact = $request->input('contact');
        $userData->save();
        return view('login');
    }


    public function storeMobile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8',
            'contact' => 'required|string|max:15',
        ]);

        $usersData = new User();
        $usersData->name = $request->input('name');
        $usersData->role = $request->input('role');
        $usersData->email = $request->input('email');
        $usersData->password = $request->input('password');
        $usersData->contact = $request->input('contact');
        $usersData->save();
        return response()->json(['message' => 'User registered successfully', 'userData' => $userData]);

        // return response()->json(['message' => 'User registered successfully', 'usersData' => $userData]);
    }
}
