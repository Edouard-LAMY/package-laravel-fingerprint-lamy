<?php

namespace EdouardLamy\PackageLaravelFingerprintLamy;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use EdouardLamy\PackageLaravelFingerprintLamy\Commands\PackageLaravelFingerprintLamyMigrationCommand;
use EdouardLamy\PackageLaravelFingerprintLamy\Commands\PackageLaravelFingerprintLamyResetMigrationCommand;

class PackageLaravelFingerprintLamyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('package-laravel-fingerprint-lamy')
            // ->hasConfigFile()
            // ->hasViews()
            ->hasMigration('create_user_devices_table')
            ->hasMigration('create_user_devices_reset_table')
            ->hasCommand(PackageLaravelFingerprintLamyMigrationCommand::class)
            ->hasCommand(PackageLaravelFingerprintLamyResetMigrationCommand::class);
    }
}
