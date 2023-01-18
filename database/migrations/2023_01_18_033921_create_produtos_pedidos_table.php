<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos_pedidos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('quantidade');
            $table->unsignedBigInteger('produto_id');
            $table->unsignedBigInteger('pedido_id');
            $table->timestamps();
        });

        Schema::table('produtos_pedidos', function (Blueprint $table) {
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos_pedidos');
    }
}
