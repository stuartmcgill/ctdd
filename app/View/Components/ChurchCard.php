<?php

declare(strict_types=1);

namespace App\View\Components;

use App\Models\Church;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ChurchCard extends Component
{
    public function __construct(private readonly Church $church) {}

    public function render(): View
    {
        return view('components.church-card', ['church' => $this->church]);
    }
}
