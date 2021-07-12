<?php

use App\Http\Controllers\SocialAuthController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'guest'], function() {
    Route::view('/my/login', 'auth.login')->name('login');
    Route::view('/my/2fa', 'auth.two-factor-challenge')->middleware(['guest:'.config('fortify.guard')])->name('two-factor.login');
    Route::view('/my/forgot-password', 'auth.forgot-password')->middleware(['guest:'.config('fortify.guard')])->name('password.request');
    Route::view('/my/reset-password', 'auth.reset-password')->middleware(['guest:'.config('fortify.guard')])->name('password.reset');
    Route::view('/my/register', 'auth.register');

    Route::get('/my/auth/social/{provider}/redirect', [SocialAuthController::class, 'socialRedirect']);
    Route::get('/my/auth/social/{provider}/callback', [SocialAuthController::class, 'socialCallback']);
});

Route::group(['middleware' => 'auth'], function() {
    Route::view('/my/verify-email', 'auth.verify-email')->name('verification.notice');
    Route::view('/dashboard', 'dashboard');
    Route::view('/account', 'account');
    Route::view('/transfers', 'transfers')->middleware(['verified']);
    Route::view('/password-confirm', 'auth.password-confirm')->name('password.confirm');
    Route::view('/show-balances', 'balances')->middleware('password.confirm');
});

Route::view('/shop', 'shop');
