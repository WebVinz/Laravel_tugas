<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    public function run()
    {
        Barang::create([
            'nama_barang' => 'Printer',
            'spesifikasi' => 'LaserJet, Black and White',
            'lokasi' => 'Room 101',
            'jumlah_barang' => 5,
            'sumber_dana' => 'Government Grant',
            'kondisi' => 'Good',
            'id_supplier' => 1  // Assuming a supplier with ID 1 exists
        ]);

        Barang::create([
            'nama_barang' => 'Laptop',
            'spesifikasi' => 'Core i5, 8GB RAM, 256GB SSD',
            'lokasi' => 'Room 102',
            'jumlah_barang' => 10,
            'sumber_dana' => 'Company Donation',
            'kondisi' => 'Excellent',
            'id_supplier' => 2  // Assuming a supplier with ID 2 exists
        ]);
    }
}
