<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barang_keluar extends Model
{
    protected $table = 'barang_keluar';

    protected $fillable = [
        'id_keluar',
        'id_barang',
        'nama_barang',
        'tgl_keluar',
        'jml_keluar',
        'lokasi',
        'penerima',
    ];
}