<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatPelangganTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pelanggan', function (Blueprint $table){
            $table->increments('id');
            $table->string('nama', 50);
            $table->enum('jenis_kelamin',['laki-laki','perempuan']);
            $table->string('alamat', 60);
            $table->char('telp', 14);
            $table->integer('id_pengguna')->unsigned();

            $table->foreign('id_pengguna')->references('id')->on('pengguna');
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
        Schema::drop('pelanggan');
    }
}
