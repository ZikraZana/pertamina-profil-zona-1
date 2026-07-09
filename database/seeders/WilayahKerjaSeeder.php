<?php

namespace Database\Seeders;

use App\Models\WilayahKerja;
use Illuminate\Database\Seeder;

class WilayahKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WilayahKerja::insert([
            [
                'nama_wilayah' => 'North Sumatra Offshore (NSO)',
                'provinsi' => 'Sumatera Utara',
                'kabupaten_kota' => 'Medan',
                'jenis_wilayah_kerja' => 'Operator',
                'tahun_berdiri' => '1998',
                'deskripsi' => 'Wilayah kerja lepas pantai di Sumatera Utara',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_wilayah' => 'Rantau',
                'provinsi' => 'Sumatera Selatan',
                'kabupaten_kota' => 'Musi Banyuasin',
                'jenis_wilayah_kerja' => 'Operator',
                'tahun_berdiri' => '1929',
                'deskripsi' => 'Wilayah kerja darat di Sumatera Selatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_wilayah' => 'Pangkalan Susu',
                'provinsi' => 'Sumatera Utara',
                'kabupaten_kota' => 'Langkat',
                'jenis_wilayah_kerja' => 'Operator',
                'tahun_berdiri' => '1885',
                'deskripsi' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_wilayah' => 'Lirik',
                'provinsi' => 'Riau',
                'kabupaten_kota' => 'Indragiri Hulu',
                'jenis_wilayah_kerja' => 'Operator',
                'tahun_berdiri' => '1940',
                'deskripsi' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_wilayah' => 'Jambi',
                'provinsi' => 'Jambi',
                'kabupaten_kota' => 'Muaro Jambi',
                'jenis_wilayah_kerja' => 'Operator',
                'tahun_berdiri' => '1922',
                'deskripsi' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_wilayah' => 'Jambi Merang',
                'provinsi' => 'Jambi',
                'kabupaten_kota' => 'Tanjung Jabung Timur',
                'jenis_wilayah_kerja' => 'Operator',
                'tahun_berdiri' => '2011',
                'deskripsi' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_wilayah' => 'Jabung',
                'provinsi' => 'Jambi',
                'kabupaten_kota' => 'Tanjung Jabung Timur',
                'jenis_wilayah_kerja' => 'Non-Operator',
                'tahun_berdiri' => '2023',
                'deskripsi' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_wilayah' => 'Kakap',
                'provinsi' => 'Riau',
                'kabupaten_kota' => 'Kepulauan Meranti',
                'jenis_wilayah_kerja' => 'Non-Operator',
                'tahun_berdiri' => '2024',
                'deskripsi' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
