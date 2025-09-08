<?php

declare(strict_types=1);

namespace App\View\Components;

use A17\Twill\Models\Media;
use A17\Twill\Models\Model;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TwillImage extends Component
{
    public readonly ?Media $media;
    public readonly string $imageAlt;
    public readonly string $desktopUrl;
    public readonly string $mobileUrl;

    /**
     * Create a new component instance.
     */
    public function __construct(public readonly Model $item, public readonly ?string $class = '')
    {
        $this->media = $item->medias('cover')->first();
        $this->imageAlt = $media?->alt_text ?? $item->title;
        $this->desktopUrl = $item->image('cover');
        $this->mobileUrl = $item->image('cover', 'mobile');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.twill-image');
    }
}
