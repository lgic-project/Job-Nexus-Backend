<?php

use App\Http\Controllers\admin\ApplicationController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\app\ApplicationControllerApp;
use App\Http\Controllers\app\CategoryControllerApp;
use App\Http\Controllers\admin\EmployeeController;
use App\Http\Controllers\admin\EmployerController;
use App\Http\Controllers\admin\JobController;
use App\Http\Controllers\app\JobControllerApp;
use App\Http\Controllers\auth\UserRegController;
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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard/super', function () {
        return view('admin.master');
    });

    Route::get('/admin', function () {
        return view('app.master');
    });
    Route::get('/', function () {
        return redirect('/login');
    });
    //Employee Routes
    Route::get('/employee', [EmployeeController::class, 'list'])->name('employee-list');
    Route::post('/employee/save', [EmployeeController::class, 'save'])->name('employee-save');
    Route::post('/employee/register', [EmployeeController::class, 'employeeRegistration'])->name('register-employee');
    Route::get('/employee/register', [EmployeeController::class, 'index'])->name('employee-index');
    Route::get('/employee/verification/{id}', [EmployeeController::class, 'verify'])->name('employee-verify');
    Route::get('/employee/delete/{id}', [EmployeeController::class, 'delete'])->name('employee-delete');
    Route::get('/employee/profile/{user_id}', [EmployeeController::class, 'profile'])->name('employee-profile');
    Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee-edit');
    Route::post('/employee/update/{id}', [EmployeeController::class, 'update'])->name('employee-update');
    //Employer Routes
    Route::get('/employer', [EmployerController::class, 'list'])->name('employer-list');
    Route::get('/employer/edit/{id}', [EmployerController::class, 'edit'])->name('employer-edit');
    Route::post('/employer/save', [EmployerController::class, 'save'])->name('employer-save');
    Route::post('/employer/store', [EmployerController::class, 'store'])->name('employer-store');
    Route::get('/employer/verification/{id}', [EmployerController::class, 'verify'])->name('employer-verification');
    Route::get('/employer/profile/{user_id}', [EmployerController::class, 'profile'])->name('employer-profile');
    Route::get('/employer/register', [EmployerController::class, 'index'])->name('employer-index');
    Route::post('/employer/register', [EmployerController::class, 'employerRegistration'])->name('register-employer');
    Route::get('/employer/delete/{id}', [EmployerController::class, 'delete'])->name('employer-delete');
    Route::post('/employer/update/{id}', [EmployerController::class, 'update'])->name('employer-update');
    //Employee Routes
    Route::get('/job', [JobController::class, 'index'])->name('job-index');
    Route::get('/job/list', [JobController::class, 'list'])->name('job-list');
    Route::get('/job/all', [JobController::class, 'getAllJobDetails']);
    Route::get('/job/delete/{id}', [JobController::class, 'delete'])->name('job-delete');
    Route::get('/job/verify/{id}', [JobController::class, 'verify'])->name('job-verify');
    Route::get('/job/edit/{id}', [JobController::class, 'edit'])->name('job-edit');
    Route::post('/job/save', [JobController::class, 'save'])->name('job-save');
    Route::post('/job/update/{id}', [JobController::class, 'update'])->name('job-update');
    //route for app
});
Route::get('/app/job', [JobControllerApp::class, 'index'])->name('app-job-index');
Route::get('/app/job/list', [JobControllerApp::class, 'list'])->name('app-job-list');
Route::get('/app/job/application', [JobControllerApp::class, 'listJob']);
Route::get('/app/job/all', [JobControllerApp::class, 'app-getAllJobDetails']);
Route::get('/app/job/delete/{id}', [JobControllerApp::class, 'delete'])->name('app-job-delete');
Route::get('/app/job/verify/{id}', [JobControllerApp::class, 'verify'])->name('app-job-verify');
Route::get('/app/job/edit/{id}', [JobControllerApp::class, 'edit'])->name('app-job-edit');
Route::post('/app/job/save', [JobControllerApp::class, 'save'])->name('app-job-save');
Route::post('/app/job/update/{id}', [JobControllerApp::class, 'update'])->name('app-job-update');
//Employee Routes
Route::get('/application-details', [ApplicationController::class, 'index'])->name('application-index');
Route::get('/application-details', [ApplicationController::class, 'edit'])->name('application-edit');

//Category ROutes

Route::get('/category/show', [CategoryController::class, 'show'])->name('category-form');
Route::post('/category/save', [CategoryController::class, 'save'])->name('category-save');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category/data', [CategoryControllerApp::class, 'show'])->name('category-show');
Route::post('/registerUser/add', [UserRegController::class, 'store'])->name('user-register');
Route::post('/registerUser/mobile', [UserRegController::class, 'storeMobile']);
Route::post('/saveMobile', [UserRegController::class, 'saveMobile']);



// dashboard routes

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/completeprofile', [App\Http\Controllers\DashboardController::class, 'completeProfile'])->name('complete.profile');
Route::post('/completeprofile/create', [App\Http\Controllers\DashboardController::class, 'createProfile'])->name('profile.store');
Route::get('/pending-page', [App\Http\Controllers\DashboardController::class, 'verifyPending'])->name('profile.verify`');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
