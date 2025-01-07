<?php

namespace Cool\LaravelModelCache\Providers;

use Cool\LaravelModelCache\Console\Commands\Clear;
use Cool\LaravelModelCache\Console\Commands\Publish;
use Cool\LaravelModelCache\Helper;
use Cool\LaravelModelCache\ModelCaching;
use Illuminate\Support\ServiceProvider;

class Service extends ServiceProvider
{
    protected $defer = false;

    public function boot()
    {
        $configPath = __DIR__ . '/../../config/laravel-model-caching.php';
        $this->mergeConfigFrom($configPath, 'laravel-model-caching');
        $this->commands([
            Clear::class,
            Publish::class,
        ]);
        $this->publishes([
            $configPath => config_path('laravel-model-caching.php'),
        ], "config");
    }

    public function register()
    {
        if (! class_exists('Cool\LaravelModelCache\EloquentBuilder')) {
            class_alias(
                ModelCaching::builder(),
                'Cool\LaravelModelCache\EloquentBuilder'
            );
        }

        $this->app->bind("model-cache", Helper::class);
    }
}
