<?php

namespace App\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class OAuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Config::set([
            'services.facebook.client_id'=>setting('facebook_client_id'),
            'services.facebook.client_secret'=>setting('facebook_client_secret'),
            'services.facebook.redirect'=>setting('facebook_redirect'),
            'services.google.client_id'=>setting('google_client_id'),
            'services.google.client_secret'=>setting('google_client_secret'),
            'services.google.redirect'=>setting('google_redirect')
        ]);
    }
}
