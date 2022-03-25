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
        Schema::create('apconregistrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ApconCategory');
            $table->string('Title')->nullable();
            $table->string('Surname')->nullable();
            $table->string('First')->nullable();
            $table->string('Middle')->nullable();
            $table->enum('Gender',['Male','Female']);
            $table->string('Email')->unique();
            $table->string('ContactAddress')->nullable();
            $table->string('Phone')->nullable();
            $table->string('DOB')->nullable();
            $table->string('PlaceofBirth')->nullable();
            $table->string('NextofKinName')->nullable();
            $table->string('NextofKinAddress');
           // $table->string( 'Profilepicture');

           $table->string('City')->nullable();
           $table->string('State')->nullable();
           $table->string('Country')->nullable();
           $table->string('Organization_Name')->nullable();
           $table->string('Organization_Location')->nullable();
            $table->timestamps();
            // 'ProfileImage' => 'required|image|mimes:jpg,png,jpeg,gif,svg',

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apconregistrations');
    }
};
