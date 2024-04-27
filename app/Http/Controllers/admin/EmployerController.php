<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    //

    public function save(Request $req)
    {
        $employerData = new Employer();
        $employerData->fill($req->all());
        dd($employerData);

        //profile picture
        $newThumbnailImageName = time() . '.' . $req->file('employer_image')->getClientOriginalName();
        $req->employer_image->move(public_path('images/employer/profile'), $newThumbnailImageName);
        $employerData->employer_image = $newThumbnailImageName;

        //certificate
        $newThumbnailImageName2 = time() . '.' . $req->file('employer_certificate')->getClientOriginalName();
        $req->employer_certificate->move(public_path('images/employer/certificate'), $newThumbnailImageName2);
        $employerData->employer_certificate = $newThumbnailImageName2;
        $employerData->employer_slug = $employerData->employee_first_name;
        $employerData->employer_status = "Inactive";

        dd($employerData);
    }
    public function index()
    {
        return view('admin.modules.employer.addemployer');
    }
    public function list()
    {
        $employerData = Employer::all();
        return view('admin.modules.empsloyee.listemployee', compact('employerData'));
    }
    public function edit()
    {
        return view('admin.modules.employee.editemployee');
    }
}
