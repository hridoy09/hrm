<?php

namespace App\Providers;

use App\Models\logo;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification;
use Illuminate\Contracts\View\View;
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

        view()->composer('layouts.topbar', function ($view) {
            $topbarVariables['notifications']     = Notification::latest()->take(10)->get();
            $topbarVariables['shopnotifications'] = Notification::where('shop_id', Auth::id())->latest()->take(10)->get();

            $topbarVariables['notificationscount'] = Notification::unseen()->count();
            $topbarVariables['shopnotificationscount'] = Notification::unseenByShop(Auth::id())->count();
            $view->with($topbarVariables);

        });


        $logos=Logo::latest()->first();
        view()->share('logo', $logos);
    }
}
