<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Cache;
use App\Settings;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

      // Cache::forget('settings');
      if (Cache::has('settings')) {
        $settings = Cache::get('settings');
      }else{
        $settings = Cache::rememberForever('settings', function() {
            return Settings::all();
          });
      }

        config(['app.title' => $settings[0]['title']]);
        config(['app.desc' => $settings[0]['desc']]);
        config(['app.keywords' => $settings[0]['keywords']]);
        config(['app.email' => $settings[0]['email']]);
        config(['app.tel' => $settings[0]['tel']]);
        config(['app.tel2' => $settings[0]['tel2']]);
        config(['app.facebook' => $settings[0]['facebook']]);
        config(['app.twitter' => $settings[0]['twitter']]);
        config(['app.instagram' => $settings[0]['instagram']]);
        config(['app.address' => $settings[0]['address']]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
