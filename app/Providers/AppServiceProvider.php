<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Opportunity;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      $abouts = About::all();
      $opportunities = Opportunity::all();
      Schema::defaultStringLength(191);
      view()->share('abouts', $abouts);
      view()->share('opportunities', $opportunities);
    }
}
