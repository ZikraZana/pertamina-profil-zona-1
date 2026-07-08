<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produksi extends Model
{
    protected $table = 'produksi';

    protected $primaryKey = 'id';

    protected $fillable = [
        'fields_id',
        'produksi_minyak',
        'produksi_gas',
        'tanggal_produksi',
    ];

    /**
     * Relasi: Catatan produksi ini dimiliki oleh/terikat ke satu Lapangan (Fields)
     */
    public function field(): BelongsTo
    {
        return $this->belongsTo(Fields::class, 'fields_id');
    }
}
