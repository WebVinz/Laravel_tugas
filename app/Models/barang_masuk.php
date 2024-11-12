<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barang_masuk extends Model
{
    protected $table = 'barang_masuk';

    protected $fillable = [
        'id_masuk',
        'tgl_masuk',
        'jml_masuk',
        'lokasi',
        'id_barang',
    ];
}
