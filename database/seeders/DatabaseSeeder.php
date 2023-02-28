<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Favorite;
use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            ProductImageSeeder::class,
            SettingSeeder::class,
            SocialMediaSeeder::class,
            ContactSeeder::class,
            CommentSeeder::class,
            PageSeeder::class,
            AttributeSeeder::class,
            VariantSeeder::class,
            AddressSeeder::class,
            ShipmentSeeder::class,
            OrderStatusSeeder::class,
            FavoriteSeeder::class,
            DiscountSeeder::class,
            PaymentSeeder::class,
            OrderSeeder::class,
            OrderDetailSeeder::class,
            InvoiceSeeder::class,
        ]);
    }
}
