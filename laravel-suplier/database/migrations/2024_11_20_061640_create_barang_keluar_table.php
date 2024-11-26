<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('barang_keluar', function (Blueprint $table) {
            $table->id('id_barang');
            $table->string('nama_barang');
            $table->integer('jml_masuk');
            $table->integer('jml_keluar');
            $table->integer('total_barang');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_keluar');
    }
};
