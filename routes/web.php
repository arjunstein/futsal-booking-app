<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\CategoryFieldController;
use App\Http\Controllers\Backend\LapanganController;
use App\Http\Controllers\BookingController;
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
    Route::middleware(['auth', 'checkRole:admin'])->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('dashboard');
        Route::resource('/user', UserController::class);
        Route::resource('/category', CategoryFieldController::class);
        Route::resource('/lapangan', LapanganController::class);
    });
});

Route::middleware(['auth', 'checkRole:admin,member'])->group(function () {
    Route::get('/lapangan/{id}/booking', [BookingController::class, 'booking_lapangan'])->name('booking_lapangan');
});

// Route non administrator
Route::resource('/lapangan', NonAdminLapanganController::class);
Route::get('/', [NonAdminLapanganController::class, 'welcome_page'])->name('welcome');
Route::get('/futsal', [NonAdminLapanganController::class, 'get_futsal'])->name('get_futsal');
Route::get('/mini_soccer', [NonAdminLapanganController::class, 'get_mini_soccer'])->name('get_mini_soccer');
Route::get('/events', [NonAdminLapanganController::class, 'events'])->name('events');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

Route::post('logout', function () {
    \Auth::logout();
    return redirect('login');
});
Route::get('logout', function () {
    return redirect('/backend/dashboard');
});

Auth::routes();

Route::get('/permission_denied', function () {
    return view('permission_denied');
});
