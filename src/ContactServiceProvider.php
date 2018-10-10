<?php

namespace Package\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //route load
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        //view load
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
        //migration load
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        //contact publish
        $this->mergeConfigFrom(
            __DIR__.'/config/contact.php', 'contact'
        );
        //views publish
        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
            __DIR__.'/views' => resource_path('views/vendor/contact'),
        ]);
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
