<?php

declare(strict_types=1);

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Church extends Model
{
    use HasFactory, HasMedias, HasRevisions, HasSlug;

    protected $fillable = [
        'published',
        'title',
        'group_id',
        'description',
        'location',
        'address',
        'office_address',
        'map_link',
        'osm_link',
        'email',
        'url',
    ];

    public $slugAttributes = [
        'title',
    ];

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }

    public function url(): string
    {
        return route('frontend.church', ['slug' => $this->slug]);
    }

    public $mediasParams = [
        'cover' => [
            'default' => [
                [
                    'name' => 'desktop',
                    'ratio' => 16 / 9,
                ],
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
        ],
        'church_image' => [
            'default' => [
                [
                    'name' => 'desktop',
                    'ratio' => 16 / 9,
                ],
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
        ],
    ];
}
