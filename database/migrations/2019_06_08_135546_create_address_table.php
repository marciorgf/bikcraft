<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_03', function (Blueprint $table) {
            $table->bigIncrements('t03_idAddress');
            $table->unsignedBigInteger('t01_idClient');
            $table->foreign('t01_idClient')->references('t01_idClient')
                  ->on('clients_01')->onDelete('cascade');
            $table->string('t03_address');
            $table->string('t03_addon');
            $table->string('t03_neighborhood');
            $table->string('t03_city');
            $table->string('t03_zipCode');
            $table->string('t03_state');
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
        Schema::dropIfExists('address_03');
    }
}
