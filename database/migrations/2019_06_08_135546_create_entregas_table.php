<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntregasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entregas_03', function (Blueprint $table) {
            $table->bigIncrements('t03_idEntrega');
            $table->unsignedBigInteger('t01_idCliente');
            $table->foreign('t01_idCliente')->references('t01_idCliente')
                  ->on('clientes_01')->onDelete('cascade');
            $table->string('t03_endereco');
            $table->string('t03_complemento');
            $table->string('t03_bairro');
            $table->string('t03_cidade');
            $table->string('t03_cep');
            $table->string('t03_estado');
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
        Schema::dropIfExists('entregas');
    }
}
