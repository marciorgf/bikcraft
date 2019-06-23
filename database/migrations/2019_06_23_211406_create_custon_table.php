<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custon_09', function (Blueprint $table) {
            $table->bigIncrements('t09_idCuston');
            $table->unsignedBigInteger('t08_idProducts');
            $table->foreign('t08_idProducts')->references('t08_idProducts')->on('products_08')->onDelete('cascade');
            $table->unsignedBigInteger('t01_idClient');
            $table->foreign('t01_idClient')->references('t01_idClient')->on('clients_01')->onDelete('cascade');
            $table->unsignedBigInteger('t09_frame');
            $table->foreign('t09_frame')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t09_rim');
            $table->foreign('t09_rim')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t09_drivetrain');
            $table->foreign('t09_drivetrain')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t09_crankArm');
            $table->foreign('t09_crankArm')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t09_hub');
            $table->foreign('t09_hub')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t09_pedal');
            $table->foreign('t09_pedal')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t09_handlebar');
            $table->foreign('t09_handlebar')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t09_gearBox');
            $table->foreign('t09_gearBox')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t09_stem');
            $table->foreign('t09_stem')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t09_saddle');
            $table->foreign('t09_saddle')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t09_shock');
            $table->foreign('t09_shock')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t09_breakHood');
            $table->foreign('t09_breakHood')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t09_rake');
            $table->foreign('t09_rake')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
            $table->unsignedBigInteger('t09_tyre');
            $table->foreign('t09_tyre')->references('t04_idParts')->on('parts_04')->onDelete('cascade');
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
        Schema::dropIfExists('custon_09');
    }
}
