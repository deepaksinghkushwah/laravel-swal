<?php

namespace DeepakSinghKushwah\LaravelSwal;

use Illuminate\Support\ServiceProvider;

class SwalServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load blade view
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'swal');

        // Publish assets
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/swal'),
        ], 'views');
    }

    public function register()
    {
        $this->app->singleton('swal', function () {
            return new Swal();
        });
    }
}
