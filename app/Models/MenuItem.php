<?php

declare(strict_types=1);

namespace App\Models;

use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\HasRelated;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class MenuItem extends Model implements Sortable
{
    use HasPosition, HasRelated;

    protected $fillable = [
        'published',
        'title',
        'position',
    ];
}
