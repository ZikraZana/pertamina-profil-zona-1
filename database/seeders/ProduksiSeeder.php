<?php

namespace Database\Seeders;

use App\Models\Fields;
use App\Models\Produksi;
use Illuminate\Database\Seeder;

class ProduksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produksi::insert([
            [
                'fields_id' => Fields::where('nama_field', 'North Sumatra Offshore (NSO)')->first()->id,
                'produksi_minyak' => 1000,
                'produksi_gas' => 500,
                'tanggal_produksi' => '2023-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fields_id' => Fields::where('nama_field', 'Rantau')->first()->id,
                'produksi_minyak' => 1500,
                'produksi_gas' => 700,
                'tanggal_produksi' => '2023-01-02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fields_id' => Fields::where('nama_field', 'Pangkalan Susu')->first()->id,
                'produksi_minyak' => 2000,
                'produksi_gas' => 900,
                'tanggal_produksi' => '2023-01-03',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fields_id' => Fields::where('nama_field', 'Lirik')->first()->id,
                'produksi_minyak' => 2500,
                'produksi_gas' => 1100,
                'tanggal_produksi' => '2023-01-04',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fields_id' => Fields::where('nama_field', 'Jambi')->first()->id,
                'produksi_minyak' => 3000,
                'produksi_gas' => 1300,
                'tanggal_produksi' => '2023-01-05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fields_id' => Fields::where('nama_field', 'Jambi Merang')->first()->id,
                'produksi_minyak' => 3500,
                'produksi_gas' => 1500,
                'tanggal_produksi' => '2023-01-06',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
