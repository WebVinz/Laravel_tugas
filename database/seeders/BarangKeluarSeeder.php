<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\barang_keluar;

class BarangKeluarSeeder extends Seeder
{
    public function run()
    {
        barang_keluar::create([
            'id_barang' => 1,  // Assuming a barang with ID 1 exists
            'nama_barang' => 'Printer',
            'tgl_keluar' => '2024-01-20',
            'jml_keluar' => 2,
            'lokasi' => 'Office Floor',
            'penerima' => 'Michael'
        ]);

        barang_keluar::create([
            'id_barang' => 2,  // Assuming a barang with ID 2 exists
            'nama_barang' => 'Laptop',
            'tgl_keluar' => '2024-02-10',
            'jml_keluar' => 1,
            'lokasi' => 'Conference Room',
            'penerima' => 'Sarah'
        ]);
    }
}
