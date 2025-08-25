<?php

declare(strict_types=1);

namespace App\Models;

use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model implements Sortable
{
    use HasFactory, HasPosition, HasRevisions;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
    ];

    public function churches(): HasMany
    {
        return $this->hasMany(Church::class);
    }
}
