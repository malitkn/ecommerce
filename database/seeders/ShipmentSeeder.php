<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shipments')->insert([
            [
                'name' => 'Aras Kargo',
                'fee' => 15,
            ],
            [
                'name' => 'MNG Kargo',
                'fee' => 25,
            ],
        ]);
    }
}
