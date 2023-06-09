<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->state([
            'name' => 'Admin',
            'surname' => '',
            'email' => 'admin@admin.com'
        ])->admin()->create();

        User::factory()->count(50)->user()->create();
    }
}
