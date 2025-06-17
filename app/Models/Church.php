<?php

declare(strict_types=1);

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Church extends Model
{
    use HasFactory, HasMedias, HasRevisions, HasSlug;

    protected $fillable = [
        'published',
        'title',
        'description',
        'location',
        'map_link',
        'email',
        'url',
    ];

    public $slugAttributes = [
        'title',
    ];

    public function url(): string
    {
        return route('frontend.church', ['slug' => $this->slug]);
    }
}
