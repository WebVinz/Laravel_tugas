<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = 'barang';

    protected $fillable = [
        'id_barang',
        'nama_barang',
        'spesifikasi',
        'lokasi',
        'jumlah_barang',
        'sumber_dana',
        'kondisi',
        'id_supplier',
    ];
}
