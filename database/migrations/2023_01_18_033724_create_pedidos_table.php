<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->double('total');
            $table->timestamp('data');
            $table->unsignedBigInteger('metodo_recebimento_id');
            $table->unsignedBigInteger('metodo_pagamento_id');

            $table->timestamps();
        });

        Schema::table('pedidos', function (Blueprint $table) {
            $table->foreign('metodo_recebimento_id')->references('id')->on('metodo_recebimento')->onDelete('cascade');
            $table->foreign('metodo_pagamento_id')->references('id')->on('metodo_pagamento')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
