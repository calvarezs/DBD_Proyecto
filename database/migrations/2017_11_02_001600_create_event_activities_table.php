<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_activity');
			$table->string('address');
            $table->text('description_activity');
            $table->integer('event_benefit_id');
            $table->foreign('event_benefit_id')->references('id')->on('event_benefits')->onDelete('cascade');
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
        Schema::dropIfExists('event_activities');
    }
}
