<?php

namespace Database\Seeders;

use App\Models\AttributeValue;
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
    public function run(): void
    {
        $products = Product::all();

        foreach ($products as $product) {
            $attributes = $product->attributes;
            $sku = $this->createSku($product->id);
            $data = [];

            foreach ($attributes as $attribute) {
                $attribute_values = $attribute->values;
                foreach ($attribute_values as $attribute_value) {
                    $item = [
                        'attribute_id' => $attribute->id,
                        'attribute_value_id' => $attribute_value->id,
                        'sku_id' => $sku->id,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                    $data[] = $item;
                }
            }
            DB::table('variants')->insert($data);
        }
    }

    public function createSku($productId): Sku
    {
        $sku = new Sku();
        $sku_data = [
            'product_id' => $productId,
            'sku' => rand(1, 50),
            'price' => rand(1, 500),
            'stock' => rand(1, 500),
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $sku->fill($sku_data);
        $sku->save();

        return $sku;
    }
}
