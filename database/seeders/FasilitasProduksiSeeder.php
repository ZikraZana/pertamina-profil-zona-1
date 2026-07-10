<?php

namespace Database\Seeders;

use App\Models\FasilitasProduksi;
use App\Models\WilayahKerja;
use Illuminate\Database\Seeder;

class FasilitasProduksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FasilitasProduksi::insert([
            [
                'id_wilayah' => WilayahKerja::where('nama_wilayah', 'Jambi')->first()->id_wilayah,
                'nama_fasilitas' => 'Fasilitas A',
                'jenis_fasilitas' => 'Struktur',
                'jumlah' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_wilayah' => WilayahKerja::where('nama_wilayah', 'Rantau')->first()->id_wilayah,
                'nama_fasilitas' => 'Fasilitas B',
                'jenis_fasilitas' => 'Struktur',
                'jumlah' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_wilayah' => WilayahKerja::where('nama_wilayah', 'Jambi')->first()->id_wilayah,
                'nama_fasilitas' => 'Fasilitas C',
                'jenis_fasilitas' => 'Stasiun Pengumpul Utama',
                'jumlah' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
