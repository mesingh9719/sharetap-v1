<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\Front\TemplatesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/signup', function () {
        return view('front.signup');
    })->name('user.signup');

    Route::post('register', [RegisterController::class, 'register'])->name('user.register');
});


Route::get('/choose-template', function () {
    return view('front.choose-templates');
})->name('user.choose-template');


Route::get('/template-building', function () {
    return view('front.template-building');
})->name('user.template-building');

Route::get('/faqs', function () {
    return view('front.faqs');
})->name('faqs');



// Website Builder
Route::get('/website-builder', function () {
    return view('front.website-builder');
})->name('website.builder');

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

    Route::get('/onboarding', function () {
        return view('front.onboarding');
    })->name('user.onboarding');

    Route::post('/onboarding', [OnboardingController::class, 'store'])->name('onboarding.store');

    Route::resource('/templates', TemplatesController::class);

    // apis

    Route::get('/api/recommended-templates', [TemplatesController::class, 'recommendedTemplates'])->name('recommended-templates');
});

include 'admin.php';

Route::get('/{unique_url}', [CardController::class, 'show'])->name('front.card.show');



