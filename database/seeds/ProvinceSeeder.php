<?php

use Illuminate\Database\Seeder;
use App\Province;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Province::create([
			'id'			=> 1,
			'province_name'	=> 'Arica',
			'region_id'		=> 1
		]);

		Province::create([
			'id'			=> 2,
			'province_name'	=> 'Parinacota',
			'region_id'		=> 1
		]);

		Province::create([
			'id'			=> 3,
			'province_name'	=> 'Iquique',
			'region_id'		=> 2
		]);

		Province::create([
			'id'			=> 4,
			'province_name'	=> 'El Tamarugal',
			'region_id'		=> 2
		]);

		Province::create([
			'id'			=> 5,
			'province_name'	=> 'Antofagasta',
			'region_id'		=> 3
		]);

		Province::create([
			'id'			=> 6,
			'province_name'	=> 'El Loa',
			'region_id'		=> 3
		]);

		Province::create([
			'id'			=> 7,
			'province_name'	=> 'Tocopilla',
			'region_id'		=> 3
		]);

		Province::create([
			'id'			=> 8,
			'province_name'	=> 'Chañaral',
			'region_id'		=> 4
		]);

		Province::create([
			'id'			=> 9,
			'province_name'	=> 'Copiapó',
			'region_id'		=> 4
		]);

		Province::create([
			'id'			=> 10,
			'province_name'	=> 'Huasco',
			'region_id'		=> 4
		]);

		Province::create([
			'id'			=> 11,
			'province_name'	=> 'Choapa',
			'region_id'		=> 5
		]);

		Province::create([
			'id'			=> 12,
			'province_name'	=> 'Elqui',
			'region_id'		=> 5
		]);

		Province::create([
			'id'			=> 13,
			'province_name'	=> 'Limarí',
			'region_id'		=> 5
		]);

		Province::create([
			'id'			=> 14,
			'province_name'	=> 'Isla de Pascua',
			'region_id'		=> 6
		]);

		Province::create([
			'id'			=> 15,
			'province_name'	=> 'Los Andes',
			'region_id'		=> 6
		]);

		Province::create([
			'id'			=> 16,
			'province_name'	=> 'Petorca',
			'region_id'		=> 6
		]);

		Province::create([
			'id'			=> 17,
			'province_name'	=> 'Quillota',
			'region_id'		=> 6
		]);

		Province::create([
			'id'			=> 18,
			'province_name'	=> 'San Antonio',
			'region_id'		=> 6
		]);

		Province::create([
			'id'			=> 19,
			'province_name'	=> 'San Felipe de Aconcagua',
			'region_id'		=> 6
		]);

		Province::create([
			'id'			=> 20,
			'province_name'	=> 'Valparaiso',
			'region_id'		=> 6
		]);

		Province::create([
			'id'			=> 21,
			'province_name'	=> 'Chacabuco',
			'region_id'		=> 7
		]);

		Province::create([
			'id'			=> 22,
			'province_name'	=> 'Cordillera',
			'region_id'		=> 7
		]);

		Province::create([
			'id'			=> 23,
			'province_name'	=> 'Maipo',
			'region_id'		=> 7
		]);

		Province::create([
			'id'			=> 24,
			'province_name'	=> 'Melipilla',
			'region_id'		=> 7
		]);

		Province::create([
			'id'			=> 25,
			'province_name'	=> 'Santiago',
			'region_id'		=> 7
		]);

		Province::create([
			'id'			=> 26,
			'province_name'	=> 'Talagante',
			'region_id'		=> 7
		]);

		Province::create([
			'id'			=> 27,
			'province_name'	=> 'Cachapoal',
			'region_id'		=> 8
		]);

		Province::create([
			'id'			=> 28,
			'province_name'	=> 'Cardenal Caro',
			'region_id'		=> 8
		]);

		Province::create([
			'id'			=> 29,
			'province_name'	=> 'Colchagua',
			'region_id'		=> 8
		]);

		Province::create([
			'id'			=> 30,
			'province_name'	=> 'Cauquenes',
			'region_id'		=> 9
		]);

		Province::create([
			'id'			=> 31,
			'province_name'	=> 'Curicó',
			'region_id'		=> 9
		]);

		Province::create([
			'id'			=> 32,
			'province_name'	=> 'Linares',
			'region_id'		=> 9
		]);

		Province::create([
			'id'			=> 33,
			'province_name'	=> 'Talca',
			'region_id'		=> 9
		]);

		Province::create([
			'id'			=> 34,
			'province_name'	=> 'Arauco',
			'region_id'		=> 10
		]);

		Province::create([
			'id'			=> 35,
			'province_name'	=> 'Bio Bío',
			'region_id'		=> 10
		]);

		Province::create([
			'id'			=> 36,
			'province_name'	=> 'Concepción',
			'region_id'		=> 10
		]);

		Province::create([
			'id'			=> 37,
			'province_name'	=> 'Ñuble',
			'region_id'		=> 10
		]);

		Province::create([
			'id'			=> 38,
			'province_name'	=> 'Cautín',
			'region_id'		=> 11
		]);

		Province::create([
			'id'			=> 39,
			'province_name'	=> 'Malleco',
			'region_id'		=> 11
		]);

		Province::create([
			'id'			=> 40,
			'province_name'	=> 'Valdivia',
			'region_id'		=> 12
		]);

		Province::create([
			'id'			=> 41,
			'province_name'	=> 'Ranco',
			'region_id'		=> 12
		]);

		Province::create([
			'id'			=> 42,
			'province_name'	=> 'Chiloé',
			'region_id'		=> 13
		]);

		Province::create([
			'id'			=> 43,
			'province_name'	=> 'Llanquihue',
			'region_id'		=> 13
		]);

		Province::create([
			'id'			=> 44,
			'province_name'	=> 'Osorno',
			'region_id'		=> 13
		]);

		Province::create([
			'id'			=> 45,
			'province_name'	=> 'Palena',
			'region_id'		=> 13
		]);

		Province::create([
			'id'			=> 46,
			'province_name'	=> 'Aisén',
			'region_id'		=> 14
		]);

		Province::create([
			'id'			=> 47,
			'province_name'	=> 'Capitán Prat',
			'region_id'		=> 14
		]);

		Province::create([
			'id'			=> 48,
			'province_name'	=> 'Coihaique',
			'region_id'		=> 14
		]);

		Province::create([
			'id'			=> 49,
			'province_name'	=> 'General Carrera',
			'region_id'		=> 14
		]);

		Province::create([
			'id'			=> 50,
			'province_name'	=> 'Antártica Chilena',
			'region_id'		=> 15
		]);

		Province::create([
			'id'			=> 51,
			'province_name'	=> 'Magallanes',
			'region_id'		=> 15
		]);

		Province::create([
			'id'			=> 52,
			'province_name'	=> 'Tierra del Fuego',
			'region_id'		=> 15
		]);

		Province::create([
			'id'			=> 53,
			'province_name'	=> 'Última Esperanza',
			'region_id'		=> 15
		]);
		
    }
}