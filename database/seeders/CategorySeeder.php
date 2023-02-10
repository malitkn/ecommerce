<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['id' => 1, 'parent' => 0, 'name' => 'Shirts', 'slug' => 'shirts'],
            ['id' => 2, 'parent' => 0, 'name' => 'Laptop', 'slug' => 'laptop'],
            ['id' => 3, 'parent' => 1, 'name' => 'Shorts', 'slug' => 'shorts'],
            ['id' => 4, 'parent' => 2, 'name' => 'Jeans', 'slug' => 'jeans'],
            ['id' => 5, 'parent' => 1, 'name' => 'Blouses', 'slug' => 'blouses'],
        ];
        foreach ($categories as $index => $category) {
            DB::table('categories')->insert([
                'id' => $category['id'],
                'parent' => $category['parent'],
                'name' => $category['name'],
                'slug' => $category['slug'],
                'image' => fake()->imageUrl,
                'order' => rand(0, 99),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
