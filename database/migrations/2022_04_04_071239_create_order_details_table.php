<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('OrderDetailsCode');
            $table->integer('OrderCode');
            $table->integer('ServicesCode');
            $table->integer('FoodCode');
            $table->integer('DrinkCode');
            $table->integer('DeliveryCode');
            $table->integer('UserID');
            $table->integer('PaymentCode');
            $table->integer('CheckStatus');
            $table->date('DatetimeReport');
            $table->string('Note');
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
        Schema::dropIfExists('order_details');
    }
};
