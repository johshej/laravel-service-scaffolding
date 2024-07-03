<?php

namespace CringeJPG\LaravelServiceScaffolding;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use CringeJPG\LaravelServiceScaffolding\Commands\LaravelServiceScaffoldingCommand;

class LaravelServiceScaffoldingServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-service-scaffolding')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-service-scaffolding_table')
            ->hasCommand(LaravelServiceScaffoldingCommand::class);
    }
}
