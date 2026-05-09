<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\User\IndexController::class, 'index']);

Route::get('/admin-index', function () {
    return view('admin.index');
});
