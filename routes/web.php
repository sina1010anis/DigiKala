<?php

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

Route::get('/', function () {return view('front.section.index_page');});
Route::get('/google-login', [\App\Http\Controllers\auth::class , 'redirectToProvider'])->name('google_login');
Route::get('/callback', [\App\Http\Controllers\auth::class , 'handleProviderCallback'])->name('callback');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
