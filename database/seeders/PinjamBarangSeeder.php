<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\pinjam_barang;

class PinjamBarangSeeder extends Seeder
{
    public function run()
    {
        pinjam_barang::create([
            'peminjam' => 'John Doe',
            'tgl_pinjam' => '2024-01-10',
            'tgl_kembali' => '2024-01-20',
            'id_barang' => 1,  // Assuming a barang with ID 1 exists
            'nama_barang' => 'Printer',
            'kondisi' => 'Good'
        ]);

        pinjam_barang::create([
            'peminjam' => 'Jane Smith',
            'tgl_pinjam' => '2024-02-01',
            'tgl_kembali' => null,  // Still borrowed
            'id_barang' => 2,  // Assuming a barang with ID 2 exists
            'nama_barang' => 'Laptop',
            'kondisi' => 'Excellent'
        ]);
    }
}
