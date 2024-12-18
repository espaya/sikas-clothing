<?php

use App\Http\Controllers\AccountDetailsController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\TwoFactorController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function(){
    
    Route::get('/', function () {
        return view('index');
    })->name('homepage');
    
    Route::get('/myaccount/login', [LoginController::class, 'showLoginForm'])->name('login.view');
    Route::post('/myaccount/login', [LoginController::class, 'login'])->name('login');
    Route::post('/myaccount/logout', [LoginController::class, 'logout'])->name('logout');
    
    Route::get('/myaccount/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    // Route::post('/myaccount/register', [RegisterController::class, 'register'])->name('register');
    
});


Route::get('/myaccount/2fa-setup', [TwoFactorController::class, 'showForms'])->name('2fa.show');
Route::post('/myaccount/2fa-setup/', [TwoFactorController::class, 'verify'])->name('2fa.verify');

Route::get('/myaccount/admin')->name('admin');

/*
* Customer routes
*
*/
Route::get('/myaccount/home', [HomeController::class, 'index'])->name('home');
Route::get('/myaccount', [HomeController::class, 'index'])->name('home');
Route::get('/myaccount/orders', [OrdersController::class, 'index'])->name('orders');
Route::get('/myaccount/addresses', [AddressController::class, 'index'])->name('address');
Route::get('/myaccount/account-details', [AccountDetailsController::class, 'index'])->name('account.details');
Route::get('/myaccount/wishlist', [WishlistController::class, 'index'])->name('wishlist');