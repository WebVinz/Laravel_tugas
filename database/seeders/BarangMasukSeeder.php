<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\barang_masuk;

class BarangMasukSeeder extends Seeder
{
    public function run()
    {
        barang_masuk::create([
            'tgl_masuk' => '2024-01-15',
            'jml_masuk' => 3,
            'lokasi' => 'Warehouse',
            'id_barang' => 1  // Assuming a barang with ID 1 exists
        ]);

        barang_masuk::create([
            'tgl_masuk' => '2024-02-05',
            'jml_masuk' => 5,
            'lokasi' => 'Main Office',
            'id_barang' => 2  // Assuming a barang with ID 2 exists
        ]);
    }
}
