<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;

//login route
Route::get('/admin/login', function () {
    return view('admin.auth.login');
})->name('admin.auth.login');

Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.auth.login');
