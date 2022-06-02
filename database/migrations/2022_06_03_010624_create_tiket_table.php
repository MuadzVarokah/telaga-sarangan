<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiket', function (Blueprint $table) {
            $table->id('id_tiket');
            $table->unsignedBigInteger('harga_tiket');
            $table->unsignedBigInteger('id_user');
            $table->timestamp('waktu_beli');
            $table->dateTime('waktu_kunjungan');
            $table->integer('jumlah_tiket');

            $table->foreign('harga_tiket')->references('id_harga')->on('harga');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiket');
    }
}
