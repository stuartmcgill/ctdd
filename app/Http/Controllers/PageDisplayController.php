<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use A17\Twill\Facades\TwillAppSettings;
use App\Models\Page;
use App\Repositories\PageRepository;
use CwsDigital\TwillMetadata\Traits\SetsMetadata;
use Illuminate\Contracts\View\View;

class PageDisplayController extends Controller
{
    use SetsMetadata;

    public function home(): View
    {
        abort_if(TwillAppSettings::get('homepage.homepage.page')->isEmpty(), 404);

        /** @var Page $page */
        $page = TwillAppSettings::get('homepage.homepage.page')->first();
        abort_unless($page->published, 404, 'The home page is not published');

        $this->setMetadata($page);

        return view('site.page', ['item' => $page]);
    }

    public function show(string $slug, PageRepository $pageRepository): View
    {
        /** @var Page $page */
        $page = $pageRepository->forSlug($slug);
        abort_if(is_null($page), 404);

        $this->setMetadata($page);

        return view('site.page', ['item' => $page]);
    }
}
