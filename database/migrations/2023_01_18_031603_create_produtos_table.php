<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->double('preco');
            $table->text('descricao');
            $table->unsignedBigInteger('categoria_produto_id');

            $table->timestamps();
        });

        Schema::table('produtos', function (Blueprint $table) {
            $table->foreign('categoria_produto_id')->references('id')->on('categoria_produto')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
