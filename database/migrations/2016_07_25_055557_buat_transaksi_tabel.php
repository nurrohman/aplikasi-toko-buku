<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTransaksiTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('transaksi', function (Blueprint $table){
            $table->increments('id');
            $table->date('tgl');
            $table->string('nama', 50);
            $table->char('telp', 14);
            $table->integer('total');
            $table->integer('id_pelanggan')->unsigned();

            $table->foreign('id_pelanggan')->references('id')->on('pelanggan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::drop('transaksi');
    }
}
