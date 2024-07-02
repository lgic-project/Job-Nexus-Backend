<?php

use App\Http\Controllers\admin\ApplicationController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\JobController;
use App\Http\Controllers\admin\EmployeeController;
use App\Http\Controllers\admin\EmployerController;
use App\Http\Controllers\admin\NotificationController;
use App\Http\Controllers\admin\WishlistController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\app\JobControllerApp;
use App\Http\Controllers\auth\UserRegController;
use App\Http\Controllers\login\LoginController;
use App\Models\Application;
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
    $jobData = Job::with('employer')
        ->where('job_status', 'verified')
        ->get(); // Eager loading employer relationship
    return response()->json($jobData);
});

//routes for job
Route::get('/jobs', [JobController::class, 'filterJobs']);
Route::post('/job/save', [JobController::class, 'saveMobile']);
Route::post('/user/save', [UserRegController::class, 'saveMobile']);
Route::get('/job/all', [JobController::class, 'getAllJobDetails']);
Route::get('/job/category/mobile/{category}', [JobController::class, 'categoryJob']);
Route::get('/job/detail/{id}', [JobControllerApp::class, 'detail']);


//routes for employer
Route::post('/employer/store', [EmployerController::class, 'store']);

//routes for employee
Route::post('/employee/store', [EmployeeController::class, 'store']);
Route::post('/login/user', [UserRegController::class, 'loginMobile']);
Route::get('/checkEmployee/{user_id}', [EmployeeController::class, 'checkEmployee']);
Route::get('/employee/{user_id}', [EmployeeController::class, 'profileMobile']);
Route::get('/employer/mobile/{user_id}', [EmployerController::class, 'profileMobile']);


//route for category
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{title}', [CategoryController::class, 'getJobsByCategory']);

//routes for wishlist
Route::get('/wishlist/{id}', [WishlistController::class, 'showWishlist']);
Route::post('/wishlist/save/{job_id}/{emp_id}', [WishlistController::class, 'saveWishlist']);
Route::get('/wishlist/{job_id}/{emp_id}', [WishlistController::class, 'deleteWishlist']);
Route::get('/wishlist/view/{job_id}/{emp_id}', [WishlistController::class, 'isFavorite']);


// Route::post('/register', [UserRegController::class, 'store']);

//routes for application
Route::post('/application/save', [ApplicationController::class, 'saveMobile']);
Route::get('/application/{user_id}', [ApplicationController::class, 'viewApplication']);


Route::post('/employee/complete-profile', [EmployeeController::class, 'Mobilestore']);
Route::post('/employer/complete-profile', [EmployerController::class, 'Mobilestore']);


Route::post('/login/mobile', [LoginController::class, 'login']);


Route::get('/jobdetail/mobile/{user_id}', [JobController::class, 'jobDataMobileShow']);
Route::get('/view/application/{user_id}', [ApplicationController::class, 'viewJobApplication']);
Route::get('/accept/application/{user_id}', [ApplicationController::class, 'mobileApplicantAccept']);
Route::get('/reject/application/{user_id}', [ApplicationController::class, 'mobileApplicantReject']);
Route::get('/application/list/mobile/{user_id}', [ApplicationController::class, 'allApplications']);


//route  for notification

Route::get('/notifications/show', [NotificationController::class, 'viewNotifications']);
