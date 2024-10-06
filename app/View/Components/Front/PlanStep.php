<?php

namespace App\View\Components\Front;

use App\Models\SubscriptionPlan;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PlanStep extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $plans = SubscriptionPlan::all();
        return view('components.front.plan-step',compact('plans'));
    }
}
