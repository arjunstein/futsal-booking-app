<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            $whatsappNumber = '628' . str_pad(rand(0, 9999999999), 10, '0', STR_PAD_LEFT);
            DB::table('users')->insert([
                'name' => fake()->name(),
                'email' => fake()->email(),
                'whatsapp' => $whatsappNumber,
                'address' => fake()->address(),
                'email_verified_at' => now(),
                'password' => bcrypt('12345'),
                'roles' => 'member',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
