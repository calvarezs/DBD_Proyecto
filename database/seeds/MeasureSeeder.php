<?php

use Illuminate\Database\Seeder;
use App\Measure;

class MeasureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Measure::create([
			'id'			    => 1,
			'start_date'        => '2017-01-08 04:05:06',
            'finish_date'       => '2018-01-08 04:05:06',
            'status_measure'     => 1,
            'progress_percent'  => 20,
            'user_id'           => 1,
            'catastrophe_id'    => 2
        ]);

        Measure::create([
			'id'			    => 2,
			'start_date'        => '2017-01-08 04:05:06',
            'finish_date'       => '2018-01-08 04:05:06',
            'status_measure'     => 1,
            'progress_percent'  => 20,
            'user_id'           => 1,
            'catastrophe_id'    => 4
        ]);

        Measure::create([
			'id'			    => 3,
			'start_date'        => '2017-01-08 04:05:06',
            'finish_date'       => '2018-01-08 04:05:06', 
            'progress_percent'  => 20,
            'user_id'           => 1,
            'catastrophe_id'    => 1
        ]);

        Measure::create([
			'id'			    => 4,
			'start_date'        => '2017-01-08 04:05:06',
            'finish_date'       => '2018-01-08 04:05:06', 
            'progress_percent'  => 20,
            'user_id'           => 1,
            'catastrophe_id'    => 3
        ]);

        Measure::create([
			'id'			    => 5,
			'start_date'        => '2017-01-08 04:05:06',
            'finish_date'       => '2018-01-08 04:05:06',
            'status_measure'     => 1,
            'progress_percent'  => 20,
            'user_id'           => 1,
            'catastrophe_id'    => 1
        ]);
    }
}
