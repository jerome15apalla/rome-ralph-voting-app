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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // Name of voter
            $table->string('fName');
            $table->string('mName');
            $table->string('lName');
            // gender, h & w
            $table->char('gender');
            $table->string('height');
            $table->string('weight');
            // date of birth and place of birth
            $table->string('birthMonth');
            $table->string('birthCity');
            $table->string('birthProvince');
            // residence
            $table->string('province');
            $table->string('city');
            $table->string('barangay');
            $table->string('houseNo');
            // citizenship
            $table->string('citizenship');
            $table->string('typeOfCitizenship');
            // civil status
            $table->string('civilStatus');
            // job
            $table->string('job');
            // name of parents
            $table->string('fatherName');
            $table->string('motherName');
            // email info
            $table->string('email')->unique();
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
};
