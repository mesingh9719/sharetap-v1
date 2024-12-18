<?php

namespace App\View\Components\Front;

use App\Models\Template;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TemplateSelection extends Component
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
        $templates = Template::all();
        return view('components.front.template-selection',compact('templates'));
    }
}
