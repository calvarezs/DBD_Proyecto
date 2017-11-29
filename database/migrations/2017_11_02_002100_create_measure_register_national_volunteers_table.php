<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeasureRegisterNationalVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measure_volunteers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('measure_id')->unsigned();
            $table->integer('national_register_volunteer_id')->unsigned();
            $table->foreign('measure_id')->references('id')->on('measures')->onDelete('cascade'); 
            $table->foreign('national_register_volunteer_id')->references('id')->on('national_register_volunteers')->onDelete('cascade');  
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
        Schema::dropIfExists('measure_register_national_volunteers');
    }
}
