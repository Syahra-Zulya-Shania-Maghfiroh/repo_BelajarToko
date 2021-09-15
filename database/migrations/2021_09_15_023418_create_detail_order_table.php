<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_order', function (Blueprint $table) {
            $table->bigIncrements('id_detail_order');
            
            $table->unsignedBigInteger('id_transaksi');

            $table->foreign('id_transaksi')->references('id_transaksi')->on('transaksi');

            $table->unsignedBigInteger('id_produk');

            $table->foreign('id_produk')->references('id_produk')->on('produk');

            $table->integer('qty');
            $table->integer('subtotal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_order');
    }
}
