<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('pinjam_barang', function (Blueprint $table) {
        $table->id('id_pinjam');
        $table->string('peminjam');
        $table->date('tgl_pinjam');
        $table->date('tgl_kembali')->nullable();

        // Foreign key harus didefinisikan sebagai unsignedBigInteger
        $table->unsignedBigInteger('id_barang');
        $table->foreign('id_barang')->references('id_barang')->on('barang')->onDelete('cascade');

        $table->string('nama_barang');
        $table->string('kondisi');
        $table->timestamps();
    });
}



public function down()
{
    Schema::dropIfExists('pinjam_barang');
}

};
