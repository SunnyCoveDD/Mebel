<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
Route::get('/', [MainController::class, 'mainView'])->name('/');

Route::middleware('auth')->group(function (){
    Route::middleware('role:user,admin')->group(function(){
        Route::get('/admin', [UserController::class, 'adminView'])->name('admin');
        Route::middleware('role:admin')->group(function(){
            Route::group(['prefix' => '/admin', 'as' => 'admin.'], function(){
                Route::resource('/product', ProductController::class);
            });
        });
        Route::middleware('role:user')->group(function(){
            Route::get('/account', [UserController::class, 'accountView'])->name('acc');
        });
    });

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::get('/authorization', [UserController::class, 'authorizationView'])->name('auth');
Route::post('/authorization', [UserController::class, 'authorizationPost']);
Route::get('/registration', [UserController::class, 'registrationView'])->name('reg');
Route::post('/registration', [UserController::class, 'registrationPost']);
