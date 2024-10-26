<?php

namespace App\View\Components\admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $name, public string $teste)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.admin-card');
    }
}
