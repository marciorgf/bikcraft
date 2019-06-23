<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManufacturerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturer_07', function (Blueprint $table) {
            $table->bigIncrements('t07_idManufacturer');
            $table->string('t07_name');
            $table->string('t07_cnpj')->unique();
            $table->string('t07_address');
            $table->string('t07_addon');
            $table->string('t07_neighborhood');
            $table->string('t07_city');
            $table->string('t07_zipCode');
            $table->string('t07_state');
            $table->string('email')->unique();
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
        Schema::dropIfExists('manufacturer_07');
    }
}
