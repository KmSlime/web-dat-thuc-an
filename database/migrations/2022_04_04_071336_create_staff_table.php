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
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('StaffID');
            $table->string('StaffFirstName');
            $table->string('StaffLastName');
            $table->string('StaffAddress');
            $table->string('StaffPhoneContact');
            $table->string('StaffGender');
            $table->date('StaffDateOfBirth');
            $table->string('NationIdentityNumber')->unique();
            $table->string('StaffEmail');
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
        Schema::dropIfExists('staff');
    }
};
