<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class ApiAccessSeeder extends Seeder{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $workspace  = app(config('database.models.Workspace'))->uuid('9e7ff0f6-7679-46c8-ac3e-71da818160dd')->firstOrFail();        
        $api_access = app(config('database.models.ApiAccess'))
                    ->where('reference_type',$workspace->getMorphClass())
                    ->where('reference_id',$workspace->getKey())
                    ->first();
        if (!isset($api_access)){
            $exitCode = Artisan::call('helper:generate', [
                '--app-code'       => 2,
                '--algorithm'      => 'HS256',
                '--reference-id'   => $workspace->getKey(),
                '--reference-type' => $workspace->getMorphClass(),
                '--secret'         => 'YXYlGIbJ65VGjQnETWXoOiCvqpXg7PJu'
            ]);
    
            if ($exitCode !== 0) {
                $this->command->error('Failed generating API access.');
                return;
            }
        }
        $this->command->info('API access generated.');
    }
}