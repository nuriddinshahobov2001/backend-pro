<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\User\IndexController::class, 'index'])->name('web.index');
Route::get('/create-new-user', [\App\Http\Controllers\User\IndexController::class, 'create'])->name('create-new-user');
Route::post('/store-new-user', [\App\Http\Controllers\User\IndexController::class, 'store1'])->name('store-new-user');

Route::get('/admin-index', function () {
    return view('admin.index');
});
