<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use A17\Twill\Facades\TwillAppSettings;
use App\Models\Group;
use App\Repositories\ChurchRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;

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
        $churches = $churchRepository->where('published', 1)->orderBy('title')->get();

        $groups = $this->fetchGroups();

        return view(
            'site.churches',
            [
                'churches' => $churches,
                'groups' => $groups,
                'combinedGroupText' => $this->buildCombinedGroupsText($groups),
                'allChurchesMapEmbedCode' => TwillAppSettings::get('churches.maps.url'),
            ],
        );
    }

    /**
     * @return Collection<Group>
     */
    private function fetchGroups(): Collection
    {
        return Group::with(['churches' => function ($query) {
            $query->where('published', 1)->orderBy('title');
        }])
            ->where('published', 1)
            ->whereHas('churches', function ($query) {
                $query->where('published', 1);
            })
            ->orderBy('title')
            ->get();
    }

    /**
     * @return Collection<Group>
     */
    private function buildCombinedGroupsText(Collection $groups): string
    {
        if ($groups->isEmpty()) {
            return '';
        }

        $groupTitles = $groups->pluck('title');

        return $groupTitles->count() <= 2
            ? $groupTitles->join(' and ')
            : $groupTitles->slice(0, -1)->join(', ').', and '.$groupTitles->last();
    }
}
