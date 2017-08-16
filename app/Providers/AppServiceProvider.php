<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('components.sidebar', function($view)
        {
            $view->with('archives', \App\Models\Post::archives());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
        $this->app->register(\Way\Generators\GeneratorsServiceProvider::class);
        $this->app->register(\Xethron\MigrationsGenerator\MigrationsGeneratorServiceProvider::class);
    }
    }
}
