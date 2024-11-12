<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('stok', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_barang');
            $table->foreign('id_barang')->references('id_barang')->on('barang')->onDelete('cascade');
            $table->string('nama_barang');
            $table->integer('jml_masuk');
            $table->integer('jml_keluar');
            $table->integer('total_barang');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stok');
    }
};
