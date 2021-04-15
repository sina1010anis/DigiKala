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

Route::get('/plus/card/{slug}' , [\App\Http\Controllers\ProductController::class , 'plusCard'])->name('plusCard');
Route::get('/', function () {return view('front.section.index_page');})->name('index.page');
Route::get('/google-login', [\App\Http\Controllers\authController::class , 'redirectToProvider'])->name('google_login');
Route::get('/callback', [\App\Http\Controllers\authController::class , 'handleProviderCallback'])->name('callback');
Route::get('/menu/{slug}' , [\App\Http\Controllers\menuController::class , 'index'])->name('menu_view');
Route::post('/set_like' , [\App\Http\Controllers\ProductController::class , 'set_like']);
Route::post('/set_dis_like' , [\App\Http\Controllers\ProductController::class , 'set_dis_like']);
Route::post('/search/product' , [\App\Http\Controllers\ProductController::class , 'searchProduct']);
Route::get('/test' , [\App\Http\Controllers\menuController::class , 'test']);
Route::get('/logout' , function (){
    auth()->logout();
})->middleware('authController');
Route::prefix('/product')->group(function (){
    Route::post('/new/comment/reply/{id}' , [\App\Http\Controllers\ProductController::class , 'replyComment'])->name('product.replyComment');
    Route::get('/view/{slug}' , [\App\Http\Controllers\ProductController::class , 'show'])->name('product.show');
    Route::post('/new/comment' , [\App\Http\Controllers\ProductController::class , 'newComment'])->name('product.newComment');
    Route::post('/filter' , [\App\Http\Controllers\ProductController::class , 'filterProduct'])->name('product.filterProduct');
    Route::post('/save' , [\App\Http\Controllers\ProductController::class , 'saveProduct'])->name('product.saveProduct');
    Route::post('/delete' , [\App\Http\Controllers\ProductController::class , 'deleteProduct'])->name('product.delete');
});
Route::prefix('admin')->middleware(['authController','role'])->group(function (){
    Route::get('/index' , [\App\Http\Controllers\AdminController::class , 'index'])->name('admin.index');
    Route::get('/address' , [\App\Http\Controllers\AdminController::class , 'address'])->name('admin.address');
    Route::get('/menuTop' , [\App\Http\Controllers\AdminController::class , 'menuTop'])->name('admin.menuTop');
    Route::get('/menuSub' , [\App\Http\Controllers\AdminController::class , 'menuSub'])->name('admin.menuSub');
    Route::get('/menuDown' , [\App\Http\Controllers\AdminController::class , 'menuDown'])->name('admin.menuDown');
    Route::get('/menuHeader' , [\App\Http\Controllers\AdminController::class , 'menuHeader'])->name('admin.menuHeader');
    Route::get('/attrFilter' , [\App\Http\Controllers\AdminController::class , 'attrFilter'])->name('admin.attrFilter');
    Route::get('/titleFilter' , [\App\Http\Controllers\AdminController::class , 'titleFilter'])->name('admin.titleFilter');
    Route::get('/bannerCenter' , [\App\Http\Controllers\AdminController::class , 'bannerCenter'])->name('admin.bannerCenter');
    Route::get('/bannerUp' , [\App\Http\Controllers\AdminController::class , 'bannerUp'])->name('admin.bannerUp');
    Route::get('/slider' , [\App\Http\Controllers\AdminController::class , 'slider'])->name('admin.slider');
    Route::get('/card' , [\App\Http\Controllers\AdminController::class , 'card'])->name('admin.card');
    Route::get('/brand' , [\App\Http\Controllers\AdminController::class , 'brand'])->name('admin.brand');
    Route::get('/city' , [\App\Http\Controllers\AdminController::class , 'city'])->name('admin.city');
    Route::get('/street' , [\App\Http\Controllers\AdminController::class , 'street'])->name('admin.street');
    Route::get('/commentProduct' , [\App\Http\Controllers\AdminController::class , 'commentProduct'])->name('admin.commentProduct');
    Route::get('/factor' , [\App\Http\Controllers\AdminController::class , 'factor'])->name('admin.factor');
    Route::get('/imageProduct' , [\App\Http\Controllers\AdminController::class , 'imageProduct'])->name('admin.imageProduct');
    Route::get('/commentAdmin' , [\App\Http\Controllers\AdminController::class , 'commentAdmin'])->name('admin.commentAdmin');
    Route::get('/commentReply' , [\App\Http\Controllers\AdminController::class , 'commentReply'])->name('admin.commentReply');
    Route::get('/product' , [\App\Http\Controllers\AdminController::class , 'product'])->name('admin.product');
    Route::get('/property' , [\App\Http\Controllers\AdminController::class , 'property'])->name('admin.property');
    Route::get('/saveProduct' , [\App\Http\Controllers\AdminController::class , 'saveProduct'])->name('admin.saveProduct');
    Route::get('/user' , [\App\Http\Controllers\AdminController::class , 'user'])->name('admin.user');
    Route::get('/exit' , [\App\Http\Controllers\AdminController::class , 'exitPage'])->name('admin.exit');
    Route::prefix('/delete')->group(function (){
        Route::get('/address/{id}' , [\App\Http\Controllers\AdminController::class , 'deleteAddress'])->name('admin.delete.address');
    });
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
    Route::post('/buy/product' , [\App\Http\Controllers\UserController::class , 'buyProduct'])->name('user.buyProduct');
    Route::get('/bank' , [\App\Http\Controllers\UserController::class , 'bank'])->name('user.bank');
    Route::get('/bank/verify' , [\App\Http\Controllers\UserController::class , 'bankVerify'])->name('user.bankVerify');
    Route::prefix('edit')->group(function (){
        Route::post('/name' , [\App\Http\Controllers\UserController::class , 'editName'])->name('user.edit.name');
        Route::post('/email' , [\App\Http\Controllers\UserController::class , 'editEmail'])->name('user.edit.email');
        Route::post('/mobile' , [\App\Http\Controllers\UserController::class , 'editMobile'])->name('user.edit.mobile');
        Route::post('/code' , [\App\Http\Controllers\UserController::class , 'editCode'])->name('user.edit.code');
        Route::post('/password' , [\App\Http\Controllers\UserController::class , 'editPassword'])->name('user.edit.password');
    });
});
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
