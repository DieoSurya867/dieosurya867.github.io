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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->longText('alamat');
            $table->integer('harga_ongkir');
            $table->integer('total_harga');
            $table->string('transaksi_status')->default('pending');
            $table->string('kode_transaksi');

            $table->foreignId('users_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('alamat_id')->constrained('alamat')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('keranjang_id')->constrained('keranjang')->cascadeOnUpdate()->cascadeOnDelete();

            $table->softDeletes();
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
        Schema::dropIfExists('transaksi');
    }
};
