<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('supplier', function (Blueprint $table) {
        $table->id('id_supplier'); // atau gunakan $table->bigIncrements('id');
        $table->string('nama_supplier');
        $table->string('alamat_supplier');
        $table->string('telp_supplier');
        $table->timestamps();
    });
}


public function down()
{
    Schema::dropIfExists('supplier');
}

};
