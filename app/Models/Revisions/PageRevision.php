<?php

declare(strict_types=1);

namespace App\Models\Revisions;

use A17\Twill\Models\Revision;

class PageRevision extends Revision
{
    protected $table = 'page_revisions';
}
