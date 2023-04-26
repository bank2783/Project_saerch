<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [ HomeController::class, 'index' ]);

Route::get('/signin', [ AuthController::class, 'signin' ])->name('signin');
Route::post('/signin', [ AuthController::class, 'signinPostback' ])->name('signin_postback');
Route::get('/signout', [ AuthController::class, 'signout' ])->name('signout');
Route::get('/signout_postback', [ AuthController::class, 'signoutPostback' ])->name('signout_postback');

// Route::get('/', function () {
//     return view('welcome');
// });
