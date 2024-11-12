<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('barang', function (Blueprint $table) {
        $table->id('id_barang'); // Ini otomatis unsignedBigInteger di Laravel
        $table->string('nama_barang');
        $table->text('spesifikasi');
        $table->string('lokasi');
        $table->integer('jumlah_barang');
        $table->string('sumber_dana');
        $table->string('kondisi');
        $table->unsignedBigInteger('id_supplier');
        $table->foreign('id_supplier')->references('id_supplier')->on('supplier')->onDelete('cascade');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('barang');
}

};
