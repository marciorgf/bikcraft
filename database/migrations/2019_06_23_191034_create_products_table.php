<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_08', function (Blueprint $table) {
            $table->bigIncrements('t08_idProducts');
            $table->string('t08_name');
            $table->unsignedBigInteger('t08_frame');
            $table->foreign('t08_frame')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t08_rim');
            $table->foreign('t08_rim')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t08_drivetrain');
            $table->foreign('t08_drivetrain')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t08_crankArm');
            $table->foreign('t08_crankArm')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t08_hub');
            $table->foreign('t08_hub')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t08_pedal');
            $table->foreign('t08_pedal')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t08_handlebar');
            $table->foreign('t08_handlebar')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t08_gearBox');
            $table->foreign('t08_gearBox')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t08_stem');
            $table->foreign('t08_stem')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t08_saddle');
            $table->foreign('t08_saddle')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t08_shock');
            $table->foreign('t08_shock')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t08_breakHood');
            $table->foreign('t08_breakHood')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t08_rake');
            $table->foreign('t08_rake')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t08_tyre');
            $table->foreign('t08_tyre')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
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
        Schema::dropIfExists('products_08');
    }
}
