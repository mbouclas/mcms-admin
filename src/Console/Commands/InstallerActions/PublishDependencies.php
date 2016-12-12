<?php

namespace Mcms\Admin\Console\Commands\InstallerActions;


use Illuminate\Console\Command;

class PublishDependencies
{
    public function handle(Command $command)
    {
        //elfinder
        $command->call('elfinder:publish');

        $command->call('vendor:publish', [
            '--provider' => 'Barryvdh\Elfinder\ElfinderServiceProvider',
            '--tag' => ['config'],
        ]);

        $command->call('vendor:publish', [
            '--provider' => 'Barryvdh\Elfinder\ElfinderServiceProvider',
            '--tag' => ['views'],
        ]);
        //create a default disk : https://github.com/barryvdh/laravel-elfinder#using-filesystem-disks

        //Intervention
        $command->call('vendor:publish', [
            '--provider' => 'Intervention\Image\ImageServiceProviderLaravel5',
        ]);

        $command->comment("* Dependencies published");
    }
}