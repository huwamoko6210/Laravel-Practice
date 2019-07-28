<?php

namespace App\Providers;

use App\Myclasses\MyService;
use App\Myclasses\PowerMyService;
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
        app()->resolving(function($obj, $app){
           if(is_object($obj)){
               echo get_class($obj) . '<br>';
           }
           else{
               echo $obj . '<br>';
           }
        });

        app()->resolving(PowerMyService::class, function($obj, $app){
            $newdata = ['いち', 'りん', 'バナ', '鶏'];
            $obj->setData($newdata);
            $obj->setId(rand(0, count($newdata)));
        });

        app()->singleton('App\Myclasses\MyServiceInterface', 'App\Myclasses\PowerMyService');
    }
}
