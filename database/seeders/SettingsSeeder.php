<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'title' => 'eCommerce Script',
            'keywords' => 'eCommerce Script,Script,Laravel, ',
            'description' => 'Simple eCommerce script',
            'address' => 'Lorem ipsum dolor',
            'phone' => '5555555555',
            'email' => 'demo@demo.com',
            'favicon' => 'logo.png',
            'logo' => 'logo.png',
            'maps' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192698.550924124!2d28.872097255250004!3d41.005236709401785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2zxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1676032118824!5m2!1str!2str"
        ]);
    }
}
