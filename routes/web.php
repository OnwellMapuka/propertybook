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
