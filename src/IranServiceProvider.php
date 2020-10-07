<?php

namespace Sepisoltani\Iran;

use Illuminate\Redis\RedisServiceProvider;
use Illuminate\Support\ServiceProvider;
use Sepisoltani\Iran\Console\init;
use Sepisoltani\Iran\Tools\ClassBuilder;


class IranServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->registerCommands();
        $this->registerConfigs();

        $this->app->bind('iran', function () {
            return ClassBuilder::build();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadMigrationsFrom(__DIR__ . '/Database/migrations');
        $this->publishSeeds();
        $this->publishConfigs();

        config('iran.use_cache') ? $this->app->register(RedisServiceProvider::class) : null;


    }

    /**
     * Register init command
     */
    private function registerCommands(): void
    {
        $this->commands([init::class]);
    }

    /**
     * Register configs
     */
    public function registerConfigs(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/iran.php', 'iran');

    }

    /**
     * Publish seeder files.
     */
    private function publishSeeds(): void
    {
        //php artisan vendor:publish --tag=iran-seeds
        $this->publishes([__DIR__ . '/Database/seeders/' => base_path('database/seeds')], 'iran-seeds');
    }

    /**
     * Publish config files.
     */
    private function publishConfigs(): void
    {
            //php artisan vendor:publish --tag=iran-configs
        $this->publishes([__DIR__ . '/Config/iran.php' => config_path('iran.php')], 'iran-configs');

    }
}
