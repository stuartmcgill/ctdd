<?php

declare(strict_types=1);

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Model;
use CwsDigital\TwillMetadata\Models\Behaviours\HasMetadata;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasBlocks, HasFactory, HasMedias, HasRevisions, HasSlug;
    use HasMetadata;

    protected $fillable = [
        'published',
        'title',
        'description',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $metadataFallbacks = [
        'title' => 'title', // Falls back to the model's 'title' field
    ];
}
