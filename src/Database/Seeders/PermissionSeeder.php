<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

use Hanafalah\LaravelPermission\Facades\LaravelPermission;
use Hanafalah\LaravelSupport\Concerns\Support\HasRequest;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    use HasRequest;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $permissions = LaravelPermission::scanPermissions(__DIR__.'/data/permissions');
        app(config('app.contracts.Permission'))->prepareStorePermission($permissions);
    }
}
