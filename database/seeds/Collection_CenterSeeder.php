<?php

use Illuminate\Database\Seeder;
use App\Collection_center;

class Collection_CenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Collection_center::create([ 
            'id'			=> 1,
            'name'          => 'Centro 1',
            'status_report' => 'Lleno',
            'address'       => 'Los aroms 745',
            'measure_id'    => 1
        ]);

        Collection_center::create([ 
            'id'			=> 2,
            'name'          => 'Centro 2',
            'status_report' => 'Requiere artículos',
            'address'       => 'Av. Pomela 874',
            'measure_id'    => 2
        ]);

        Collection_center::create([ 
            'id'			=> 3,
            'name'          => 'Centro 3',
            'status_report' => 'Requiere artículos',
            'address'       => 'Rio Clarillo 4351',
            'measure_id'    => 1
        ]);

        Collection_center::create([ 
            'id'			=> 4,
            'name'          => 'Centro 4',
            'status_report' => 'Requiere artículos',
            'address'       => 'Los camellos 222',
            'measure_id'    => 4
        ]);

        Collection_center::create([ 
            'id'			=> 5,
            'name'          => 'Centro 5',
            'status_report' => 'Requiere artículos',
            'address'       => 'Moes Tavern',
            'measure_id'    => 5
        ]);
    }
}
