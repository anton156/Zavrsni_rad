<?php

namespace App\Providers;
use App\Models\Kolegij;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['predavanjes.fields'], function ($view) {
            $kolegijItems = Kolegij::pluck('naziv','id')->toArray();
            $view->with('kolegijItems', $kolegijItems);
        });
        View::composer(['predavanjes.fields'], function ($view) {
            $KolegijItems = Kolegij::pluck('naziv','id')->toArray();
            $view->with('KolegijItems', $KolegijItems);
        });
        //
    }
}