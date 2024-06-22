<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    //
    public function index()
    {
        $applicationData = Application::all();
        return response()->json($applicationData);
    }
    public function edit()
    {
        return view('admin.modules.employee.editemployee');
    }

    public function saveMobile(Request $req)
    {

        $userData = new Application();
        $userData->fill($req->all());
        $userData->applicant_status = "not verified";
        $userData->save();
        return response()->json($userData);
    }
}
