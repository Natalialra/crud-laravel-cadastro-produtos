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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->integer('estoque');
            $table->float('preco');
            $table->unsignedBigInteger('categoria_id'); // cria a referencia para a chave estrangeira
            $table->foreign('categoria_id')->references('id')->on('categorias'); // cria a chave estrangeira na tabela produtos que referencia a coluna id da tabela categorias
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
        Schema::dropIfExists('produtos');
    }
};
