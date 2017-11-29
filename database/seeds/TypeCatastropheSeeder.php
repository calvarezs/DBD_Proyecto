<?php

use Illuminate\Database\Seeder;
use App\TypeCatastrophe;

class TypeCatastropheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        TypeCatastrophe::create([
            'id'            => 1,
            'name'          => "Sismo",
            'description'   => "Movimiento de tierra de potencia variable."
		]);
            
        TypeCatastrophe::create([
            'id'            => 2,
            'name'          => "Tsunami",
            'description'   => "Movimiento cataclismico del mar."
        ]);
        
        TypeCatastrophe::create([
            'id'            => 3,
            'name'          => "Incendio",
            'description'   => "Incendio que abarca más de 50 hectareas cuadradas."
        ]);

        TypeCatastrophe::create([
            'id'            => 4,
            'name'          => "Erupción Volcánica",
            'description'   => "Erupción de un volcán que genera destrozos."
        ]);
        
        TypeCatastrophe::create([
            'id'            => 5,
            'name'          => "Inundación",
            'description'   => "Acumulación exagerada de agua sin evacuar."
		]);
    }
}
