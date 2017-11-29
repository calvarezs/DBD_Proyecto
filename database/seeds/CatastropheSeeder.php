<?php

use Illuminate\Database\Seeder;
use App\Catastrophe;

class CatastropheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Catastrophe::create([
            'id'                    => 1,
            'catastrophe_name'      => 'Sismo de 9.0 grados Ritcher en Quilicura',
            'catastrophe_progress'  => 1,
            'type_catastrophe_id'   => 1
        ]);
        
        Catastrophe::create([
            'id'                    => 2,
            'catastrophe_name'      => 'Lluvia ligera en Santiago',
            'catastrophe_progress'  => 1,
            'type_catastrophe_id'   => 5
        ]);

        Catastrophe::create([
            'id'                    => 3,
            'catastrophe_name'      => 'Sismo de 7.0 grados Ritcher en Arica',
            'catastrophe_progress'  => 1,
            'type_catastrophe_id'   => 1
        ]);

        Catastrophe::create([
            'id'                    => 4,
            'catastrophe_name'      => 'Erupción volcánica en Rapa Nui',
            'catastrophe_progress'  => 1,
            'type_catastrophe_id'   => 4
		]);
    }
}
