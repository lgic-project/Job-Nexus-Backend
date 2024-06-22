<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
    //

    public function store(Request $req)
    {
        $employeeData = new Employee();
        $employeeData->fill($req->all());
        $employeeData->employee_slug = $employeeData->employee_first_name;
        $employeeData->employee_status = "Inactive";
        $employeeData->save();
        return response()->json($employeeData);
    }

    public function list()
    {
        $employeeData = Employee::all();
        return view('admin.modules.employee.listemployee', compact('employeeData'));
    }


    public function index()
    {
        return view('admin.modules.employee.addemployee');
    }

    public function save(Request $req)
    {
        $employeeData = new Employee();
        $employeeData->fill($req->all());
        //profile picture
        $newThumbnailImageName = time() . '.' . $req->file('employee_image')->getClientOriginalName();
        $req->employee_image->move(public_path('images/employee/profile'), $newThumbnailImageName);
        $employeeData->employee_image = $newThumbnailImageName;

        //cv
        $newThumbnailImageName2 = time() . '.' . $req->file('employee_cv')->getClientOriginalName();
        $req->employee_cv->move(public_path('images/employee/cv'), $newThumbnailImageName2);
        $employeeData->employee_cv = $newThumbnailImageName2;
        $employeeData->employee_slug = $employeeData->employee_first_name;
        $employeeData->employee_status = "Inactive";
        $employeeData->save();
        return view('admin.modules.employee.addemployee');
    }

    //Verification
    public function verify($id)
    {
        $record = Employee::findorFail($id);
        if ($record->employee_status == "verified") {
            $record->employee_status = 'under verification';
        } else

            $record->employee_status = 'verified';
        $record->save();
        $employeeData = Employee::all();
        return view('admin.modules.employee.listemployee', compact('employeeData'));
    }

    public function delete($id)
    {
        $employeeDelete = Employee::findorFail($id);
        $employeeDelete->delete();
        $employeeData = Employee::all();
        return view('admin.modules.employee.listemployee', compact('employeeData'));
    }

    public function profile($id)
    {
        $employeeData = Employee::findorFail($id);
        return view('admin.modules.employee.employeeprofile', compact('employeeData'));
    }

    public function edit($id)
    {
        $employeeData = Employee::findorFail($id);
        // dd($employeeData);

        return view('admin.modules.employee.editemployee', compact('employeeData'));
    }

    public function update(Request $request, $id)
    {
        $employeeData = Employee::find($id);
        $employeeData->employee_first_name = request('employee_first_name');
        $employeeData->employee_middle_name = request('employee_middle_name');
        $employeeData->employee_last_name = request('employee_last_name');
        $employeeData->employee_email = request('employee_email');
        $employeeData->employee_password = request('employee_password');
        $employeeData->employee_address = request('employee_address');
        $employeeData->employee_contact = request('employee_contact');
        $employeeData->employee_description = request('employee_description');
        $employeeData->employee_slug = request('employee_first_name');
        $employeeData->employee_status = $employeeData->employee_status;
        if ($request->hasFile("employee_image")) {
            $newemployeeImageName = time() . '-' . $request->employee_first_name . '.' . $request->employee_image->extension();
            $request->employee_image->move(public_path('images/employee/profile/'), $newemployeeImageName);
            $employeeData->employee_image = $newemployeeImageName;
        } else {
            $employeeData->employee_image =  $employeeData->employee_image;
        }
        if ($request->hasFile("employee_cv")) {
            $newemployeeImageName2 = time() . '-' . $request->employee_first_name . '.' . $request->employee_cv->extension();
            $request->employee_cv->move(public_path('images/employee/cv/'), $newemployeeImageName2);
            $employeeData->employee_cv = $newemployeeImageName2;
        } else {
            $employeeData->employee_cv =  $employeeData->employee_cv;
        }
        $employeeData->save();
        return redirect()->route('employee-list');
    }


    public function checkEmployee($user_id)
    {
        // Fetch the employee based on the provided user_id
        $employee = Employee::where('user_id', $user_id)->first();

        if ($employee) {
            // Return the employee's data in JSON format if found
            return response()->json($employee);
        } else {
            // Return a message indicating the employee is not registered
            return response()->json(['message' => 'Employee not registered'], 404);
        }
    }
}
