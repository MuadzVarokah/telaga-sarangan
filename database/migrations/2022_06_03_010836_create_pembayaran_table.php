<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->unsignedBigInteger('id_tiket');
            $table->unsignedBigInteger('id_user');
            $table->integer('harga_total');
            $table->integer('harga_jasa');
            $table->enum('status', ['belum dibayar','sudah dibayar']);

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_tiket')->references('id_tiket')->on('tiket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
}
