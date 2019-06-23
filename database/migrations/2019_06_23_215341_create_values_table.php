<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('values_10', function (Blueprint $table) {
            $table->bigIncrements('t10_idValues');
            $table->unsignedBigInteger('t09_idCuston');
            $table->foreign('t09_idCuston')->references('t09_idCuston')->on('custon_09')->onDelete('cascade');
            $table->decimal('t10_value',9,2);
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
        Schema::dropIfExists('values');
    }
}
