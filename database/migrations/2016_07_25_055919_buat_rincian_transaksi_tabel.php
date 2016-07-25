<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatRincianTransaksiTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('rincian_transaksi', function (Blueprint $table){
            $table->increments('id');
            $table->integer('id_transaksi')->unsigned();
            $table->integer('id_buku')->unsigned();
            $table->integer('jumlah');
            $table->integer('sub_total');

            $table->foreign('id_transaksi')->references('id')->on('transaksi');
            $table->foreign('id_buku')->references('id')->on('buku');

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
         Schema::drop('rincian_transaksi');
    }
}
