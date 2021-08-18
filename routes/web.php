<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\Backend\DashboardController;

use App\Http\Controllers\Backend\OrdersController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'superadmin'], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('admin/orders', [OrdersController::class, 'orders_list']);
});


Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('admin/orders', [OrdersController::class, 'orders_list']);
});


Route::group(['middleware' => 'teacher'], function () {

    Route::get('teacher/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('teacher/orders', [OrdersController::class, 'orders_list']);
});

Route::group(['middleware' => 'school'], function () {
    Route::get('school/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('school/orders', [OrdersController::class, 'orders_list']);
});




Route::get('teacher', [AuthController::class, 'teacher_index']);
Route::post('teacher', [AuthController::class, 'teacher_store']);

Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'login_auth']);

Route::get('logout', [AuthController::class, 'logout']);

Route::get('activate/{token}', [AuthController::class, 'activate']);

Route::get('forgot', [AuthController::class, 'forgot']);
Route::post('forgot', [AuthController::class, 'forgot_auth']);

Route::get('reset/{token?}', [AuthController::class, 'reset']);
Route::post('reset/{token?}', [AuthController::class, 'reset_auth']);