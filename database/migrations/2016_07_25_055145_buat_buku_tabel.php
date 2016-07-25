<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatBukuTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('buku', function(Blueprint $table){
            $table->increments('id');
            $table->string('judul', 50);
            $table->string('pengarang', 50);
            $table->integer('id_kategori')->unsigned();
            $table->integer('tahun');
            $table->integer('isbn');
            $table->integer('harga');
            $table->integer('stok');
            $table->integer('total');


            $table->foreign('id_kategori')->references('id')->on('kategori');

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
        Schema::drop('buku');
    }
}
