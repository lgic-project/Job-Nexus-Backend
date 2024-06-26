<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Employer;
use App\Models\User;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    //
    public function store(Request $req)
    {
        $employerData = new Employer();
        $employerData->fill($req->all());
        $employerData->employer_slug = $employerData->employer_first_name;
        $employerData->employer_status = "Inactive";
        $employerData->save();
        return response()->json($employerData);
    }

    public function save(Request $req)
    {
        $employerData = new Employer();
        $employerData->fill($req->all());
        //profile picture
        $newThumbnailImageName = time() . '.' . $req->file('employer_image')->getClientOriginalName();
        $req->employer_image->move(public_path('images/employer/profile'), $newThumbnailImageName);
        $employerData->employer_image = $newThumbnailImageName;

        //certificate
        $newThumbnailImageName2 = time() . '.' . $req->file('employer_certificate')->getClientOriginalName();
        $req->employer_certificate->move(public_path('images/employer/certificate'), $newThumbnailImageName2);
        $employerData->employer_certificate = $newThumbnailImageName2;
        $employerData->employer_slug = $req->user_id;
        $employerData->employer_status = "Inactive";
        // dd($employerData);
        $employerData->save();
        // return view('admin.modules.employer.addemployer');
        return redirect()->route('employer-list');
    }
    public function index()
    {
        return view('admin.modules.employer.registeremployer');
    }
    public function list()
    {
        $employerData = Employer::with('user')->get();
        // dd($employeeData);
        return view('admin.modules.employer.listemployer', compact('employerData'));
    }

    public function edit($id)
    {
        $employerData = Employer::findorFail($id);
        // dd($employerData);

        return view('admin.modules.employer.editemployer', compact('employerData'));
    }

    public function verify($id)
    {
        $record = Employer::findorFail($id);
        if ($record->employer_status == "verified") {
            $record->employer_status = 'under verification';
        } else

            $record->employer_status = 'verified';
        $record->save();
        // $employerData = Employer::all();
        // return view('admin.modules.employer.listemployer', compact('employerData'));
        return redirect()->route('employer-list');
    }

    public function profile($user_id)
    {
        // Retrieve the employee data along with associated user data
        $employerData = Employer::with('user')->where('user_id', $user_id)->firstOrFail();
        // dd($employerData);

        // Pass the data to the view
        return view('admin.modules.employer.employerprofile', compact('employerData'));
    }

    public function delete($id)
    {
        $employerDelete = Employer::findorFail($id);
        $employerDelete->delete();
        $employerData = Employer::all();
        return view('admin.modules.employer.listemployer', compact('employerData'));
    }


    public function update(Request $request, $id)
    {
        // Retrieve the employer record
        $employerData = Employer::findOrFail($id);
        $userData = User::findOrFail($employerData->user_id);

        // Update basic information
        $userData->name = $request->input('name');
        $userData->email = $request->input('email');
        $userData->contact = $request->input('contact');
        $userData->password = $userData->password;
        $employerData->employer_company_name = $request->input('employer_company_name');
        $employerData->employer_address = $request->input('employer_address');
        $employerData->employer_description = $request->input('employer_description');
        $employerData->employer_pan_vat = $request->input('employer_pan_vat');
        $employerData->company_website = $request->input('company_website');

        // Conditionally update password


        // Handle profile picture upload
        if ($request->hasFile("employer_image")) {
            $newImageName = time() . '-' . $request->employer_first_name . '.' . $request->employer_image->extension();
            $request->employer_image->move(public_path('images/employer/profile/'), $newImageName);
            $employerData->employer_image = $newImageName;
        }

        // Handle certificate upload
        if ($request->hasFile("employer_certificate")) {
            $newCertificateName = time() . '-' . $request->employer_first_name . '.' . $request->employer_certificate->extension();
            $request->employer_certificate->move(public_path('images/employer/certificate/'), $newCertificateName);
            $employerData->employer_certificate = $newCertificateName;
        }

        // Save changes to user and employer
        $userData->save();
        $employerData->save();

        // Redirect to employer list with success message
        return redirect()->route('employer-list');
    }

    public function employerRegistration(Request $req)
    {

        $userData = new User();
        $userData->fill($req->all());
        $userData->role = "admin";
        $userData->save();
        // return response()->json($userData);
        $userId = $userData->id;
        // Redirect to the view and pass the user ID
        return view('admin.modules.employer.addemployer', compact('userId'));
    }
}
