<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Student\DashboardController as StudentDashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('show.login');
});


Route::group(['middleware' => 'guest'], function () {
    
    // Login Form
    Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');

    // Post Login Form
    Route::post('login', [AuthController::class, 'login'])->name('login');
});



Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => 'Role:faculty', 'prefix' => 'admin'], function () {

        // Admin Dashboard Page
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');
    });

    Route::group(['middleware' => 'Role:student', 'prefix' => 'student'], function () {

        // User Dashboard Page
        Route::get('/dashboard', [StudentDashboardController::class, 'index'])->name('student.dashboard.index');
    });
});
