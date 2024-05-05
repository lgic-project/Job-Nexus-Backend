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
        // return view('admin.modules.jobs.createjob');
        return view('admin.modules.jobs.newjob');
    }
    public function save(Request $req)
    {
        $jobData = new Job();
        $jobData->fill($req->all());
        $jobData->job_status = "Not Verified";
        $jobData->job_slug = $req->job_title;
        $jobData->save();
        return view('admin.modules.jobs.newjob');
    }
}
