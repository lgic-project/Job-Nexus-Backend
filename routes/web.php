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
Route::get('/employee', [EmployeeController::class, 'list'])->name('employee-list');
Route::post('/employee/save', [EmployeeController::class, 'save'])->name('employee-save');
Route::get('/employee/register', [EmployeeController::class, 'index'])->name('employee-index');
Route::get('/employee/verification/{id}', [EmployeeController::class, 'verify'])->name('employee-verify');
Route::get('/employee/delete/{id}', [EmployeeController::class, 'delete'])->name('employee-delete');
Route::get('/employee/profile/{id}', [EmployeeController::class, 'profile'])->name('employee-profile');
Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee-edit');
Route::post('/employee/update/{id}', [EmployeeController::class, 'update'])->name('employee-update');
//Employer Routes
Route::get('/employer', [EmployerController::class, 'list'])->name('employer-list');
Route::get('/employer/edit/{id}', [EmployerController::class, 'edit'])->name('employer-edit');
Route::post('/employer/save', [EmployerController::class, 'save'])->name('employer-save');
Route::get('/employer/verification/{id}', [EmployerController::class, 'verify'])->name('employer-verification');
Route::get('/employer/profile/{id}', [EmployerController::class, 'profile'])->name('employer-profile');
Route::get('/employer/register', [EmployerController::class, 'index'])->name('employer-index');
Route::get('/employer/delete/{id}', [EmployerController::class, 'delete'])->name('employer-delete');
Route::post('/employer/update/{id}', [EmployerController::class, 'update'])->name('employer-update');
//Employee Routes
Route::get('/job', [JobController::class, 'index'])->name('job-index');
Route::get('/job/list', [JobController::class, 'list'])->name('job-list');
Route::get('/job/delete/{id}', [JobController::class, 'delete'])->name('job-delete');
Route::get('/job/verify/{id}', [JobController::class, 'verify'])->name('job-verify');
Route::get('/job/edit/{id}', [JobController::class, 'edit'])->name('job-edit');
Route::post('/job/save', [JobController::class, 'save'])->name('job-save');
Route::post('/job/update/{id}', [JobController::class, 'update'])->name('job-update');
//Employee Routes
Route::get('/application-details', [ApplicationController::class, 'index'])->name('application-index');
Route::get('/application-details', [ApplicationController::class, 'edit'])->name('application-edit');
