<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\ProjectSetting;
use Illuminate\Support\Facades\View;
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
        View::composer(['user.partials.header', 'user.partials.footer'], function ($view) {
            $categories = Category::all();
            $project_settings = ProjectSetting::first();
            $view->with(['header_categories' => $categories, 'header_project_settings' => $project_settings]);
        });
    }
}
