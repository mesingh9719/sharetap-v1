<?php

namespace App\Providers;

use App\Models\AboutUs;
use App\Models\Setting;
use App\Models\SubscriptionPlan;
use App\Models\Testimonial;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('settings') && Schema::hasTable('about_us') && Schema::hasTable('testimonials') && Schema::hasTable('subscription_plans')) {
            View::share('settings', Setting::pluck('value', 'key')->toArray());
            View::share('aboutUS', AboutUs::all()->toArray());
            View::share('testimonials', Testimonial::all()->toArray());
            View::share('subscriptionPlans', SubscriptionPlan::all()->toArray());
        }
    }
}
