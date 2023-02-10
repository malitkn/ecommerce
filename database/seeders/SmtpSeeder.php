<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SmtpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('smtp')->insert([
            'server' => 'server@server.com',
            'email' => 'mail@mail.com',
            'username' => 'username',
            'password' => 'password',
            'port' => '80',
            'encryption' => 'tls',
        ]);
    }
}
