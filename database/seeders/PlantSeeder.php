<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plant;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plant::create([
            'name' => 'Azalea Crimson Delight',
            'slug' => 'azalea-crimson-delight',
            'description' => 'A beautiful shrub with vibrant red flowers.',
            'price' => 19.99,
            'image' => '/images/azalea.jpg'
        ]);
        // Add more plants as needed
    }
}
