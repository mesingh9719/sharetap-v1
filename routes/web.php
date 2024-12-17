<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\Front\TemplatesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\RegisterController;
use App\Http\Controllers\Front\OnboardingController;
use App\Http\Controllers\Front\Authenticated\WebsiteBasicInfoController;
use App\Http\Controllers\Front\SubdomainController;

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

    Route::middleware(['auth'])->group(function () {
        Route::get('/website/basic-info', [WebsiteBasicInfoController::class, 'index'])
             ->name('website.basic-info.index');
        Route::get('/website/basic-info/edit', [WebsiteBasicInfoController::class, 'edit'])
             ->name('website.basic-info.edit');
        Route::put('/website/basic-info', [WebsiteBasicInfoController::class, 'update'])
             ->name('website.basic-info.update');
    });

    // apis

    Route::get('/api/recommended-templates', [TemplatesController::class, 'recommendedTemplates'])->name('recommended-templates');
    Route::get('/api/active-templates', [TemplatesController::class, 'activeTemplates'])->name('active-templates');
    // routes/api.php
Route::get('/api/subdomain/check', [SubdomainController::class, 'check'])->name('subdomain.check');
});

include 'admin.php';

Route::get('/{unique_url}', [CardController::class, 'show'])->name('front.card.show');



