<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\JobController;
use App\Http\Controllers\admin\EmployeeController;
use App\Http\Controllers\admin\EmployerController;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/job-api', function () {
    $jobData = Job::all();
    return response()->json($jobData);
});
//routes for job
Route::get('/jobs', [JobController::class, 'filterJobs']);
Route::post('/job/save', [JobController::class, 'save']);
Route::get('/job/all', [JobController::class, 'getAllJobDetails']);


//routes for employer
Route::post('/employer/store', [EmployerController::class, 'store']);

//routes for employee
Route::post('/employee/store', [EmployeeController::class, 'store']);

//route for category
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{title}', [CategoryController::class, 'getJobsByCategory']);
