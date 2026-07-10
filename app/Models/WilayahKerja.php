<?php

namespace App\Models;

use App\Models\FasilitasProduksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WilayahKerja extends Model
{
    protected $table = 'wilayah_kerja';

    protected $primaryKey = 'id_wilayah';

    protected $fillable = [
        'nama_wilayah',
        'provinsi',
        'kabupaten_kota',
        'jenis_wilayah_kerja',
        'tahun_berdiri',
        'deskripsi',
    ];

    public function produksi(): HasMany
    {
        // Parameter kedua adalah nama foreign key yang ada di tabel produksi
        return $this->hasMany(Produksi::class, 'id_wilayah', 'id_wilayah');
    }

    public function fasilitasProduksi(): HasMany
    {
        // Parameter kedua adalah nama foreign key yang ada di tabel fasilitas_produksi
        return $this->hasMany(FasilitasProduksi::class, 'id_wilayah', 'id_wilayah');
    }
}
