<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards_02', function (Blueprint $table) {
            $table->bigIncrements('t02_idCard');
            $table->unsignedBigInteger('t01_idClient');
            $table->foreign('t01_idClient')->references('t01_idClient')->on('clients_01')->onDelete('cascade');
            $table->string('t02_cardNumber');
            $table->string('t02_company');
            $table->date('t02_expiration');
            $table->string('t02_cardholder');
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
