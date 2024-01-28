<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\CategoryFieldController;
use App\Http\Controllers\Backend\LapanganController;
use App\Http\Controllers\NonAdminLapanganController;

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

// Route Administrator
Route::prefix('backend')->group(function () {
    Route::middleware(['auth','checkRole:admin'])->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('dashboard');
        Route::resource('/user', UserController::class);
        Route::resource('/category', CategoryFieldController::class);
        Route::resource('/lapangan', LapanganController::class);
    });
});

// Route non administrator
Route::resource('/lapangan', NonAdminLapanganController::class);

Route::post('logout', function () {
    \Auth::logout();
    return redirect('login');
});
Route::get('logout', function () {
    return redirect('/backend/dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [LapanganController::class,'welcome_page'])->name('welcome');
