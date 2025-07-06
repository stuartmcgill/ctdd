<?php

declare(strict_types=1);

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppButton extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public readonly string $label, public readonly string $url)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.app-button');
    }
}
