<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\IndexController;
use \App\Http\Controllers\User\IndexController as UserIndexController;

Route::get('/', [UserIndexController::class,'index']);


Route::get('/admin/login', [IndexController::class,'login'])->name('login');
Route::post('/admin/login', [IndexController::class,'doLogin'])->name('admin.login');

//Route::middleware(['auth'])->group(function () {
//    Route::get('/admin/create-product', function (){
//        echo "hello";
//    });
//});
