<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TwoFactorController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function(){

    Route::get('/', function () {
        return view('index');
    });
    
    Route::get('/myaccount/login', [LoginController::class, 'showLoginForm'])->name('login.view');
    Route::post('/myaccount/login', [LoginController::class, 'login'])->name('login');

    Route::get('/myaccount/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    // Route::post('/myaccount/register', [RegisterController::class, 'register'])->name('register');
});


Route::get('/myaccount/2fa-setup', [TwoFactorController::class, 'showForms'])->name('2fa.show');
Route::post('/myaccount/2fa-setup/', [TwoFactorController::class, 'verify'])->name('2fa.verify');

Route::get('/myaccount/admin')->name('admin');

Route::get('/myaccount/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
