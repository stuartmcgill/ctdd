<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use A17\Twill\Models\Model;

class Church extends Model
{
    use HasSlug, HasMedias, HasRevisions, HasFactory;

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

}
