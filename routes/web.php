<?php

use App\Http\Controllers\admin\ApplicationController;
use App\Http\Controllers\admin\EmployeeController;
use App\Http\Controllers\admin\EmployerController;
use App\Http\Controllers\admin\JobController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.master');
});
//Employee Routes
Route::get('/employee', [EmployeeController::class, 'index'])->name('employee-index');
Route::get('/employee/edit', [EmployeeController::class, 'edit'])->name('employee-edit');
//Employer Routes
Route::get('/employer', [EmployerController::class, 'index'])->name('employer-index');
Route::get('/employer/edit', [EmployerController::class, 'edit'])->name('employer-edit');
Route::post('/employer/save', [EmployerController::class, 'save'])->name('employer-save');
//Employee Routes
Route::get('/job', [JobController::class, 'index'])->name('job-index');
Route::get('/job', [JobController::class, 'edit'])->name('job-edit');
//Employee Routes
Route::get('/application-details', [ApplicationController::class, 'index'])->name('application-index');
Route::get('/application-details', [ApplicationController::class, 'edit'])->name('application-edit');
