<?php

namespace WeAreFar\LanguageComponents;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use WeAreFar\LanguageComponents\Commands\LanguageComponentsCommand;

class LanguageComponentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-language-components')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-language-components_table')
            ->hasCommand(LanguageComponentsCommand::class);
    }
}
