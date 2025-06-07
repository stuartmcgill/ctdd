<?php

namespace App\Http\Controllers;

use App\Repositories\ChurchRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

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
        $churches = $churchRepository->where('published', 1)->get();

        return view('site.churches', ['churches' => $churches]);
    }
}
