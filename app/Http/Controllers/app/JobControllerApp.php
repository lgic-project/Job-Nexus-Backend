<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class JobControllerApp extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        return view('app.modules.jobs.newjob', compact('categories'));
        // return response()->json($categories);
    }
    public function save(Request $req)
    {
        $jobData = new Job();
        $jobData->fill($req->all());
        $jobData->job_status = "Not Verified";
        $jobData->job_slug = $req->job_title;
        $jobData->job_posted_by = "1";
        $jobData->job_category = "1";
        // dd($jobData);
        $jobData->save();
        $categories = Category::all();
        return view('app.modules.jobs.newjob', compact('categories'));
    }
    public function list()
    {
        $jobData = Job::all();
        return view('app.modules.jobs.listjob', compact('jobData'));
        // return response()->json($jobData);
    }
    public function listJob()
    {
        $jobData = Job::all();
        return view('app.modules.applications.listjob', compact('jobData'));
        // return response()->json($jobData);
    }

    public function delete($id)
    {
        $jobDelete = Job::findorFail($id);
        $jobDelete->delete();
        $jobData = Job::all();
        return view('app.modules.job.listjob', compact('jobData'));
    }

    public function verify($id)
    {
        $record = Job::findorFail($id);
        if ($record->job_status == "verified") {
            $record->job_status = 'Not Verified';
        } else

            $record->job_status = 'verified';
        $record->save();
        return redirect()->route('job-list');
    }

    public function edit($id)
    {
        $jobData = Job::findorFail($id);
        return view('app.modules.jobs.editjob', compact('jobData'));
    }

    public function update(Request $request, $id)
    {
        $jobData = Job::find($id);
        $jobData->job_title = request('job_title');
        $jobData->job_category = request('job_category');
        $jobData->job_address = request('job_address');
        $jobData->job_company_name = request('job_company_name');
        $jobData->job_experience = request('job_experience');
        $jobData->job_max_salary = request('job_max_salary');
        $jobData->job_min_salary = request('job_min_salary');
        $jobData->job_type = request('job_type');
        $jobData->job_hour = request('job_hour');
        $jobData->job_slug = request('job_title');
        $jobData->job_status = $jobData->job_status;
        $jobData->job_contact = request('job_contact');
        $jobData->job_validity = request('job_validity');
        $jobData->job_description = request('job_description');
        $jobData->job_requirements = request('job_requirements');
        $jobData->save();
        return redirect()->route('job-list');
    }

    public function filterJobs(Request $request)
    {
        $query = Job::query();

        if ($request->has('job_company_name')) {
            $query->where('job_company_name', 'like', '%' . $request->input('job_company_name'));
        }

        if ($request->has('job_title')) {
            $query->where('job_title', 'like', '%' . $request->input('job_title') . '%');
        }

        if ($request->has('job_type')) {
            $query->where('job_type', $request->input('job_type'));
        }
        if ($request->has('job_category')) {
            $query->where('job_category', $request->input('job_category'));
        }

        if ($request->has('job_address')) {
            $query->where('job_address', 'like', '%' . $request->input('job_address') . '%');
        }

        $jobs = $query->get();

        return response()->json($jobs);
    }

    public function getAllJobDetails()
    {
        $jobs = Job::with(['category', 'employer', 'application'])->get();
        return response()->json($jobs);
    }

    public function detail($id)
    {
        $jobData = Job::findorFail($id);
        return response()->json($jobData);
    }
}
