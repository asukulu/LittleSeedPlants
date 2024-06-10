<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Shrubs']);
        Category::create(['name' => 'Trees']);
        Category::create(['name' => 'Flowers']);
        Category::create(['name' => 'Succulents']);
        Category::create(['name' => 'Herbs']);
        // Add more categories as needed
    }
}
