<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\HomePageContent;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->extend('url', function ($url, $app) {
            $custom = new \App\Services\CustomUrlGenerator(
                $app['router']->getRoutes(),
                $app->rebinding('request', function ($app, $request) use (&$custom) {
                    $custom->setRequest($request);
                }),
                $app['config']['app.asset_url']
            );
            $custom->setSessionResolver(function () {
                return $this->app['session'] ?? null;
            });
            $custom->setKeyResolver(function () {
                return $this->app->make('config')->get('app.key');
            });
            if ($app->bound('request')) {
                $custom->setRequest($app['request']);
            }
            return $custom;
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer(['layout.header', 'layout.app'], function ($view) {
            $headerContent = rescue(fn () => HomePageContent::getSection('header'), []);
            $headerCategories = rescue(fn () => Category::active()->orderBy('sort_order', 'asc')->orderBy('name', 'asc')->get(), collect());

            $view->with([
                'headerContent'    => $headerContent,
                'headerCategories' => $headerCategories,
            ]);
        });
    }
}
