<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerStopUserDelete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            'CREATE OR REPLACE FUNCTION stop_erase() 
            RETURNS TRIGGER AS $cancel$
            DECLARE
            BEGIN
                UPDATE users
                SET blocked=TRUE 
                WHERE id=old.id;
                RETURN NULL;
            END;
            $cancel$ LANGUAGE plpgsql;'
        );

    DB::statement('DROP TRIGGER IF EXISTS stop_erase on users cascade');
    DB::statement('CREATE TRIGGER stop_erase BEFORE DELETE
                    ON users FOR EACH ROW 
                    EXECUTE ProCedure stop_erase()');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TRIGGER IF EXISTS stop_erase on users cascade');
        DB::statement('DROP FUNCTION IF EXISTS stop_erase() cascade');
    }
}
