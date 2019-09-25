<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProdutoHasCompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_has_compra', function (Blueprint $table) {
            $table->integer('quantidade');
            $table->unsignedBigInteger('produto_id');
            $table->unsignedBigInteger('compra_id');
        });

        Schema::table('produto_has_compra', function (Blueprint $table) {
            $table->foreign('produto_id')->references('id')->on('produto');
            $table->foreign('compra_id')->references('id')->on('compra');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('produto_has_compra');
    }
}
