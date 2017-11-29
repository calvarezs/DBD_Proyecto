<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatastropheCommunesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catastrophe_communes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('catastrophe_id')->unsigned();
            $table->integer('commune_id')->unsigned();            
            $table->foreign('catastrophe_id')->references('id')->on('catastrophes')->onDelete('cascade');   
            $table->foreign('commune_id')->references('id')->on('communes')->onDelete('cascade');             
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
        Schema::dropIfExists('catastrophe_communes');
    }
}
