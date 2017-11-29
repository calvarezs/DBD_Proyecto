<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('modified_table_id');
            $table->integer('action');
            $table->string('name_modified_column');
            $table->date('modification_date');
            $table->integer('int_old_value')->nullable();
            $table->integer('int_new_value')->nullable();
            $table->string('string_old_value')->nullable();
            $table->string('string_new_value')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('user_histories');
    }
}
