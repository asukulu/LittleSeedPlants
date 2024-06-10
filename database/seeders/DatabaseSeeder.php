<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Create test users if they don't already exist
        if (!User::where('email', 'test@example.com')->exists()) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
        }

        // Create additional users
        User::factory(10)->create();

        // Call other seeders
        $this->call([
            CategorySeeder::class,
            PlantSeeder::class,
        ]);
    }
}