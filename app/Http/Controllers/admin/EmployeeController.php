<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;

class EmployeeController extends Controller
{
    //

    public function store(Request $req)
    {
        $employeeData = new Employee();
        $employeeData->fill($req->all());
        $employeeData->employee_slug = $employeeData->employee_address;
        $employeeData->employee_status = "Verified";
        $employeeData->save();
        return response()->json($employeeData);
    }

    public function list()
    {
        $employeeData = Employee::with('user')->get();
        // return response()->json($employeeData);
        return view('admin.modules.employee.listemployee', compact('employeeData'));
    }



    public function index()
    {
        return view('admin.modules.employee.registeremployee');
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
        $employeeData->employee_slug = $req->employee_address;
        $employeeData->employee_status = "Verified";
        // dd($employeeData);
        $employeeData->save();
        // $employeeData = Employee::with('user')->get();
        // return view('admin.modules.employee.listemployee', compact('employeeData'));
        return redirect()->route('employee-list')->with('success', 'Employee updated successfully.');
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

    public function profile($user_id)
    {
        // Retrieve the employee data along with associated user data
        $employeeData = Employee::with('user')->where('user_id', $user_id)->firstOrFail();

        // Pass the data to the view
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
        // Retrieve the employee record
        $employeeData = Employee::findOrFail($id);
        $userData = User::findOrFail($employeeData->user_id);

        // Update basic information
        $userData->name = $request->input('name');
        $userData->email = $request->input('email');
        $userData->contact = $request->input('contact');
        $userData->password = $userData->password;



        // Update basic information

        $employeeData->employee_address = $request->input('employee_address');
        $employeeData->employee_description = $request->input('employee_description');
        $employeeData->employee_slug = $request->input('name');

        // Conditionally update password
        if ($request->filled('employee_password')) {
            $employeeData->employee_password = bcrypt($request->input('employee_password'));
        }

        // Handle profile picture upload
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
        // Update additional fields
        $employeeData->employee_education = $request->input('employee_education');
        $employeeData->employee_work_experience = $request->input('employee_work_experience');
        $employeeData->employee_participation = $request->input('employee_participation');
        $employeeData->employee_training = $request->input('employee_training');

        // Save changes
        $userData->save();
        $employeeData->save();

        // Redirect to employee list with success message
        return redirect()->route('employee-list')->with('success', 'Employee updated successfully.');
    }



    public function checkEmployee($user_id)
    {
        // $employee = Employee::where('user_id', $user_id)->first();
        $employee = Employee::with('user')->where('user_id', $user_id)->firstOrFail();

        if ($employee) {
            return response()->json(['exists' => true, 'data' => $employee]);
        } else {
            return response()->json(['exists' => false]);
        }
    }

    public function profileMobile($user_id)

    {
        $employeeData = Employee::with('user')->where('user_id', $user_id)->firstOrFail();

        // $employeeData = Employee::findorFail($id);
        return response()->json($employeeData);
    }


    public function employeeRegistration(Request $req)
    {

        $userData = new User();
        $userData->fill($req->all());
        $userData->role = "user";
        $userData->save();
        // return response()->json($userData);
        $userId = $userData->id;
        // Redirect to the view and pass the user ID
        return view('admin.modules.employee.addemployee', compact('userId'));
    }

    public function Mobilestore(Request $request)
    {
        $employeeData = new Employee();
        $employeeData->fill($request->all());
        // $employeeData->employee_image = "asfkj";


        $employeeData->save();
        return response()->json($employeeData, 201);
    }
}
