<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmkmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umkm', function (Blueprint $table) {
            $table->id('id_umkm');
            $table->unsignedBigInteger('id_kat');
            $table->string('barang');
            $table->string('gambar');
            $table->text('keterangan');
            $table->integer('harga_terendah');
            $table->integer('harga_tertinggi');

            $table->foreign('id_kat')->references('id_kat_umkm')->on('kat_umkm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('umkm');
    }
}
