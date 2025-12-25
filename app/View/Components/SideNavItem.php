<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SideNavItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $href,
        public bool $currentPage,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.side-nav-item');
    }
}
