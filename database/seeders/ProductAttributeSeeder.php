<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Database\Seeder;

class ProductAttributeSeeder extends Seeder
{
    public function run(): void
    {
        $products = Product::all('id');
        foreach ($products as $product) {
            $this->createProductAttribute($product->id);
        }
    }


    public function getRandomAttribute()
    {
        return Attribute::all('id')->random()->id;
    }

    public function createProductAttribute($productId): void
    {
        ProductAttribute::create([
            'product_id' => $productId,
            'attribute_id' => $this->getRandomAttribute(),
        ]);
    }
}
