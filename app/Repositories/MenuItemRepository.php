<?php

declare(strict_types=1);

namespace App\Repositories;

use A17\Twill\Repositories\ModuleRepository;
use App\Models\MenuItem;

class MenuItemRepository extends ModuleRepository
{
    protected $relatedBrowsers = ['page'];

    public function __construct(MenuItem $model)
    {
        $this->model = $model;
    }
}
