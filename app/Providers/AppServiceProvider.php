<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use DB;
use Illuminate\Pagination\Paginator;

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
        //
        View::share('loai',DB::table('loai')->get());
        View::share('nhaxb',DB::table('nhaxb')->get());
        View::share('sachbanchay',DB::table('sach')->where('banchay',1)->get());
        Paginator::useBootstrap();
    }
}
