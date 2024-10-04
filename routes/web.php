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

Route::get('/templates', [TemplateController::class, 'templates'])->name('card.templates');

Route::prefix('card')->group(function () {
    Route::get('/create', [CardController::class, 'create'])->name('card.create');
    Route::post('/templates', [CardController::class, 'cardTemplates'])->name('card.templates');
});