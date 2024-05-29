<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Employer;
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
        $employerData->employer_slug = $employerData->employer_first_name;
        $employerData->employer_status = "Inactive";
        $employerData->save();
        return view('admin.modules.employer.addemployer');
    }
    public function index()
    {
        return view('admin.modules.employer.addemployer');
    }
    public function list()
    {
        $employerData = Employer::all();
        // return response()->json($employerData);
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
        $employerData = Employer::all();
        return view('admin.modules.employer.listemployer', compact('employerData'));
    }

    public function profile($id)
    {
        $employerData = Employer::findorFail($id);
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
        $employerData = Employer::find($id);
        $employerData->employer_first_name = request('employer_first_name');
        $employerData->employer_middle_name = request('employer_middle_name');
        $employerData->employer_last_name = request('employer_last_name');
        $employerData->employer_email = request('employer_email');
        $employerData->employer_password = request('employer_password');
        $employerData->employer_address = request('employer_address');
        $employerData->employer_contact = request('employer_contact');
        $employerData->employer_company_name = request('employer_company_name');
        $employerData->employer_description = request('employer_description');
        $employerData->employer_slug = request('employer_first_name');
        $employerData->employer_status = $employerData->employer_status;
        if ($request->hasFile("employer_image")) {
            $newemployerImageName = time() . '-' . $request->employer_first_name . '.' . $request->employer_image->extension();
            $request->employer_image->move(public_path('images/employer/profile/'), $newemployerImageName);
            $employerData->employer_image = $newemployerImageName;
        } else {
            $employerData->employer_image = $employerData->employer_image;
        }
        if ($request->hasFile("employer_certificate")) {
            $newemployerImageName2 = time() . '-' . $request->employer_first_name . '.' . $request->employer_certificate->extension();
            $request->employer_certificate->move(public_path('images/employer/certificate/'), $newemployerImageName2);
            $employerData->employer_certificate = $newemployerImageName2;
        } else {
            $employerData->employer_certificate = $employerData->employer_certificate;
        }
        $employerData->save();
        return redirect()->route('employer-list');
    }
}
