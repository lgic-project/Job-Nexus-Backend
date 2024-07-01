<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Job;
use App\Models\User;
use App\Models\Employee;
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

        $userData->save();
        return response()->json($userData);
    }


    public function jobapplication($job_id)
    {
        $applicationData = Application::all();
    }


    public function jobApplications($jobId)
    {
        // Fetch job and related applications
        $job = Job::findOrFail($jobId);
        $applications = Application::where('job_id', $jobId)->with('applicant')->get();

        // Return view with job and applications
        return view('app.modules.applications.listjob', compact('job', 'applications'));
    }


    public function viewCV($user_id)
    {
        // Fetch user and related employee details
        $user = User::with('employees')->findOrFail($user_id);
        $employee = Employee::where('user_id', $user_id)->first();

        if (!$employee) {
            return redirect()->back()->with('error', 'Employee details not found for this user.');
        }

        // Return view with user and employee data for CV
        return view('app.modules.applications.cv', compact('user', 'employee'));
    }


    public function acceptApplication($id)
    {
        $application = Application::findOrFail($id);

        // Update application status to accepted
        $application->applicant_status = 'accepted';
        $application->save();

        return redirect()->back()->with('success', 'Application accepted successfully.');
    }

    public function rejectApplication($id)
    {
        $application = Application::findOrFail($id);

        // Update application status to accepted
        $application->applicant_status = 'rejected';
        $application->save();

        return redirect()->back()->with('success', 'Application accepted successfully.');
    }

    public function viewApplication($user_id)
    {
        // Fetch user and related application details with job data
        $user = User::findOrFail($user_id);
        $applications = Application::where('user_id', $user_id)->with('job')->get();

        // Return JSON response with user, applications, and related job details
        return response()->json([
            'user' => $user,
            'applications' => $applications,
        ]);
    }

    public function viewJobApplication($user_id)
    {
        $applicationData = Application::with(['job', 'applicant'])
            ->where('employer_id', $user_id)
            ->get();

        return response()->json($applicationData);
    }
    public function mobileApplicantReject($id)
    {
        $application = Application::findOrFail($id);
        $application->applicant_status = "rejected";
        return response()->json($application);
    }

    public function mobileApplicantAccept($id)
    {
        $application = Application::findOrFail($id);
        $application->applicant_status = "accepted";
        return response()->json($application);
    }
}
