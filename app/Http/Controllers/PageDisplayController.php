<?php

namespace App\Http\Controllers;

use App\Repositories\PageRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageDisplayController extends Controller
{
    public function show(string $slug, PageRepository $pageRepository): View
    {
        $page = $pageRepository->forSlug($slug);
        abort_if(is_null($page), 404);
        
        return view('site.page', ['item' => $page]);
    }
}
