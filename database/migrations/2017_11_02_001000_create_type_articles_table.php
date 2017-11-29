<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('type_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_name');
            $table->text('description');
            $table->integer('collection_center_id')->unisgned();
			$table->foreign('collection_center_id')->references('id')->on('collection_centers');
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
        Schema::dropIfExists('type_articles');
    }
}