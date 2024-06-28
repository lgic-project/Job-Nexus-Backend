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
        return view('auth.login');
    }


    public function saveMobile(Request $req)
    {

        $userData = new User();
        $userData->fill($req->all());
        $userData->save();
        return response()->json($userData);
    }

    public function loginMobile(Request $req)
    {
        $user = User::where('email', $req->email)->first();
        return response()->json($user);
    }
}
