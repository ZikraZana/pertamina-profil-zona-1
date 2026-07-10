<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produksi extends Model
{
    protected $table = 'produksi';

    protected $primaryKey = 'id_produksi';

    protected $fillable = [
        'id_wilayah',
        'produksi_minyak',
        'produksi_gas',
        'tanggal_produksi',
    ];

    public function wilayahKerja(): BelongsTo
    {
        return $this->belongsTo(WilayahKerja::class, 'id_wilayah', 'id_wilayah');
    }
}
