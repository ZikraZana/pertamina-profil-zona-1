<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fields extends Model
{
    protected $table = 'fields';

    protected $primaryKey = 'id';

    protected $fillable = [
        'provinsi_id',
        'nama_field',
        'nama_kabupaten_kota',
    ];

    /**
     * Relasi: Fields ini dimiliki oleh/terikat ke satu Provinsi
     */
    public function provinsi(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_id');
    }

    /**
     * Relasi: Satu Fields memiliki banyak catatan Produksi harian
     */
    public function produksi(): HasMany
    {
        // Parameter kedua adalah nama foreign key yang ada di tabel produksi
        return $this->hasMany(Produksi::class, 'fields_id');
    }

}
