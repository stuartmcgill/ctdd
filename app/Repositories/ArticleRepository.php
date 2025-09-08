<?php

declare(strict_types=1);

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Article;
use Illuminate\Support\Collection;

class ArticleRepository extends ModuleRepository
{
    use HandleBlocks, HandleMedias, HandleRevisions, HandleSlugs;

    public function __construct(Article $model)
    {
        $this->model = $model;
    }

    /**
     * @return Collection<Article>
     */
    public function fetchRecent(int $limit): Collection
    {
        return $this->published()
            ->orderBy('created_at', 'desc')
            ->limit($limit)
            ->get();
    }
}
