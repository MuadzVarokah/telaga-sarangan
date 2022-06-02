<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperasionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operasional', function (Blueprint $table) {
            $table->id('id_operasional');
            $table->unsignedBigInteger('id_wahana');
            $table->string('hari');
            $table->time('jam_buka');
            $table->time('jam_tutup');

            $table->foreign('id_wahana')->references('id_wahana')->on('wahana');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operasional');
    }
}
