<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_12', function (Blueprint $table) {
            $table->bigIncrements('t12_idPayment');
            $table->decimal('t12_FinalValue',9,2);
            $table->unsignedBigInteger('t02_idCard');
            $table->foreign('t02_idCard')->references('t02_idCard')->on('cards_02')->onDelete('cascade');
            $table->unsignedBigInteger('t11_idPurchaseOrder');
            $table->foreign('t11_idPurchaseOrder')->references('t11_idPurchaseOrder')->on('purchaseOrder_11')->onDelete('cascade');
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
        Schema::dropIfExists('payment_12');
    }
}
