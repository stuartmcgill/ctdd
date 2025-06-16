<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with('menuLinks', [
                [
                    'label' => 'Home',
                    'icon' => 'pi pi-fw pi-home',
                    'url' => '/',
                ],
                [
                    'label' => 'About',
                    'icon' => 'pi pi-fw pi-info',
                    'url' => '/about',
                ],
                [
                    'label' => 'Settings',
                    'icon' => 'pi pi-fw pi-cog',
                    'items' => [
                        [
                            'label' => 'Profile',
                            'icon' => 'pi pi-fw pi-user',
                            'url' => '/profile',
                        ],
                        [
                            'label' => 'Security',
                            'icon' => 'pi pi-fw pi-lock',
                            'url' => '/security',
                        ],
                    ]
                ],
            ]);
        });
    }
}
