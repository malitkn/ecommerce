<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            [
                'title' => 'About Us',
                'content' => "About Us <br>" . fake()->paragraph(10),
                'seo_description' => "About Us",
                'seo_keywords' => "About Us,eCommerce Script,Laravel",
            ],
            [
                'title' => 'Our Team',
                'content' => "Our Team <br>" . fake()->paragraph(10),
                'seo_description' => "Our Team",
                'seo_keywords' => "Our Team,eCommerce Script,Laravel",
            ],
        ];

        foreach ($pages as $page) {
            DB::table('pages')->insert([
               'title' => $page['title'],
               'content' => $page['content'],
               'seo_description' => $page['seo_description'],
               'seo_keywords' => $page['seo_keywords'],
            ]);
        }
    }
}
