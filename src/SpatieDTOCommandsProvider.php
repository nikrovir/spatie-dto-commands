<?php

namespace Nikrovir\SpatieDtoCommands;

use Illuminate\Support\ServiceProvider;

class SpatieDTOCommandsProvider extends ServiceProvider
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
        $this->publishes([
            __DIR__ . '/publish' => app_path(),
        ], 'dto-commands');

        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeDTOCaster::class,
                MakeDTOCommand::class,
                MakeDTOHandler::class,
            ]);
        }
    }
}
