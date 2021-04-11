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

Route::get('/', function () {return view('front.section.index_page');})->name('index.page');
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
    Route::post('/new/comment' , [\App\Http\Controllers\ProductController::class , 'newComment'])->name('product.newComment');
    Route::post('/filter' , [\App\Http\Controllers\ProductController::class , 'filterProduct'])->name('product.filterProduct');
    Route::post('/save' , [\App\Http\Controllers\ProductController::class , 'saveProduct'])->name('product.saveProduct');
});
Route::prefix('user')->group(function (){
    Route::get('/profile' , [\App\Http\Controllers\UserController::class , 'index'])->name('user.profile');
    Route::get('/profile/my/order' , [\App\Http\Controllers\UserController::class , 'order'])->name('user.order');
    Route::get('/profile/my/comment' , [\App\Http\Controllers\UserController::class , 'comment'])->name('user.comment');
    Route::get('/profile/my/list' , [\App\Http\Controllers\UserController::class , 'list'])->name('user.list');
    Route::get('/profile/my/location' , [\App\Http\Controllers\UserController::class , 'location'])->name('user.location');
    Route::get('/profile/my/card' , [\App\Http\Controllers\UserController::class , 'card'])->name('user.card');
    Route::get('/profile/my/message' , [\App\Http\Controllers\UserController::class , 'message'])->name('user.message');
    Route::get('/profile/my/view' , [\App\Http\Controllers\UserController::class , 'view'])->name('user.view');
    Route::get('/profile/exit' , [\App\Http\Controllers\UserController::class , 'exitUser'])->name('user.exit');
    Route::post('/new/address' , [\App\Http\Controllers\UserController::class , 'newAddress'])->name('user.newAddress');
    Route::post('/set/address' , [\App\Http\Controllers\UserController::class , 'setAddress'])->name('user.setAddress');
});
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
