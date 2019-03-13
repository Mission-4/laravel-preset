<?php

namespace Mission4\LaravelPreset;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\Presets\Preset as LaravePreset;

class Preset extends LaravePreset
{
    public static function install()
    {
        static::ensureComponentDirectoryExists();
        static::updatePackages();
        static::updateMix();
        static::updateAssets();
        static::updateViews();
        static::removeNodeModules();
    }

    public static function updateAssets()
    {
        static::clearAssets();
        File::copyDirectory(__DIR__ . '/stubs/js', resource_path('js'));
        File::copyDirectory(__DIR__ . '/stubs/css', resource_path('css'));
        File::copyDirectory(__DIR__ . '/stubs/views', resource_path('views'));
    }
    
    public static function clearAssets()
    {
        tap(new Filesystem, function ($files) {
            $files->deleteDirectory(resource_path('sass'));
            $files->deleteDirectory(resource_path('css'));
            $files->deleteDirectory(resource_path('js'));
            $files->delete(public_path('js/app.js'));
            $files->delete(public_path('css/app.css'));

            if (! $files->isDirectory($directory = resource_path('css'))) {
                $files->makeDirectory($directory, 0755, true);
            }
            if (! $files->isDirectory($directory = resource_path('js'))) {
                $files->makeDirectory($directory, 0755, true);
            }
        });
    }

    public static function updateViews()
    {
        File::cleanDirectory(resource_path('views'));
        File::copyDirectory(__DIR__ . '/stubs/views', resource_path('views'));
    }

    public static function updateMix()
    {
        copy(__DIR__ . '/stubs/webpack.mix.js', base_path('webpack.mix.js'));
    }

    public static function updatePackageArray($packages)
    {
        return array_merge(
            [
                'vue-router' => '^3.0.1',
                'vuex' => '^3.0.1',
                'laravel-mix-purgecss' => '^2.2.0',
                'postcss-nesting' => '^5.0.0',
                'postcss-import' => '^11.1.0',
                'tailwindcss' => '>=0.5.3'
            ],
            Arr::except($packages, [
                'bootstrap',
                'bootstrap-sass',
                'jquery',
                'lodash'
            ])
        );
    }
}
