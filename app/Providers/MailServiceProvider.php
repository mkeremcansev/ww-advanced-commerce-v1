<?php

namespace App\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class MailServiceProvider extends ServiceProvider
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
            'mail.mailers.smtp.host'=>setting('smtp_host'),
            'mail.mailers.smtp.username'=>setting('smtp_username'),
            'mail.mailers.smtp.password'=>setting('smtp_password'),
            'mail.mailers.smtp.port'=>setting('smtp_port'),
            'mail.from.address'=>setting('smtp_from'),
            'mail.from.name'=>setting('title')
        ]);
    }
}
