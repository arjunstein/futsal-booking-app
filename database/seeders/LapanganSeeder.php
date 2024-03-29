<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LapanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lapangans')->insert([
            'nama_lapangan' => 'Lapangan Futsal 1',
            'gambar' => fake()->imageUrl(),
            'category_id' => 1,
            'status' => 'Tersedia',
            'harga_sewa_siang' => 150000,
            'harga_sewa_malam' => 200000,
            'deskripsi' => fake()->paragraph(1),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('lapangans')->insert([
            'nama_lapangan' => 'Lapangan Futsal 2',
            'gambar' => fake()->imageUrl(),
            'category_id' => 1,
            'status' => 'Tersedia',
            'harga_sewa_siang' => 150000,
            'harga_sewa_malam' => 200000,
            'deskripsi' => fake()->paragraph(1),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('lapangans')->insert([
            'nama_lapangan' => 'Lapangan Mini Soccer 1',
            'gambar' => fake()->imageUrl(),
            'category_id' => 2,
            'status' => 'Tersedia',
            'harga_sewa_siang' => 250000,
            'harga_sewa_malam' => 300000,
            'deskripsi' => fake()->paragraph(1),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
