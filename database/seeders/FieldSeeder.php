<?php

namespace Database\Seeders;

use App\Models\Fields;
use App\Models\Provinsi;
use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fields::insert([
            [
                'provinsi_id' => Provinsi::where('nama_provinsi', 'Aceh')->first()->id,
                'nama_field' => 'North Sumatra Offshore (NSO)',
                'nama_kabupaten_kota' => 'Aceh Utara',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provinsi_id' => Provinsi::where('nama_provinsi', 'Aceh')->first()->id,
                'nama_field' => 'Rantau',
                'nama_kabupaten_kota' => 'Aceh Tamiang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provinsi_id' => Provinsi::where('nama_provinsi', 'Sumatera Utara')->first()->id,
                'nama_field' => 'Pangkalan Susu',
                'nama_kabupaten_kota' => 'Langkat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provinsi_id' => Provinsi::where('nama_provinsi', 'Riau')->first()->id,
                'nama_field' => 'Lirik',
                'nama_kabupaten_kota' => 'Indragiri Hulu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provinsi_id' => Provinsi::where('nama_provinsi', 'Jambi')->first()->id,
                'nama_field' => 'Jambi',
                'nama_kabupaten_kota' => 'Muaro Jambi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provinsi_id' => Provinsi::where('nama_provinsi', 'Sumatera Selatan')->first()->id,
                'nama_field' => 'Jambi Merang',
                'nama_kabupaten_kota' => 'Musi Banyuasin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
