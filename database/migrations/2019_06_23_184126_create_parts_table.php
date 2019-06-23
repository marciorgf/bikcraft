<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts_04', function (Blueprint $table) {
            $table->bigIncrements('t04_idParts');
            $table->string('t04_name');
            $table->string('t04_material');
            $table->string('t04_color');
            $table->decimal('t04_value',9,2);
            $table->unsignedBigInteger('t07_idManufacturer');
            $table->foreign('t07_idManufacturer')->references('t07_idManufacturer')->on('manufacturer_07')->onDelete('cascade');
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
        Schema::dropIfExists('parts_04');
    }
}
