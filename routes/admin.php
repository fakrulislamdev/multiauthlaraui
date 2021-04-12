<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;


Route::get('/admin', function () {
    return view('admin.login');
});
Auth::routes();

Route::middleware([Admin::class])->group(function () {
 

    Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminIndex'])->name('admin.home');
});

