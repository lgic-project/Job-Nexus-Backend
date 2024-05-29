<?php

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

Route::get('/jobs', [JobController::class, 'filterJobs']);
Route::post('/job/save', [JobController::class, 'save']);

//routes for employer
Route::post('/employer/save', [EmployerController::class, 'save']);
Route::post('/employer/store', [EmployerController::class, 'store']);
