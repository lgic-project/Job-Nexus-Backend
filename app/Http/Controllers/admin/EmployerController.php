<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    //

    public function save(Request $req)
    {
        $employerData = new Employer();
        $employerData->fill($req->all());
        // $ck = $req->input('employer_description');

        // dd($req->employer_description);

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

        return view('admin.modules.employee.editemployee', compact('employerData'));
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
}
