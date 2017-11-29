<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_expense')->nullable();
            $table->text('description_expense')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('total_amount')->nullable();
            $table->integer('money_donation_id')->unsigned();
            $table->foreign('money_donation_id')->references('id')->on('money_donations')->onDelete('cascade');
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
        Schema::dropIfExists('expenses');
    }
}
