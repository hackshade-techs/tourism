<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      view()->composer(
          ['includes.navs'], 'App\Http\ViewComposers\TourCategoryComposer'
      );

      view()->composer(
          ['includes.navs'], 'App\Http\ViewComposers\TourComposer'
      );

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
