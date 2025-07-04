<?php

declare(strict_types=1);

namespace App\Providers;

use A17\Twill\Facades\TwillAppSettings;
use A17\Twill\Facades\TwillNavigation;
use A17\Twill\Services\Settings\SettingsGroup;
use A17\Twill\View\Components\Navigation\NavigationLink;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('churches')
        );

        TwillNavigation::addLink(
            NavigationLink::make()->forModule('articles')
        );

        TwillNavigation::addLink(
            NavigationLink::make()->forModule('pages')
        );

        TwillNavigation::addLink(
            NavigationLink::make()->forModule('menuItems')->title('Menu')
        );

        TwillAppSettings::registerSettingsGroup(
            SettingsGroup::make()->name('homepage')->label('Homepage')
        );

        TwillAppSettings::registerSettingsGroup(
            SettingsGroup::make()->name('churches')->label('Churches')
        );
    }
}
