<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserRegController extends Controller
{

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

        // $userData = new User();
        // $userData->fill($req->all());
        // $userData->save();
        // return response()->json($userData);
        // return response()->json($req);
        $userData = [
            'name' => $req['name'],
            'email' => $req['email'],
            'password' => Hash::make($req['password']),
            'role' => $req['role'],
            'contact' => $req['contact']
        ];


        Mail::send('mail/registration', $userData, function ($message) use ($req) {
            $message->from('jobnexus64@gmail.com');
            $message->to($req['email'])
                ->subject('Thank you for registration' . $req['name']);
        });
        $userData = new User();
        $userData->fill($req->all());
        $userData->save();
        return response()->json($userData);
        // return response()->json($req);
    }

    public function loginMobile(Request $req)
    {
        $user = User::where('email', $req->email)->first();
        return response()->json($user);
    }
}
