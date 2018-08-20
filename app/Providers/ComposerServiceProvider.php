<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('layouts.app', function($view) {

        // get all categories from DB
        $categories = DB::select('select * from category_tab');

        // get all brands from DB
        $brands = DB::select('select * from brand_tab');
        
        $view->with('all_categories', $categories)->with('all_brands', $brands);
    });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
