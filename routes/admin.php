<?php

use App\Http\Controllers\Admin\TemplateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('admin.guest')->group(function () {
        Route::get('/login', function () {
            return view('admin.auth.login');
        })->name('auth.login');

        Route::post('/login', [AdminAuthController::class, 'login'])->name('auth.login.submit');
    });

    Route::middleware('admin.auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.index');
        })->name('dashboard');

        Route::get('/template/create',[TemplateController::class,"create"])->name('template.create');
    });
});
