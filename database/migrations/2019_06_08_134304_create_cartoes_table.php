<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartoes_02', function (Blueprint $table) {
            $table->bigIncrements('t02_idCartao');
            $table->unsignedBigInteger('t01_idCliente');
            $table->foreign('t01_idCliente')->references('t01_idCliente')->on('clientes_01')->onDelete('cascade');
            $table->string('t02_numCartao');
            $table->string('t02_bandeira');
            $table->date('t02_vencimento');
            $table->string('t02_titular');
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
        Schema::dropIfExists('cartoes');
    }
}
