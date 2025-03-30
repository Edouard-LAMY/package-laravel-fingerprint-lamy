<?php

namespace EdouardLamy\PackageLaravelFingerprintLamy\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class PackageLaravelFingerprintLamyResetMigrationCommand extends Command
{
    // name of command : php artisan laravel-fingerprint-lamy:migrate-reset
    public $signature = 'laravel-fingerprint-lamy:migrate-reset';

    public $description = 'Run database migrations for create user_devices_reset table.';

    public function handle(): void
    {
        // the migration source path
        Artisan::call('migrate', [
            '--path' => 'vendor/edouard-lamy/package-laravel-fingerprint-lamy/src/Migrations/2025_03_30_000001_create_user_devices_reset_table.php',
        ]);

        $this->info('The migration of PackageLaravelFingerprintLamyReset was successfully.');

    }
}
