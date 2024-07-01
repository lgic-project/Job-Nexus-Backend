<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Job;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        // Find the application by ID
        $application = Application::findOrFail($id);

        // Update the applicant status to "rejected"
        $application->applicant_status = "rejected";
        $application->save();

        // Fetch the user associated with the application
        $user = User::find($application->user_id);

        // Fetch the job associated with the application
        $job = Job::find($application->job_id);

        if ($user && $job) {
            // Prepare email data
            $emailData = [
                'name' => $user->name,
                'application' => $application,
                'company' => $job->job_company_name,
                'title' => $job->job_title,
            ];

            // Send rejection email
            Mail::send('mail/rejection', $emailData, function ($message) use ($user, $job) {
                $message->from('jobnexus64@gmail.com', 'Job Nexus');
                $message->to($user->email)
                    ->subject('Application Status Update from ' . $job->job_company_name);
            });

            // Return JSON response with user and application info
            return response()->json([
                'message' => 'Application rejected and email sent successfully',
                'user' => $user,
                'application' => $application
            ], 200);
        } else {
            // Return JSON response if user or job is not found
            return response()->json([
                'message' => 'User or job associated with the application not found'
            ], 404);
        }
    }



    public function mobileApplicantAccept($id)
    {
        // Find the application by ID
        $application = Application::findOrFail($id);

        // Update the applicant status to "rejected"
        $application->applicant_status = "accepted";
        $application->save();

        // Fetch the user associated with the application
        $user = User::find($application->user_id);

        // Fetch the job associated with the application
        $job = Job::find($application->job_id);

        if ($user && $job) {
            // Prepare email data
            $emailData = [
                'name' => $user->name,
                'application' => $application,
                'company' => $job->job_company_name,
                'title' => $job->job_title,
            ];

            // Send rejection email
            Mail::send('mail/accept', $emailData, function ($message) use ($user, $job) {
                $message->from('jobnexus64@gmail.com', 'Job Nexus');
                $message->to($user->email)
                    ->subject('Application Status Update from ' . $job->job_company_name);
            });
            // return response()->json($emailData);

            // Return JSON response with user and application info
            return response()->json([
                'message' => 'Application accepted and email sent successfully',
                'user' => $user,
                'application' => $application
            ], 200);
        } else {
            // Return JSON response if user or job is not found
            return response()->json([
                'message' => 'User or job associated with the application not found'
            ], 404);
        }
    }
}
