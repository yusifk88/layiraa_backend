<?php

namespace App\Providers;

use App\Name;
use Illuminate\Support\Facades\DB;
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
        Name::retrieved(function ($name){
            $name->date_contributed = $name->created_at->diffForHumans();
            $name->contributor = DB::table('users')->where('id',$name->user_id)->get()->first();
        });
    }
}
