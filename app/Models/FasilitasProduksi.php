<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FasilitasProduksi extends Model
{
    protected $table = 'fasilitas_produksi';

    protected $primaryKey = 'id_fasilitas';

    protected $fillable = [
        'id_wilayah',
        'nama_fasilitas',
        'jenis_fasilitas',
        'jumlah',
    ];

    public function wilayahKerja(): BelongsTo
    {
        return $this->belongsTo(WilayahKerja::class, 'id_wilayah', 'id_wilayah');
    }
}
