<?php

declare(strict_types=1);

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Church;

class ChurchRepository extends ModuleRepository
{
    use HandleMedias, HandleRevisions, HandleSlugs;

    public function __construct(Church $model)
    {
        $this->model = $model;
    }
}
