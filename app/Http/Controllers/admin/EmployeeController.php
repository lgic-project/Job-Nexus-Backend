<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
    //
    public function index()
    {
        $employeeData = Employee::all();
        return view('admin.modules.employee.listemployee', compact('employeeData'));
    }

    public function edit()
    {
        return view('admin.modules.employee.editemployee');
    }
}
