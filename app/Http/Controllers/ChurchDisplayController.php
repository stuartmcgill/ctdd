<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use A17\Twill\Facades\TwillAppSettings;
use App\Repositories\ChurchRepository;
use Illuminate\Contracts\View\View;

class ChurchDisplayController extends Controller
{
    public function show(string $slug, ChurchRepository $churchRepository): View
    {
        $church = $churchRepository->forSlug($slug);
        abort_if(is_null($church), 404);

        return view('site.church', ['item' => $church]);
    }

    public function list(ChurchRepository $churchRepository): View
    {
        $allChurchesMapEmbedCode = TwillAppSettings::get('churches.maps.url');
        $churches = $churchRepository->where('published', 1)->orderBy('title')->get();

        return view(
            'site.churches',
            [
                'churches' => $churches,
                'allChurchesMapEmbedCode' => $allChurchesMapEmbedCode,
            ],
        );
    }
}
