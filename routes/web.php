<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//


//Home Route
Route::get('/', [\App\Http\Controllers\Home\HomeController::class, 'show']);

//Admin Routes
Route::get('/admin', [\App\Http\Controllers\Admin\AdminController::class, 'create']);
Route::post('/admin', [\App\Http\Controllers\Admin\AdminController::class, 'store']);
Route::get('/admin/logout', [\App\Http\Controllers\Admin\LogoutController::class, 'store']);
Route::get('/admin/user.dashboard', [\App\Http\Controllers\Admin\AdminController::class, 'index']);

Route::get('/admin/homefooter', [\App\Http\Controllers\Admin\AdminController::class, 'show']);
Route::post('/admin/homefooter', [\App\Http\Controllers\Admin\AdminController::class, 'store']);

Route::get('/admin/services', [\App\Http\Controllers\Admin\AdminController::class, 'show']);
Route::post('/admin/services', [\App\Http\Controllers\Admin\AdminController::class, 'store']);

Route::get('/admin/pricing', [\App\Http\Controllers\Admin\AdminController::class, 'show']);
Route::post('/admin/pricing', [\App\Http\Controllers\Admin\AdminController::class, 'store']);

Route::get('/admin/pricing-content2', [\App\Http\Controllers\Admin\AdminController::class, 'show']);
Route::post('/admin/pricing-content2', [\App\Http\Controllers\Admin\AdminController::class, 'store']);

Route::get('/admin/images', [\App\Http\Controllers\Admin\AdminController::class, 'show']);
Route::post('/admin/images', [\App\Http\Controllers\Admin\AdminController::class, 'store']);

Route::get('/admin/hod.reg_course', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::post('/admin/hod.reg_course', [\App\Http\Controllers\Admin\NewApplicationController::class, 'store']);
//Route::get('/admin/hod.reg_subject', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
//Route::post('/admin/hod.reg_subject', [\App\Http\Controllers\Admin\NewApplicationController::class, 'store']);
Route::get('/admin/hod.reg_students', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::post('/admin/hod.reg_students', [\App\Http\Controllers\Admin\NewApplicationController::class, 'store']);
Route::get('/admin/hod.regstudents.delete', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/hod.regstudents.deletes', [\App\Http\Controllers\Admin\NewApplicationController::class, 'store']);

Route::get('/admin/hod.reg_requests', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/hod.reg_requestscourse', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/hod.reg_requestslevel', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/hod.reg_requests.course.approve/{id}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'update']);
Route::get('/admin/hod.reg_requests.course.reject/{id}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'update']);
Route::get('/admin/hod.reg_requests.class.approve/{id}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'update']);
Route::get('/admin/hod.reg_requests.class.reject/{id}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'update']);


Route::get('/admin/acc.new.application', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/acc.new.application-approved', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/acc.new.application-rejected', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/acc.new.application-restore/{id}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'update']);
Route::get('/admin/acc.new.application-approve/{id}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'update']);
Route::get('/admin/acc.new.application-reject/{id}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'update']);

Route::get('/admin/acc.newlevel.application', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/acc.newlevel.application-approved', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/acc.newlevel.application-rejected', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/acc.newlevel.application-restore/{id}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'update']);
Route::get('/admin/acc.newlevel.application-approve/{id}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'update']);
Route::get('/admin/acc.newlevel.application-reject/{id}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'update']);

Route::get('/admin/users', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::post('/admin/users', [\App\Http\Controllers\Admin\NewApplicationController::class, 'store']);
Route::get('/admin/users.action', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/users.action/{ecno}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'update']);

Route::get('/admin/division', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::post('/admin/division', [\App\Http\Controllers\Admin\NewApplicationController::class, 'store']);
Route::get('/admin/division.action', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/division.action/{code}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'update']);

Route::get('/admin/session', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/session.action', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::post('/admin/session', [\App\Http\Controllers\Admin\NewApplicationController::class, 'store']);
Route::get('/admin/session.actions', [\App\Http\Controllers\Admin\NewApplicationController::class, 'store']);

Route::get('/admin/semester.session', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/semester.session.action', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::post('/admin/semester.session', [\App\Http\Controllers\Admin\NewApplicationController::class, 'store']);
Route::get('/admin/semester.session.actions', [\App\Http\Controllers\Admin\NewApplicationController::class, 'store']);

Route::get('/admin/reg.session', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/reg.sessions', [\App\Http\Controllers\Admin\NewApplicationController::class, 'store']);
Route::get('/admin/return.session', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/return.sessions', [\App\Http\Controllers\Admin\NewApplicationController::class, 'store']);
Route::get('/admin/return.truncate', [\App\Http\Controllers\Admin\NewApplicationController::class, 'store']);

Route::get('/admin/hostels.session', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/hostels.sessions', [\App\Http\Controllers\Admin\NewApplicationController::class, 'store']);
Route::get('/admin/hostels.truncate', [\App\Http\Controllers\Admin\NewApplicationController::class, 'store']);

Route::get('/admin/mark.session', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/mark.sessions/{id}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'edit']);

Route::get('/admin/department', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::post('/admin/department', [\App\Http\Controllers\Admin\NewApplicationController::class, 'store']);
Route::get('/admin/department.action', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/department.action/{code}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'update']);

Route::get('/admin/level', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::post('/admin/level', [\App\Http\Controllers\Admin\NewApplicationController::class, 'store']);
Route::get('/admin/level.action', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/level.action/{code}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'update']);

Route::get('/admin/hostels', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::post('/admin/hostels', [\App\Http\Controllers\Admin\NewApplicationController::class, 'store']);
Route::get('/admin/hostels.action', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/hostels.action/{code}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'update']);

Route::get('/admin/course', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::post('/admin/course', [\App\Http\Controllers\Admin\NewApplicationController::class, 'store']);
Route::get('/admin/course.action', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/course.action/{code}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'update']);
Route::get('/admin/course.action.activate/{code}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'update']);
Route::get('/admin/course.action.deactivate/{code}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'update']);
Route::get('/admin/course.edit/{id}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'update']);
Route::post('/admin/course.update', [\App\Http\Controllers\Admin\NewApplicationController::class, 'store']);

Route::get('/admin/class', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::post('/admin/class', [\App\Http\Controllers\Admin\NewApplicationController::class, 'store']);
Route::get('/admin/class.action', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/class.action/{code}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'update']);

Route::get('/admin/subjects', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::post('/admin/subjects', [\App\Http\Controllers\Admin\NewApplicationController::class, 'store']);
Route::get('/admin/subjects.action', [\App\Http\Controllers\Admin\NewApplicationController::class, 'show']);
Route::get('/admin/subjects.action/{code}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'update']);
Route::get('/admin/subjects.action.edit/{code}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'edit']);
Route::put('/admin/subjects.action.edit/{code}', [\App\Http\Controllers\Admin\NewApplicationController::class, 'update']);



