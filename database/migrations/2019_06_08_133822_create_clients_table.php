<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_01', function (Blueprint $table) {
            $table->bigIncrements('t01_idClient');
            $table->string('t01_name');
            $table->string('t01_cpf')->unique();
            $table->string('t01_phone');
            $table->string('t01_mobile');
            $table->date('t01_birthDate');
            $table->string('t01_sex');
            $table->string('t01_email')->unique();
            $table->string('t01_password');
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
        Schema::dropIfExists('clients_01');
    }
}
