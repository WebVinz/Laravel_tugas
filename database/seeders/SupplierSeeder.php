<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    public function run()
    {
        Supplier::create([
            'nama_supplier' => 'Supplier A',
            'alamat_supplier' => 'Jl. Mawar No.1',
            'telp_supplier' => '081234567890'
        ]);

        Supplier::create([
            'nama_supplier' => 'Supplier B',
            'alamat_supplier' => 'Jl. Melati No.2',
            'telp_supplier' => '081234567891'
        ]);
    }
}
