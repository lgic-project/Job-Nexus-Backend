<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    //
    public function index()
    {
        $employerData = Employer::all();
        return response()->json($employerData);
    }
}
