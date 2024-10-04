<?php

namespace App\View\Components\Front;

use App\Models\AppFeature;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeaturesComponent extends Component
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
        $features = AppFeature::where('is_active', true)->get();
        return view('components.front.features-component', compact('features'));
    }
}
