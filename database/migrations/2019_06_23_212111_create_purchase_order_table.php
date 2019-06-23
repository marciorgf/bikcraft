<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchaseOrder_11', function (Blueprint $table) {
            $table->bigIncrements('t11_idPurchaseOrder');
            $table->unsignedBigInteger('t09_idCuston');
            $table->foreign('t09_idCuston')->references('t09_idCuston')->on('custon_09')->onDelete('cascade');
            $table->unsignedBigInteger('t01_idClient');
            $table->foreign('t01_idClient')->references('t01_idClient')->on('clients_01')->onDelete('cascade');
            $table->unsignedBigInteger('t03_idAddress');
            $table->foreign('t03_idAddress')->references('t03_idAddress')->on('address_03')->onDelete('cascade');
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
        Schema::dropIfExists('purchaseOrder_11');
    }
}
