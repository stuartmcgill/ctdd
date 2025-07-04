<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\ArticleRepository;
use Illuminate\Contracts\View\View;

class ArticleDisplayController extends Controller
{
    public function show(string $slug, ArticleRepository $articleRepository): View
    {
        $article = $articleRepository->forSlug($slug);
        abort_if(is_null($article), 404);

        return view('site.article', ['item' => $article]);
    }

    public function list(ArticleRepository $articleRepository): View
    {
        $articles = $articleRepository
            ->where('published', 1)
            ->orderBy('position')
            ->get();

        return view('site.articles', ['articles' => $articles]);
    }
}
