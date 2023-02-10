<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attributes = ['color', 'size'];
        $products = Product::all('id');

        foreach ($products as $product) {


            foreach ($attributes as $attribute) {
                DB::table('attributes')->insert([
                    'product_id' => $product->id,
                    'name' => $attribute,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
