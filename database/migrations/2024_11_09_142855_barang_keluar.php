<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('barang_keluar', function (Blueprint $table) {
        $table->id('id_keluar');
        $table->unsignedBigInteger('id_barang'); // Foreign key sebagai unsignedBigInteger
        $table->string('nama_barang');
        $table->date('tgl_keluar');
        $table->integer('jml_keluar');
        $table->string('lokasi');
        $table->string('penerima');

        // Definisikan foreign key dengan merujuk ke `id_barang` di tabel `barang`
        $table->foreign('id_barang')->references('id_barang')->on('barang')->onDelete('cascade');

        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('barang_keluar');
}
};
