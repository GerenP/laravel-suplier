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
        Schema::create('barang_masuk', function (Blueprint $table) {
            $table->id('id_barang');
            $table->string('nama_barang');
            $table->date('tgl_masuk'); // Ubah ke tipe DATE agar sesuai
            $table->integer('jml_barang'); // Ubah ke tipe INTEGER
            $table->unsignedBigInteger('id_suplier'); // Gunakan tipe yang lebih spesifik
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('barang_masuk');
    }
};
