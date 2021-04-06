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
Route::get('/google-login', [\App\Http\Controllers\authController::class , 'redirectToProvider'])->name('google_login');
Route::get('/callback', [\App\Http\Controllers\authController::class , 'handleProviderCallback'])->name('callback');
Route::get('/menu/{slug}' , [\App\Http\Controllers\menuController::class , 'index'])->name('menu_view');
Route::post('/set_like' , [\App\Http\Controllers\ProductController::class , 'set_like']);
Route::post('/set_dis_like' , [\App\Http\Controllers\ProductController::class , 'set_dis_like']);
Route::get('/logout' , function (){
    auth()->logout();
});
Route::prefix('product')->group(function (){
    Route::post('/new/comment/reply/{id}' , [\App\Http\Controllers\ProductController::class , 'replyComment'])->name('product.replyComment');
    Route::get('/view/{slug}' , [\App\Http\Controllers\ProductController::class , 'show'])->name('product.show');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
