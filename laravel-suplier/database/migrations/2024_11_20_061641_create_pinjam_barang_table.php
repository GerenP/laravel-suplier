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
        Schema::create('pinjam_barang', function (Blueprint $table) {
            $table->id('id_pinjam')->unique();
            $table->string('peminjam');
            $table->dateTime('tgl_pinjam');
            $table->string('id_barang');
            $table->string('nama_barang');
            $table->integer('jml_barang');
            $table->dateTime('tgl_kembali');
            $table->string('kondisi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjam_barang');
    }
};
