<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            SupplierSeeder::class,
            BarangSeeder::class,
            PinjamBarangSeeder::class,
            BarangMasukSeeder::class,
            BarangKeluarSeeder::class,
            StokSeeder::class,
        ]);
    }
}
