<?php

declare(strict_types=1);

namespace App\View\Components;

use App\Models\MenuItem;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
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
        /** @var MenuItem[] $links */
        $links = MenuItem::published()->orderBy('position')->get();

        return view('components.navbar', ['links' => $links]);
    }
}
