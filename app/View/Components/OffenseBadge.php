<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OffenseBadge extends Component
{
    public $offense;
    /**
     * Create a new component instance.
     */
    public function __construct($offense)
    {
        $this->offense = $offense;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.offense-badge');
    }
}
