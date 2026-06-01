<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\IndexController;
use \App\Http\Controllers\User\IndexController as UserIndexController;

Route::get('/', [UserIndexController::class,'index']);


Route::get('/admin/login', [IndexController::class,'login'])->name('login');
Route::post('/admin/login', [IndexController::class,'doLogin'])->name('admin.login');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [\App\Http\Controllers\Admin\DashboardController::class,'index'])->name('admin.dashboard.index');
    Route::post('/admin/logout', [IndexController::class,'logout'])->name('admin.logout');
});
