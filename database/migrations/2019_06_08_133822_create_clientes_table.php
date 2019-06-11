<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_01', function (Blueprint $table) {
            $table->bigIncrements('t01_idCliente');
            $table->string('t01_nome');
            $table->string('t01_cpf');
            $table->string('t01_fone');
            $table->string('t01_celular');
            $table->date('t01_dtnascimento');
            $table->string('t01_sexo');
            $table->string('t01_email');
            $table->string('t01_senha');
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
        Schema::dropIfExists('clientes');
    }
}
