<?php

declare(strict_types=1);

namespace App\Http\Requests\Twill;

use A17\Twill\Http\Requests\Admin\Request;

class PageRequest extends Request
{
    public function rulesForCreate()
    {
        return [];
    }

    public function rulesForUpdate()
    {
        return [];
    }
}
