<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stok;

class StokSeeder extends Seeder
{
    public function run()
    {
        Stok::create([
            'id_barang' => 1,  // Assuming a barang with ID 1 exists
            'nama_barang' => 'Printer',
            'jml_masuk' => 5,
            'jml_keluar' => 2,
            'total_barang' => 3
        ]);

        Stok::create([
            'id_barang' => 2,  // Assuming a barang with ID 2 exists
            'nama_barang' => 'Laptop',
            'jml_masuk' => 10,
            'jml_keluar' => 1,
            'total_barang' => 9
        ]);
    }
}
