<?php

use Illuminate\Database\Seeder;
use App\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Region::create([
			'id' 			=> 1,
			'region_name' 	=> 'Arica y Parinacota',
			'region_code' 	=> 'XV'

		]);

		Region::create([
			'id' 			=> 2,
			'region_name' 	=> 'Tarapacá',
			'region_code' 	=> 'I'
		]);

		Region::create([
			'id' 			=> 3,
			'region_name' 	=> 'Antofagasta',
			'region_code' 	=> 'II'
		]);

		Region::create([
			'id' 			=> 4,
			'region_name' 	=> 'Atacama',
			'region_code' 	=> 'III'
		]);

		Region::create([
			'id' 			=> 5,
			'region_name' 	=> 'Coquimbo',
			'region_code' 	=> 'IV'
		]);

		Region::create([
			'id' 			=> 6,
			'region_name' 	=> 'Valparaiso',
			'region_code' 	=> 'V'
		]);

		Region::create([
			'id' 			=> 7,
			'region_name' 	=> 'Metropolitana de Santiago',
			'region_code' 	=> 'RM'
		]);

		Region::create([
			'id' 			=> 8,
			'region_name' 	=> 'Libertador General Bernardo O\'Higgins',
			'region_code' 	=> 'VI'
		]);

		Region::create([
			'id' 			=> 9,
			'region_name' 	=> 'Maule',
			'region_code' 	=> 'VII'
		]);

		Region::create([
			'id' 			=> 10,
			'region_name' 	=> 'Biobío',
			'region_code' 	=> 'VIII'
		]);

		Region::create([
			'id' 			=> 11,
			'region_name' 	=> 'La Araucanía',
			'region_code' 	=> 'IX'
		]);

		Region::create([
			'id' 			=> 12,
			'region_name' 	=> 'Los Ríos',
			'region_code' 	=> 'XIV'
		]);

		Region::create([
			'id' 			=> 13,
			'region_name' 	=> 'Los Lagos',
			'region_code' 	=> 'X'
		]);

		Region::create([
			'id' 			=> 14,
			'region_name' 	=> 'Aisén del General Carlos Ibáñez del Campo',
			'region_code' 	=> 'XI'
		]);

		Region::create([
			'id' 			=> 15,
			'region_name' 	=> 'Magallanes y de la Antártica Chilena',
			'region_code' 	=> 'XII'
		]);
		
    }
}