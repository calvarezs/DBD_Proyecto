<?php

use Illuminate\Database\Seeder;
use App\Money_donation;

class Money_donationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Money_donation::create([ 
            'id'			=> 1,
            'total_amount'	=> 4000000,
            'measure_id'	=> 1 
        ]);
        Money_donation::create([ 
            'id'			=> 2,
            'total_amount'	=> 70000000,
            'measure_id'	=> 2 
        ]);
        Money_donation::create([ 
            'id'			=> 3,
            'total_amount'	=> 1500000,
            'measure_id'	=> 3 
        ]);
        Money_donation::create([ 
            'id'			=> 4,
            'total_amount'	=> 100000,
            'measure_id'	=> 4 
        ]);
        Money_donation::create([ 
            'id'			=> 5,
            'total_amount'	=> 15000000,
            'measure_id'	=> 2 
        ]);
    }
}
