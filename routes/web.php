<?php

use App\Http\Controllers\UserActivatorController;
use App\Http\Controllers\UserAddFundsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserReferralHistoryController;

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
})->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get(
        '/dashboard',
        function () {
            return view('dashboard');
        }
    )->name('dashboard');

    Route::get('/user/referral', [UserReferralHistoryController::class, 'show'])->name('referral.show');
    Route::get('/user/add-funds', [UserAddFundsController::class, 'show'])->name('add-funds-show');
});

Route::get('/activate/{email}', [UserActivatorController::class, 'activate'])->name('user.activate');