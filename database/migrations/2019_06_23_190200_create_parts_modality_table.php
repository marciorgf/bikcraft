<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartsModalityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partsModality_06', function (Blueprint $table) {
            $table->bigIncrements('t06_idPartsModality');
            $table->unsignedBigInteger('t04_idParts');
            $table->foreign('t04_idParts')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t05_idModality');
            $table->foreign('t05_idModality')->references('t05_idModality')->on('modality_05')->onDelete('cascade');
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
        Schema::dropIfExists('partsModality_06');
    }
}
