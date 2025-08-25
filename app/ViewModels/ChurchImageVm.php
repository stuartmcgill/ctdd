<?php

declare(strict_types=1);

namespace App\ViewModels;

readonly class ChurchImageVm
{
    public function __construct(
        public string $alt,
        public string $desktopUrl,
        public string $mobileUrl,
    ) {}
}
