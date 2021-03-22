<?php

namespace App\Providers;
use View;
use Illuminate\Support\ServiceProvider;
use App\Models\OfficeStaff;
use App\Models\Volunteer;


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
        View::composer('*', function($view){
            //any code to set $val variable
            $val = Volunteer::all();
            $view->with('val', $val);
        });
    }
}
