<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use  Database\Seeders\HomeSeeder;
use Database\Seeders\KitSeeder;
use Database\Seeders\eventSeeder;
use Database\Seeders\PartnerSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            HomeSeeder::class,
            KitSeeder::class,
            eventSeeder::class,
            PartnerSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    
    }
}
