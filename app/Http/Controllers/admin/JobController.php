<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    public function index()
    {
        $jobData = Job::all();
        return response()->json($jobData);
    }
}
