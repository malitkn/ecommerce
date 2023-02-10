<?php

namespace Database\Seeders;

use App\Models\Attribute;
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
            SettingsSeeder::class,
            SocialMediaSeeder::class,
            ContactSeeder::class,
            PageSeeder::class,
            AttributeSeeder::class,
            VariantSeeder::class,
            SmtpSeeder::class,
        ]);
    }
}
