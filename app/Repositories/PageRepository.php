<?php

declare(strict_types=1);

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Page;
use CwsDigital\TwillMetadata\Repositories\Behaviours\HandleMetadata;

class PageRepository extends ModuleRepository
{
    use HandleBlocks, HandleMedias, HandleRevisions, HandleSlugs;
    use HandleMetadata;

    public function __construct(Page $model)
    {
        $this->model = $model;
    }
}
