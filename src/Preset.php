<?php

namespace Mission4\LaravelPreset;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Console\Presets\Preset as LaravePreset;

class Preset extends LaravePreset
{
    public static function install()
    {
        static::updateMix();
        static::updateAssets();
        static::updateViews();
        static::updatePackages();
    }

    public static function updateAssets()
    {
        File::cleanDirectory(resource_path('assets'));
        File::copyDirectory(__DIR__ . '/stubs/js', resource_path('assets/js'));
        File::copyDirectory(__DIR__ . '/stubs/less', resource_path('assets/less'));
        File::copyDirectory(__DIR__ . '/stubs/views', resource_path('views'));
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
                'laravel-mix-tailwind' => '^0.1.0',
                'sweetalert' => '^2.1.0'
            ],
            Arr::except($packages, [
                'bootstrap',
                'jquery',
                'lodash'
            ])
        );
    }
}
