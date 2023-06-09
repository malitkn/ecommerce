<?php

namespace Database\Seeders;

use App\Enums\ImageEnum;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeAndAttributeValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->create('Color', ['Red', 'Green', 'Blue', 'Yellow']);
        $this->create('Size', ['L', 'XL', 'S', 'M', 'XS']);
    }

    public function create($name, array $values): void
    {
        $attribute = Attribute::create([
            'name' => $name,
            'code' => strtoupper($name),
        ]);

        foreach ($values as $value) {
            AttributeValue::create([
                'attribute_id' => $attribute->id,
                'name' => $value,
                'image' => ImageEnum::ATTRIBUTE_VALUE,
            ]);
        }
    }

}
