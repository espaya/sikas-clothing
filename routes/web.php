<?php

use App\Http\Controllers\TwoFactorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/account/login-register', function(){
    return view('auth.login');
});

Route::get('/account/2fa-setup', [TwoFactorController::class, 'showForms'])->name('2fa.show');
Route::post('/account/2fa-setup/', [TwoFactorController::class, 'verify'])->name('2fa.verify');

Route::get('/account/admin')->name('admin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
