<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/authlogin', [AuthController::class, 'login'])->name('authlogin');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/authregister', [AuthController::class, 'register'])->name('authregister');

// Route::get('/dashboard', function(){
//     return view('dashboard');
// })->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


// Route::get('/dashboard', function () {
//     return 'Welcome to your dashboard!';
// })->middleware('auth')->name('dashboard');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/project', function () {
    return view('content.project');
});

Route::get('/calendar', function () {
    return view('content.calendar');
});