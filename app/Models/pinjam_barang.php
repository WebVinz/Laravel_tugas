<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pinjam_barang extends Model
{
    protected $table = 'pinjam_barang';

    protected $fillable = [
        'id_pinjam',
        'peminjam',
        'tgl_pinjam',
        'tgl_kembali',
        'id_barang',
        'nama_barang',
        'kondisi',
    ];
}
