<?php

namespace Winnie\LaravelChangePassword;

use Illuminate\Support\ServiceProvider;

class LaravelChangePasswordServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'winnie');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'winnie');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravelchangepassword.php', 'laravelchangepassword');

        // Register the service the package provides.
        $this->app->singleton('laravelchangepassword', function ($app) {
            return new LaravelChangePassword;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravelchangepassword'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/laravelchangepassword.php' => config_path('laravelchangepassword.php'),
        ], 'laravelchangepassword.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/winnie'),
        ], 'laravelchangepassword.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/winnie'),
        ], 'laravelchangepassword.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/winnie'),
        ], 'laravelchangepassword.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
