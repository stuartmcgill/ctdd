<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use A17\Twill\Facades\TwillAppSettings;
use App\Models\Page;
use App\Repositories\PageRepository;
use Illuminate\Contracts\View\View;

class PageDisplayController extends Controller
{
    public function home(): View
    {
        abort_if(TwillAppSettings::get('homepage.homepage.page')->isEmpty(), 404);

        /** @var Page $frontPage */
        $frontPage = TwillAppSettings::get('homepage.homepage.page')->first();
        if ($frontPage->published) {
            return view('site.page', ['item' => $frontPage]);
        }
    }

    public function show(string $slug, PageRepository $pageRepository): View
    {
        $page = $pageRepository->forSlug($slug);
        abort_if(is_null($page), 404);

        return view('site.page', ['item' => $page]);
    }
}
