<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use A17\Twill\Facades\TwillAppSettings;
use App\Models\Church;
use App\Models\Group;
use App\Repositories\ChurchRepository;
use App\ViewModels\ChurchImageVm;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;

class ChurchDisplayController extends Controller
{
    public function show(string $slug, ChurchRepository $churchRepository): View
    {
        /** @var Church $church */
        $church = $churchRepository->forSlug($slug);
        abort_if(is_null($church), 404);

        return view(
            'site.church',
            [
                'item' => $church,
                'image' => $this->getImage($church),
            ],
        );
    }

    public function list(ChurchRepository $churchRepository): View
    {
        $mainChurches = $churchRepository
            ->where('published', 1)
            ->whereNull('group_id')
            ->orderBy('title')
            ->get();

        $groups = $this->fetchGroups();

        $total = $mainChurches->count() + $groups->reduce(
            fn (int $carry, Group $group) => $carry + $group->churches->count(),
            0,
        );

        return view(
            'site.churches',
            [
                'churches' => $mainChurches,
                'groups' => $groups,
                'total' => $total,
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

    private function getImage(Church $church): ?ChurchImageVm
    {
        $hasCoverImage = $church->hasImage('cover');
        $hasChurchImage = $church->hasImage('church_image');

        if (! $hasCoverImage && ! $hasChurchImage) {
            return null;
        }

        $imageKey = $hasChurchImage ? 'church_image' : 'cover';

        return new ChurchImageVm(
            alt: $church->imageAltText($imageKey) ?? $church->title,
            desktopUrl: $church->image($imageKey),
            mobileUrl: $church->image($imageKey, 'mobile'),
        );
    }
}
