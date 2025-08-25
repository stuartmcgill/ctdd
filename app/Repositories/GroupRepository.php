<?php

declare(strict_types=1);

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Group;

class GroupRepository extends ModuleRepository
{
    use HandleRevisions;

    public function __construct(Group $model)
    {
        $this->model = $model;
    }
}
