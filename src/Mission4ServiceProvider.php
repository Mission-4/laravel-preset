<?php

namespace Mission4\LaravelPreset;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class Mission4ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('mission-4', function ($command) {
            Preset::install();
            $command->info('Mission-4 Laravel Preset Installed!');
        });
    }
}
