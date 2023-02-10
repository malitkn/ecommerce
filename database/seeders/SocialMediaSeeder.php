<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                'name' => 'facebook',
                'link' => 'facebook.com',
                'icon' => 'fa-brands fa-facebook',
            ],
            [
                'name' => 'instagram',
                'link' => 'instagram.com',
                'icon' => 'fa-brands fa-instagram',
            ],
        ];
        foreach ($array as $item) {
            DB::table('social_media')->insert([
                'name' => $item['name'],
                'link' => $item['link'],
                'icon' => $item['icon'],
                'status' => 1,
            ]);
        }
    }
}
