<?php

namespace App\Models;

use App\Models\Fields;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Provinsi extends Model
{
    protected $table = 'provinsi';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_provinsi',
        'luas_wilayah',
    ];

    /**
     * Relasi: Satu Provinsi memiliki banyak Fields (Lapangan)
     */
    public function fields(): HasMany
    {
        // Parameter kedua adalah nama foreign key yang ada di tabel fields
        return $this->hasMany(Fields::class, 'provinsi_id');
    }

}
