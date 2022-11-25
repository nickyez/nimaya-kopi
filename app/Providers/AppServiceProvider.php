<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Socmed;
use App\Models\Course;

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
        $instagram = Socmed::where('platform','Instagram')->first();
        $facebook = Socmed::where('platform','Facebook')->first();
        $gmail = Socmed::where('platform','Gmail')->first();
        $course = Course::all();
        config([
            'socmed.instagram' => $instagram,
            'socmed.facebook' => $facebook,
            'socmed.gmail' => $gmail,
            'course' => $course,
        ]);
    }
}
