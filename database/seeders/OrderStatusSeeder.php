<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_statuses')->insert([
            [
                'name' => 'Hazırlanıyor',
                'color' => 'info',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kargoya Verildi',
                'color' => 'warning',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tamamlandı',
                'color' => 'primary',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
