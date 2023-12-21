<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategoryLapanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_fields')->insert([
            'category_field_name' => 'Lapangan Futsal',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('category_fields')->insert([
            'category_field_name' => 'Lapangan Mini Soccer',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
