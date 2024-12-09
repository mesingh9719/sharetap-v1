<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/faqs', function () {
    return view('front.faqs');
})->name('faqs');

Route::get('/login', function () {
    return view('front.login');
})->name('user.login');



Route::prefix('card')->group(function () {
    Route::get('/create', [CardController::class, 'create'])->name('card.create');
    Route::get('/templates', [TemplateController::class, 'templates'])->name('card.templates');
    Route::post('/store', [CardController::class, 'store'])->name('card.store');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('front.dashboard');
    })->name('dashboard');

    Route::view('/templates', 'front.templates.index')->name('templates');
});

include 'admin.php';

Route::get('/{unique_url}', [CardController::class, 'show'])->name('front.card.show');



