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
        $plants = [
            [
                'name' => 'Azalea Crimson Delight',
                'slug' => 'azalea-crimson-delight',
                'description' => 'A beautiful shrub with vibrant red flowers.',
                'price' => 19.99,
                'image' => 'img/2 (4).jpg'
            ],
            [
                'name' => 'Fiddle Leaf Fig',
                'slug' => 'fiddle-leaf-fig',
                'description' => 'A popular indoor plant with large, glossy leaves.',
                'price' => 29.99,
                'image' => 'img/2 (1).jpg'
            ],
            [
                'name' => 'Snake Plant',
                'slug' => 'snake-plant',
                'description' => 'A hardy plant known for its upright, sword-like leaves.',
                'price' => 14.99,
                'image' => 'img/2 (2).jpg'
            ],
            [
                'name' => 'Spider Plant',
                'slug' => 'spider-plant',
                'description' => 'A resilient plant with arching leaves and small white flowers.',
                'price' => 12.99,
                'image' => 'img/2 (3).jpg'
            ],
            [
                'name' => 'Monstera Deliciosa',
                'slug' => 'monstera-deliciosa',
                'description' => 'An eye-catching plant with large, fenestrated leaves.',
                'price' => 34.99,
                'image' => 'img/2 (5).jpg'
            ],
            [
                'name' => 'ZZ Plant',
                'slug' => 'zz-plant',
                'description' => 'A low-maintenance plant with waxy, dark green leaves.',
                'price' => 24.99,
                'image' => 'img/2 (6).jpg'
            ],
            [
                'name' => 'Peace Lily',
                'slug' => 'peace-lily',
                'description' => 'A graceful plant with dark green leaves and white spathes.',
                'price' => 19.99,
                'image' => 'img/2 (7).jpg'
            ],
            [
                'name' => 'Rubber Plant',
                'slug' => 'rubber-plant',
                'description' => 'A robust plant with large, leathery leaves.',
                'price' => 22.99,
                'image' => 'img/2 (8).jpg'
            ]
        ];

        foreach ($plants as $plant) {
            Plant::firstOrCreate(['slug' => $plant['slug']], $plant);
        }
    }
}
