<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Sku;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();

        foreach ($products as $product) {
            $attributes = $product->attributes;

            $sku = new Sku();
            $sku_data = [
                'product_id' => $product->id,
                'sku' => rand(1, 50),
                'price' => rand(1, 500),
                'stock' => rand(1, 500),
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $sku->fill($sku_data);
            $sku->save();

            $data = [];
            foreach ($attributes as $attribute) {
                $item = [
                    'attribute_id' => $attribute->id,
                    'sku_id' => $sku->id,
                    'value' => fake()->word,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
                array_push($data, $item);
            }
            DB::table('variants')->insert($data);

        }
    }
}
