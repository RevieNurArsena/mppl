<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('produk_id');
            $table->unsignedBigInteger('ongkir_id');
            $table->unsignedBigInteger('pembayaran_id');
            $table->integer('jml_pembelian');
            $table->string('total');
            $table->boolean('status', false);
            $table->timestamps();
            $table->foreign('user_id')->references('id_user')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('produk_id')->references('id_produk')->on('produks')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ongkir_id')->references('id_ongkir')->on('ongkirs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pembayaran_id')->references('id_pembayaran')->on('metode_pembayarans')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
