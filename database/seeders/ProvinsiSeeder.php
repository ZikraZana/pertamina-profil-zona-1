<?php

namespace Database\Seeders;

use App\Models\Provinsi;
use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Provinsi::insert([
            [
                'nama_provinsi' => 'Aceh',
                'luas_wilayah' => '57956.00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_provinsi' => 'Sumatera Utara',
                'luas_wilayah' => '72981.23',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_provinsi' => 'Riau',
                'luas_wilayah' => '87023.62',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_provinsi' => 'Jambi',
                'luas_wilayah' => '50058.16',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_provinsi' => 'Sumatera Selatan',
                'luas_wilayah' => '91592.43',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
