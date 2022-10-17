<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alamat', function (Blueprint $table) {
            $table->id();
            $table->integer('provinsi_id');
            $table->string('provinsi');
            $table->integer('kota_id');
            $table->string('namaKota');
            $table->integer('kecamatan_id');
            $table->string('namaKecamatan');
            $table->integer('kelurahan_id');
            $table->string('namaKelurahan');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alamat');
    }
};
