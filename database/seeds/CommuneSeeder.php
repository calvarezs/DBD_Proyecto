<?php

use Illuminate\Database\Seeder;
use App\Commune;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {		
		Commune::create([
			'id'			=> 1,
			'commune_name'	=> 'Arica',
			'province_id'	=> 1
		]);

		Commune::create([
			'id'			=> 2,
			'commune_name'	=> 'Camarones',
			'province_id'	=> 1
		]);

		Commune::create([
			'id'			=> 3,
			'commune_name'	=> 'General Lagos',
			'province_id'	=> 2
		]);

		Commune::create([
			'id'			=> 4,
			'commune_name'	=> 'Putre',
			'province_id'	=> 2
		]);

		Commune::create([
			'id'			=> 5,
			'commune_name'	=> 'Alto Hospicio',
			'province_id'	=> 3
		]);

		Commune::create([
			'id'			=> 6,
			'commune_name'	=> 'Iquique',
			'province_id'	=> 3
		]);

		Commune::create([
			'id'			=> 7,
			'commune_name'	=> 'Camiña',
			'province_id'	=> 4
		]);

		Commune::create([
			'id'			=> 8,
			'commune_name'	=> 'Colchane',
			'province_id'	=> 4
		]);

		Commune::create([
			'id'			=> 9,
			'commune_name'	=> 'Huara',
			'province_id'	=> 4
		]);

		Commune::create([
			'id'			=> 10,
			'commune_name'	=> 'Pica',
			'province_id'	=> 4
		]);

		Commune::create([
			'id'			=> 11,
			'commune_name'	=> 'Pozo Almonte',
			'province_id'	=> 4
		]);

		Commune::create([
			'id'			=> 12,
			'commune_name'	=> 'Antofagasta',
			'province_id'	=> 5
		]);

		Commune::create([
			'id'			=> 13,
			'commune_name'	=> 'Mejillones',
			'province_id'	=> 5
		]);

		Commune::create([
			'id'			=> 14,
			'commune_name'	=> 'Sierra Gorda',
			'province_id'	=> 5
		]);

		Commune::create([
			'id'			=> 15,
			'commune_name'	=> 'Taltal',
			'province_id'	=> 5
		]);

		Commune::create([
			'id'			=> 16,
			'commune_name'	=> 'Calama',
			'province_id'	=> 6
		]);

		Commune::create([
			'id'			=> 17,
			'commune_name'	=> 'Ollague',
			'province_id'	=> 6
		]);

		Commune::create([
			'id'			=> 18,
			'commune_name'	=> 'San Pedro de Atacama',
			'province_id'	=> 6
		]);

		Commune::create([
			'id'			=> 19,
			'commune_name'	=> 'María Elena',
			'province_id'	=> 7
		]);

		Commune::create([
			'id'			=> 20,
			'commune_name'	=> 'Tocopilla',
			'province_id'	=> 7
		]);

		Commune::create([
			'id'			=> 21,
			'commune_name'	=> 'Chañaral',
			'province_id'	=> 8
		]);

		Commune::create([
			'id'			=> 22,
			'commune_name'	=> 'Diego de Almagro',
			'province_id'	=> 8
		]);

		Commune::create([
			'id'			=> 23,
			'commune_name'	=> 'Caldera',
			'province_id'	=> 9
		]);

		Commune::create([
			'id'			=> 24,
			'commune_name'	=> 'Copiapó',
			'province_id'	=> 9
		]);

		Commune::create([
			'id'			=> 25,
			'commune_name'	=> 'Tierra Amarilla',
			'province_id'	=> 9
		]);

		Commune::create([
			'id'			=> 26,
			'commune_name'	=> 'Alto del Carmen',
			'province_id'	=> 10
		]);

		Commune::create([
			'id'			=> 27,
			'commune_name'	=> 'Freirina',
			'province_id'	=> 10
		]);

		Commune::create([
			'id'			=> 28,
			'commune_name'	=> 'Huasco',
			'province_id'	=> 10
		]);

		Commune::create([
			'id'			=> 29,
			'commune_name'	=> 'Vallenar',
			'province_id'	=> 10
		]);

		Commune::create([
			'id'			=> 30,
			'commune_name'	=> 'Canela',
			'province_id'	=> 11
		]);

		Commune::create([
			'id'			=> 31,
			'commune_name'	=> 'Illapel',
			'province_id'	=> 11
		]);

		Commune::create([
			'id'			=> 32,
			'commune_name'	=> 'Los Vilos',
			'province_id'	=> 11
		]);

		Commune::create([
			'id'			=> 33,
			'commune_name'	=> 'Salamanca',
			'province_id'	=> 11
		]);

		Commune::create([
			'id'			=> 34,
			'commune_name'	=> 'Andacollo',
			'province_id'	=> 12
		]);

		Commune::create([
			'id'			=> 35,
			'commune_name'	=> 'Coquimbo',
			'province_id'	=> 12
		]);

		Commune::create([
			'id'			=> 36,
			'commune_name'	=> 'La Higuera',
			'province_id'	=> 12
		]);

		Commune::create([
			'id'			=> 37,
			'commune_name'	=> 'La Serena',
			'province_id'	=> 12
		]);

		Commune::create([
			'id'			=> 38,
			'commune_name'	=> 'Paihuaco',
			'province_id'	=> 12
		]);

		Commune::create([
			'id'			=> 39,
			'commune_name'	=> 'Vicuña',
			'province_id'	=> 12
		]);

		Commune::create([
			'id'			=> 40,
			'commune_name'	=> 'Combarbalá',
			'province_id'	=> 13
		]);

		Commune::create([
			'id'			=> 41,
			'commune_name'	=> 'Monte Patria',
			'province_id'	=> 13
		]);

		Commune::create([
			'id'			=> 42,
			'commune_name'	=> 'Ovalle',
			'province_id'	=> 13
		]);

		Commune::create([
			'id'			=> 43,
			'commune_name'	=> 'Punitaqui',
			'province_id'	=> 13
		]);

		Commune::create([
			'id'			=> 44,
			'commune_name'	=> 'Río Hurtado',
			'province_id'	=> 13
		]);

		Commune::create([
			'id'			=> 45,
			'commune_name'	=> 'Isla de Pascua',
			'province_id'	=> 14
		]);

		Commune::create([
			'id'			=> 46,
			'commune_name'	=> 'Calle Larga',
			'province_id'	=> 15
		]);

		Commune::create([
			'id'			=> 47,
			'commune_name'	=> 'Los Andes',
			'province_id'	=> 15
		]);

		Commune::create([
			'id'			=> 48,
			'commune_name'	=> 'Rinconada',
			'province_id'	=> 15
		]);

		Commune::create([
			'id'			=> 49,
			'commune_name'	=> 'San Esteban',
			'province_id'	=> 15
		]);

		Commune::create([
			'id'			=> 50,
			'commune_name'	=> 'La Ligua',
			'province_id'	=> 16
		]);

		Commune::create([
			'id'			=> 51,
			'commune_name'	=> 'Papudo',
			'province_id'	=> 16
		]);

		Commune::create([
			'id'			=> 52,
			'commune_name'	=> 'Petorca',
			'province_id'	=> 16
		]);

		Commune::create([
			'id'			=> 53,
			'commune_name'	=> 'Zapallar',
			'province_id'	=> 16
		]);

		Commune::create([
			'id'			=> 54,
			'commune_name'	=> 'Hijuelas',
			'province_id'	=> 17
		]);

		Commune::create([
			'id'			=> 55,
			'commune_name'	=> 'La Calera',
			'province_id'	=> 17
		]);

		Commune::create([
			'id'			=> 56,
			'commune_name'	=> 'La Cruz',
			'province_id'	=> 17
		]);

		Commune::create([
			'id'			=> 57,
			'commune_name'	=> 'Limache',
			'province_id'	=> 17
		]);

		Commune::create([
			'id'			=> 58,
			'commune_name'	=> 'Nogales',
			'province_id'	=> 17
		]);

		Commune::create([
			'id'			=> 59,
			'commune_name'	=> 'Olmué',
			'province_id'	=> 17
		]);

		Commune::create([
			'id'			=> 60,
			'commune_name'	=> 'Quillota',
			'province_id'	=> 17
		]);

		Commune::create([
			'id'			=> 61,
			'commune_name'	=> 'Algarrobo',
			'province_id'	=> 18
		]);

		Commune::create([
			'id'			=> 62,
			'commune_name'	=> 'Cartagena',
			'province_id'	=> 18
		]);

		Commune::create([
			'id'			=> 63,
			'commune_name'	=> 'El Quisco',
			'province_id'	=> 18
		]);

		Commune::create([
			'id'			=> 64,
			'commune_name'	=> 'El Tabo',
			'province_id'	=> 18
		]);

		Commune::create([
			'id'			=> 65,
			'commune_name'	=> 'San Antonio',
			'province_id'	=> 18
		]);

		Commune::create([
			'id'			=> 66,
			'commune_name'	=> 'Santo Domingo',
			'province_id'	=> 18
		]);

		Commune::create([
			'id'			=> 67,
			'commune_name'	=> 'Catemu',
			'province_id'	=> 19
		]);

		Commune::create([
			'id'			=> 68,
			'commune_name'	=> 'Llaillay',
			'province_id'	=> 19
		]);

		Commune::create([
			'id'			=> 69,
			'commune_name'	=> 'Panquehue',
			'province_id'	=> 19
		]);

		Commune::create([
			'id'			=> 70,
			'commune_name'	=> 'Putaendo',
			'province_id'	=> 19
		]);

		Commune::create([
			'id'			=> 71,
			'commune_name'	=> 'San Felipe',
			'province_id'	=> 19
		]);

		Commune::create([
			'id'			=> 72,
			'commune_name'	=> 'Santa María',
			'province_id'	=> 19
		]);

		Commune::create([
			'id'			=> 73,
			'commune_name'	=> 'Casablanca',
			'province_id'	=> 20
		]);

		Commune::create([
			'id'			=> 74,
			'commune_name'	=> 'Concón',
			'province_id'	=> 20
		]);

		Commune::create([
			'id'			=> 75,
			'commune_name'	=> 'Juan Fernández',
			'province_id'	=> 20
		]);

		Commune::create([
			'id'			=> 76,
			'commune_name'	=> 'Puchuncaví',
			'province_id'	=> 20
		]);

		Commune::create([
			'id'			=> 77,
			'commune_name'	=> 'Quilpué',
			'province_id'	=> 20
		]);

		Commune::create([
			'id'			=> 78,
			'commune_name'	=> 'Quintero',
			'province_id'	=> 20
		]);

		Commune::create([
			'id'			=> 79,
			'commune_name'	=> 'Valparaíso',
			'province_id'	=> 20
		]);

		Commune::create([
			'id'			=> 80,
			'commune_name'	=> 'Villa Alemana',
			'province_id'	=> 20
		]);

		Commune::create([
			'id'			=> 81,
			'commune_name'	=> 'Viña del Mar',
			'province_id'	=> 20
		]);

		Commune::create([
			'id'			=> 82,
			'commune_name'	=> 'Colina',
			'province_id'	=> 21
		]);

		Commune::create([
			'id'			=> 83,
			'commune_name'	=> 'Lampa',
			'province_id'	=> 21
		]);

		Commune::create([
			'id'			=> 84,
			'commune_name'	=> 'Tiltil',
			'province_id'	=> 21
		]);

		Commune::create([
			'id'			=> 85,
			'commune_name'	=> 'Pirque',
			'province_id'	=> 22
		]);

		Commune::create([
			'id'			=> 86,
			'commune_name'	=> 'Puente Alto',
			'province_id'	=> 22
		]);

		Commune::create([
			'id'			=> 87,
			'commune_name'	=> 'San José de Maipo',
			'province_id'	=> 22
		]);

		Commune::create([
			'id'			=> 88,
			'commune_name'	=> 'Buin',
			'province_id'	=> 23
		]);

		Commune::create([
			'id'			=> 89,
			'commune_name'	=> 'Calera de Tango',
			'province_id'	=> 23
		]);

		Commune::create([
			'id'			=> 90,
			'commune_name'	=> 'Paine',
			'province_id'	=> 23
		]);

		Commune::create([
			'id'			=> 91,
			'commune_name'	=> 'San Bernardo',
			'province_id'	=> 23
		]);

		Commune::create([
			'id'			=> 92,
			'commune_name'	=> 'Alhué',
			'province_id'	=> 24
		]);

		Commune::create([
			'id'			=> 93,
			'commune_name'	=> 'Curacaví',
			'province_id'	=> 24
		]);

		Commune::create([
			'id'			=> 94,
			'commune_name'	=> 'María Pinto',
			'province_id'	=> 24
		]);

		Commune::create([
			'id'			=> 95,
			'commune_name'	=> 'Melipilla',
			'province_id'	=> 24
		]);

		Commune::create([
			'id'			=> 96,
			'commune_name'	=> 'San Pedro',
			'province_id'	=> 24
		]);

		Commune::create([
			'id'			=> 97,
			'commune_name'	=> 'Cerrillos',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 98,
			'commune_name'	=> 'Cerro Navia',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 99,
			'commune_name'	=> 'Conchalí',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 100,
			'commune_name'	=> 'El Bosque',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 101,
			'commune_name'	=> 'Estación Central',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 102,
			'commune_name'	=> 'Huechuraba',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 103,
			'commune_name'	=> 'Independencia',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 104,
			'commune_name'	=> 'La Cisterna',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 105,
			'commune_name'	=> 'La Granja',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 106,
			'commune_name'	=> 'La Florida',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 107,
			'commune_name'	=> 'La Pintana',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 108,
			'commune_name'	=> 'La Reina',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 109,
			'commune_name'	=> 'Las Condes',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 110,
			'commune_name'	=> 'Lo Barnechea',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 111,
			'commune_name'	=> 'Lo Espejo',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 112,
			'commune_name'	=> 'Lo Prado',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 113,
			'commune_name'	=> 'Macul',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 114,
			'commune_name'	=> 'Maipú',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 115,
			'commune_name'	=> 'Ñuñoa',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 116,
			'commune_name'	=> 'Pedro Aguirre Cerda',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 117,
			'commune_name'	=> 'Peñalolén',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 118,
			'commune_name'	=> 'Providencia',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 119,
			'commune_name'	=> 'Pudahuel',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 120,
			'commune_name'	=> 'Quilicura',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 121,
			'commune_name'	=> 'Quinta Normal',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 122,
			'commune_name'	=> 'Recoleta',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 123,
			'commune_name'	=> 'Renca',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 124,
			'commune_name'	=> 'San Miguel',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 125,
			'commune_name'	=> 'San Joaquín',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 126,
			'commune_name'	=> 'San Ramón',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 127,
			'commune_name'	=> 'Santiago',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 128,
			'commune_name'	=> 'Vitacura',
			'province_id'	=> 25
		]);

		Commune::create([
			'id'			=> 129,
			'commune_name'	=> 'El Monte',
			'province_id'	=> 26
		]);

		Commune::create([
			'id'			=> 130,
			'commune_name'	=> 'Isla de Maipo',
			'province_id'	=> 26
		]);

		Commune::create([
			'id'			=> 131,
			'commune_name'	=> 'Padre Hurtado',
			'province_id'	=> 26
		]);

		Commune::create([
			'id'			=> 132,
			'commune_name'	=> 'Peñaflor',
			'province_id'	=> 26
		]);

		Commune::create([
			'id'			=> 133,
			'commune_name'	=> 'Talagante',
			'province_id'	=> 26
		]);

		Commune::create([
			'id'			=> 134,
			'commune_name'	=> 'Codegua',
			'province_id'	=> 27
		]);

		Commune::create([
			'id'			=> 135,
			'commune_name'	=> 'Coínco',
			'province_id'	=> 27
		]);

		Commune::create([
			'id'			=> 136,
			'commune_name'	=> 'Coltauco',
			'province_id'	=> 27
		]);

		Commune::create([
			'id'			=> 137,
			'commune_name'	=> 'Doñihue',
			'province_id'	=> 27
		]);

		Commune::create([
			'id'			=> 138,
			'commune_name'	=> 'Graneros',
			'province_id'	=> 27
		]);

		Commune::create([
			'id'			=> 139,
			'commune_name'	=> 'Las Cabras',
			'province_id'	=> 27
		]);

		Commune::create([
			'id'			=> 140,
			'commune_name'	=> 'Machalí',
			'province_id'	=> 27
		]);

		Commune::create([
			'id'			=> 141,
			'commune_name'	=> 'Malloa',
			'province_id'	=> 27
		]);

		Commune::create([
			'id'			=> 142,
			'commune_name'	=> 'Mostazal',
			'province_id'	=> 27
		]);

		Commune::create([
			'id'			=> 143,
			'commune_name'	=> 'Olivar',
			'province_id'	=> 27
		]);

		Commune::create([
			'id'			=> 144,
			'commune_name'	=> 'Peumo',
			'province_id'	=> 27
		]);

		Commune::create([
			'id'			=> 145,
			'commune_name'	=> 'Pichidegua',
			'province_id'	=> 27
		]);

		Commune::create([
			'id'			=> 146,
			'commune_name'	=> 'Quinta de Tilcoco',
			'province_id'	=> 27
		]);

		Commune::create([
			'id'			=> 147,
			'commune_name'	=> 'Rancagua',
			'province_id'	=> 27
		]);

		Commune::create([
			'id'			=> 148,
			'commune_name'	=> 'Rengo',
			'province_id'	=> 27
		]);

		Commune::create([
			'id'			=> 149,
			'commune_name'	=> 'Requínoa',
			'province_id'	=> 27
		]);

		Commune::create([
			'id'			=> 150,
			'commune_name'	=> 'San Vicente de Tagua Tagua',
			'province_id'	=> 27
		]);

		Commune::create([
			'id'			=> 151,
			'commune_name'	=> 'La Estrella',
			'province_id'	=> 28
		]);

		Commune::create([
			'id'			=> 152,
			'commune_name'	=> 'Litueche',
			'province_id'	=> 28
		]);

		Commune::create([
			'id'			=> 153,
			'commune_name'	=> 'Marchihue',
			'province_id'	=> 28
		]);

		Commune::create([
			'id'			=> 154,
			'commune_name'	=> 'Navidad',
			'province_id'	=> 28
		]);

		Commune::create([
			'id'			=> 155,
			'commune_name'	=> 'Peredones',
			'province_id'	=> 28
		]);

		Commune::create([
			'id'			=> 156,
			'commune_name'	=> 'Pichilemu',
			'province_id'	=> 28
		]);

		Commune::create([
			'id'			=> 157,
			'commune_name'	=> 'Chépica',
			'province_id'	=> 29
		]);

		Commune::create([
			'id'			=> 158,
			'commune_name'	=> 'Chimbarongo',
			'province_id'	=> 29
		]);

		Commune::create([
			'id'			=> 159,
			'commune_name'	=> 'Lolol',
			'province_id'	=> 29
		]);

		Commune::create([
			'id'			=> 160,
			'commune_name'	=> 'Nancagua',
			'province_id'	=> 29
		]);

		Commune::create([
			'id'			=> 161,
			'commune_name'	=> 'Palmilla',
			'province_id'	=> 29
		]);

		Commune::create([
			'id'			=> 162,
			'commune_name'	=> 'Peralillo',
			'province_id'	=> 29
		]);

		Commune::create([
			'id'			=> 163,
			'commune_name'	=> 'Placilla',
			'province_id'	=> 29
		]);

		Commune::create([
			'id'			=> 164,
			'commune_name'	=> 'Pumanque',
			'province_id'	=> 29
		]);

		Commune::create([
			'id'			=> 165,
			'commune_name'	=> 'San Fernando',
			'province_id'	=> 29
		]);

		Commune::create([
			'id'			=> 166,
			'commune_name'	=> 'Santa Cruz',
			'province_id'	=> 29
		]);

		Commune::create([
			'id'			=> 167,
			'commune_name'	=> 'Cauquenes',
			'province_id'	=> 30
		]);

		Commune::create([
			'id'			=> 168,
			'commune_name'	=> 'Chanco',
			'province_id'	=> 30
		]);

		Commune::create([
			'id'			=> 169,
			'commune_name'	=> 'Pelluhue',
			'province_id'	=> 30
		]);

		Commune::create([
			'id'			=> 170,
			'commune_name'	=> 'Curicó',
			'province_id'	=> 31
		]);

		Commune::create([
			'id'			=> 171,
			'commune_name'	=> 'Hualañé',
			'province_id'	=> 31
		]);

		Commune::create([
			'id'			=> 172,
			'commune_name'	=> 'Licantén',
			'province_id'	=> 31
		]);

		Commune::create([
			'id'			=> 173,
			'commune_name'	=> 'Molina',
			'province_id'	=> 31
		]);

		Commune::create([
			'id'			=> 174,
			'commune_name'	=> 'Rauco',
			'province_id'	=> 31
		]);

		Commune::create([
			'id'			=> 175,
			'commune_name'	=> 'Romeral',
			'province_id'	=> 31
		]);

		Commune::create([
			'id'			=> 176,
			'commune_name'	=> 'Sagrada Familia',
			'province_id'	=> 31
		]);

		Commune::create([
			'id'			=> 177,
			'commune_name'	=> 'Teno',
			'province_id'	=> 31
		]);

		Commune::create([
			'id'			=> 178,
			'commune_name'	=> 'Vichuquén',
			'province_id'	=> 31
		]);

		Commune::create([
			'id'			=> 179,
			'commune_name'	=> 'Colbún',
			'province_id'	=> 32
		]);

		Commune::create([
			'id'			=> 180,
			'commune_name'	=> 'Linares',
			'province_id'	=> 32
		]);

		Commune::create([
			'id'			=> 181,
			'commune_name'	=> 'Longaví',
			'province_id'	=> 32
		]);

		Commune::create([
			'id'			=> 182,
			'commune_name'	=> 'Parral',
			'province_id'	=> 32
		]);

		Commune::create([
			'id'			=> 183,
			'commune_name'	=> 'Retiro',
			'province_id'	=> 32
		]);

		Commune::create([
			'id'			=> 184,
			'commune_name'	=> 'San Javier',
			'province_id'	=> 32
		]);

		Commune::create([
			'id'			=> 185,
			'commune_name'	=> 'Villa Alegre',
			'province_id'	=> 32
		]);

		Commune::create([
			'id'			=> 186,
			'commune_name'	=> 'Yerbas Buenas',
			'province_id'	=> 32
		]);

		Commune::create([
			'id'			=> 187,
			'commune_name'	=> 'Constitución',
			'province_id'	=> 33
		]);

		Commune::create([
			'id'			=> 188,
			'commune_name'	=> 'Curepto',
			'province_id'	=> 33
		]);

		Commune::create([
			'id'			=> 189,
			'commune_name'	=> 'Empedrado',
			'province_id'	=> 33
		]);

		Commune::create([
			'id'			=> 190,
			'commune_name'	=> 'Maule',
			'province_id'	=> 33
		]);

		Commune::create([
			'id'			=> 191,
			'commune_name'	=> 'Pelarco',
			'province_id'	=> 33
		]);

		Commune::create([
			'id'			=> 192,
			'commune_name'	=> 'Pencahue',
			'province_id'	=> 33
		]);

		Commune::create([
			'id'			=> 193,
			'commune_name'	=> 'Río Claro',
			'province_id'	=> 33
		]);

		Commune::create([
			'id'			=> 194,
			'commune_name'	=> 'San Clemente',
			'province_id'	=> 33
		]);

		Commune::create([
			'id'			=> 195,
			'commune_name'	=> 'San Rafael',
			'province_id'	=> 33
		]);

		Commune::create([
			'id'			=> 196,
			'commune_name'	=> 'Talca',
			'province_id'	=> 33
		]);

		Commune::create([
			'id'			=> 197,
			'commune_name'	=> 'Arauco',
			'province_id'	=> 34
		]);

		Commune::create([
			'id'			=> 198,
			'commune_name'	=> 'Cañete',
			'province_id'	=> 34
		]);

		Commune::create([
			'id'			=> 199,
			'commune_name'	=> 'Contulmo',
			'province_id'	=> 34
		]);

		Commune::create([
			'id'			=> 200,
			'commune_name'	=> 'Curanilahue',
			'province_id'	=> 34
		]);

		Commune::create([
			'id'			=> 201,
			'commune_name'	=> 'Lebu',
			'province_id'	=> 34
		]);

		Commune::create([
			'id'			=> 202,
			'commune_name'	=> 'Los Álamos',
			'province_id'	=> 34
		]);

		Commune::create([
			'id'			=> 203,
			'commune_name'	=> 'Tirúa',
			'province_id'	=> 34
		]);

		Commune::create([
			'id'			=> 204,
			'commune_name'	=> 'Alto Biobío',
			'province_id'	=> 35
		]);

		Commune::create([
			'id'			=> 205,
			'commune_name'	=> 'Antuco',
			'province_id'	=> 35
		]);

		Commune::create([
			'id'			=> 206,
			'commune_name'	=> 'Cabrero',
			'province_id'	=> 35
		]);

		Commune::create([
			'id'			=> 207,
			'commune_name'	=> 'Laja',
			'province_id'	=> 35
		]);

		Commune::create([
			'id'			=> 208,
			'commune_name'	=> 'Los Ángeles',
			'province_id'	=> 35
		]);

		Commune::create([
			'id'			=> 209,
			'commune_name'	=> 'Mulchén',
			'province_id'	=> 35
		]);

		Commune::create([
			'id'			=> 210,
			'commune_name'	=> 'Nacimiento',
			'province_id'	=> 35
		]);

		Commune::create([
			'id'			=> 211,
			'commune_name'	=> 'Negrete',
			'province_id'	=> 35
		]);

		Commune::create([
			'id'			=> 212,
			'commune_name'	=> 'Quilaco',
			'province_id'	=> 35
		]);

		Commune::create([
			'id'			=> 213,
			'commune_name'	=> 'Quilleco',
			'province_id'	=> 35
		]);

		Commune::create([
			'id'			=> 214,
			'commune_name'	=> 'San Rosendo',
			'province_id'	=> 35
		]);

		Commune::create([
			'id'			=> 215,
			'commune_name'	=> 'Santa Bárbara',
			'province_id'	=> 35
		]);

		Commune::create([
			'id'			=> 216,
			'commune_name'	=> 'Tucapel',
			'province_id'	=> 35
		]);

		Commune::create([
			'id'			=> 217,
			'commune_name'	=> 'Yumbel',
			'province_id'	=> 35
		]);

		Commune::create([
			'id'			=> 218,
			'commune_name'	=> 'Chiguayante',
			'province_id'	=> 36
		]);

		Commune::create([
			'id'			=> 219,
			'commune_name'	=> 'Concepción',
			'province_id'	=> 36
		]);

		Commune::create([
			'id'			=> 220,
			'commune_name'	=> 'Coronel',
			'province_id'	=> 36
		]);

		Commune::create([
			'id'			=> 221,
			'commune_name'	=> 'Florida',
			'province_id'	=> 36
		]);

		Commune::create([
			'id'			=> 222,
			'commune_name'	=> 'Hualpén',
			'province_id'	=> 36
		]);

		Commune::create([
			'id'			=> 223,
			'commune_name'	=> 'Hualqui',
			'province_id'	=> 36
		]);

		Commune::create([
			'id'			=> 224,
			'commune_name'	=> 'Lota',
			'province_id'	=> 36
		]);

		Commune::create([
			'id'			=> 225,
			'commune_name'	=> 'Penco',
			'province_id'	=> 36
		]);

		Commune::create([
			'id'			=> 226,
			'commune_name'	=> 'San Pedro de La Paz',
			'province_id'	=> 36
		]);

		Commune::create([
			'id'			=> 227,
			'commune_name'	=> 'Santa Juana',
			'province_id'	=> 36
		]);

		Commune::create([
			'id'			=> 228,
			'commune_name'	=> 'Talcahuano',
			'province_id'	=> 36
		]);

		Commune::create([
			'id'			=> 229,
			'commune_name'	=> 'Tomé',
			'province_id'	=> 36
		]);

		Commune::create([
			'id'			=> 230,
			'commune_name'	=> 'Bulnes',
			'province_id'	=> 37
		]);

		Commune::create([
			'id'			=> 231,
			'commune_name'	=> 'Chillán',
			'province_id'	=> 37
		]);

		Commune::create([
			'id'			=> 232,
			'commune_name'	=> 'Chillán Viejo',
			'province_id'	=> 37
		]);

		Commune::create([
			'id'			=> 233,
			'commune_name'	=> 'Cobquecura',
			'province_id'	=> 37
		]);

		Commune::create([
			'id'			=> 234,
			'commune_name'	=> 'Coelemu',
			'province_id'	=> 37
		]);

		Commune::create([
			'id'			=> 235,
			'commune_name'	=> 'Coihueco',
			'province_id'	=> 37
		]);

		Commune::create([
			'id'			=> 236,
			'commune_name'	=> 'El Carmen',
			'province_id'	=> 37
		]);

		Commune::create([
			'id'			=> 237,
			'commune_name'	=> 'Ninhue',
			'province_id'	=> 37
		]);

		Commune::create([
			'id'			=> 238,
			'commune_name'	=> 'Ñiquen',
			'province_id'	=> 37
		]);

		Commune::create([
			'id'			=> 239,
			'commune_name'	=> 'Pemuco',
			'province_id'	=> 37
		]);

		Commune::create([
			'id'			=> 240,
			'commune_name'	=> 'Pinto',
			'province_id'	=> 37
		]);

		Commune::create([
			'id'			=> 241,
			'commune_name'	=> 'Portezuelo',
			'province_id'	=> 37
		]);

		Commune::create([
			'id'			=> 242,
			'commune_name'	=> 'Quillón',
			'province_id'	=> 37
		]);

		Commune::create([
			'id'			=> 243,
			'commune_name'	=> 'Quirihue',
			'province_id'	=> 37
		]);

		Commune::create([
			'id'			=> 244,
			'commune_name'	=> 'Ránquil',
			'province_id'	=> 37
		]);

		Commune::create([
			'id'			=> 245,
			'commune_name'	=> 'San Carlos',
			'province_id'	=> 37
		]);

		Commune::create([
			'id'			=> 246,
			'commune_name'	=> 'San Fabián',
			'province_id'	=> 37
		]);

		Commune::create([
			'id'			=> 247,
			'commune_name'	=> 'San Ignacio',
			'province_id'	=> 37
		]);

		Commune::create([
			'id'			=> 248,
			'commune_name'	=> 'San Nicolás',
			'province_id'	=> 37
		]);

		Commune::create([
			'id'			=> 249,
			'commune_name'	=> 'Treguaco',
			'province_id'	=> 37
		]);

		Commune::create([
			'id'			=> 250,
			'commune_name'	=> 'Yungay',
			'province_id'	=> 37
		]);

		Commune::create([
			'id'			=> 251,
			'commune_name'	=> 'Carahue',
			'province_id'	=> 38
		]);

		Commune::create([
			'id'			=> 252,
			'commune_name'	=> 'Cholchol',
			'province_id'	=> 38
		]);

		Commune::create([
			'id'			=> 253,
			'commune_name'	=> 'Cunco',
			'province_id'	=> 38
		]);

		Commune::create([
			'id'			=> 254,
			'commune_name'	=> 'Curarrehue',
			'province_id'	=> 38
		]);

		Commune::create([
			'id'			=> 255,
			'commune_name'	=> 'Freire',
			'province_id'	=> 38
		]);

		Commune::create([
			'id'			=> 256,
			'commune_name'	=> 'Galvarino',
			'province_id'	=> 38
		]);

		Commune::create([
			'id'			=> 257,
			'commune_name'	=> 'Gorbea',
			'province_id'	=> 38
		]);

		Commune::create([
			'id'			=> 258,
			'commune_name'	=> 'Lautaro',
			'province_id'	=> 38
		]);

		Commune::create([
			'id'			=> 259,
			'commune_name'	=> 'Loncoche',
			'province_id'	=> 38
		]);

		Commune::create([
			'id'			=> 260,
			'commune_name'	=> 'Melipeuco',
			'province_id'	=> 38
		]);

		Commune::create([
			'id'			=> 261,
			'commune_name'	=> 'Nueva Imperial',
			'province_id'	=> 38
		]);

		Commune::create([
			'id'			=> 262,
			'commune_name'	=> 'Padre Las Casas',
			'province_id'	=> 38
		]);

		Commune::create([
			'id'			=> 263,
			'commune_name'	=> 'Perquenco',
			'province_id'	=> 38
		]);

		Commune::create([
			'id'			=> 264,
			'commune_name'	=> 'Pitrufquén',
			'province_id'	=> 38
		]);

		Commune::create([
			'id'			=> 265,
			'commune_name'	=> 'Pucón',
			'province_id'	=> 38
		]);

		Commune::create([
			'id'			=> 266,
			'commune_name'	=> 'Saavedra',
			'province_id'	=> 38
		]);

		Commune::create([
			'id'			=> 267,
			'commune_name'	=> 'Temuco',
			'province_id'	=> 38
		]);

		Commune::create([
			'id'			=> 268,
			'commune_name'	=> 'Teodoro Schmidt',
			'province_id'	=> 38
		]);

		Commune::create([
			'id'			=> 269,
			'commune_name'	=> 'Toltén',
			'province_id'	=> 38
		]);

		Commune::create([
			'id'			=> 270,
			'commune_name'	=> 'Vilcún',
			'province_id'	=> 38
		]);

		Commune::create([
			'id'			=> 271,
			'commune_name'	=> 'Villarrica',
			'province_id'	=> 38
		]);

		Commune::create([
			'id'			=> 272,
			'commune_name'	=> 'Angol',
			'province_id'	=> 39
		]);

		Commune::create([
			'id'			=> 273,
			'commune_name'	=> 'Collipulli',
			'province_id'	=> 39
		]);

		Commune::create([
			'id'			=> 274,
			'commune_name'	=> 'Curacautín',
			'province_id'	=> 39
		]);

		Commune::create([
			'id'			=> 275,
			'commune_name'	=> 'Ercilla',
			'province_id'	=> 39
		]);

		Commune::create([
			'id'			=> 276,
			'commune_name'	=> 'Lonquimay',
			'province_id'	=> 39
		]);

		Commune::create([
			'id'			=> 277,
			'commune_name'	=> 'Los Sauces',
			'province_id'	=> 39
		]);

		Commune::create([
			'id'			=> 278,
			'commune_name'	=> 'Lumaco',
			'province_id'	=> 39
		]);

		Commune::create([
			'id'			=> 279,
			'commune_name'	=> 'Purén',
			'province_id'	=> 39
		]);

		Commune::create([
			'id'			=> 280,
			'commune_name'	=> 'Renaico',
			'province_id'	=> 39
		]);

		Commune::create([
			'id'			=> 281,
			'commune_name'	=> 'Traiguén',
			'province_id'	=> 39
		]);

		Commune::create([
			'id'			=> 282,
			'commune_name'	=> 'Victoria',
			'province_id'	=> 39
		]);

		Commune::create([
			'id'			=> 283,
			'commune_name'	=> 'Corral',
			'province_id'	=> 40
		]);

		Commune::create([
			'id'			=> 284,
			'commune_name'	=> 'Lanco',
			'province_id'	=> 40
		]);

		Commune::create([
			'id'			=> 285,
			'commune_name'	=> 'Los Lagos',
			'province_id'	=> 40
		]);

		Commune::create([
			'id'			=> 286,
			'commune_name'	=> 'Máfil',
			'province_id'	=> 40
		]);

		Commune::create([
			'id'			=> 287,
			'commune_name'	=> 'Mariquina',
			'province_id'	=> 40
		]);

		Commune::create([
			'id'			=> 288,
			'commune_name'	=> 'Paillaco',
			'province_id'	=> 40
		]);

		Commune::create([
			'id'			=> 289,
			'commune_name'	=> 'Panguipulli',
			'province_id'	=> 40
		]);

		Commune::create([
			'id'			=> 290,
			'commune_name'	=> 'Valdivia',
			'province_id'	=> 40
		]);

		Commune::create([
			'id'			=> 291,
			'commune_name'	=> 'Futrono',
			'province_id'	=> 41
		]);

		Commune::create([
			'id'			=> 292,
			'commune_name'	=> 'La Unión',
			'province_id'	=> 41
		]);

		Commune::create([
			'id'			=> 293,
			'commune_name'	=> 'Lago Ranco',
			'province_id'	=> 41
		]);

		Commune::create([
			'id'			=> 294,
			'commune_name'	=> 'Río Bueno',
			'province_id'	=> 41
		]);

		Commune::create([
			'id'			=> 295,
			'commune_name'	=> 'Ancud',
			'province_id'	=> 42
		]);

		Commune::create([
			'id'			=> 296,
			'commune_name'	=> 'Castro',
			'province_id'	=> 42
		]);

		Commune::create([
			'id'			=> 297,
			'commune_name'	=> 'Chonchi',
			'province_id'	=> 42
		]);

		Commune::create([
			'id'			=> 298,
			'commune_name'	=> 'Curaco de Vélez',
			'province_id'	=> 42
		]);

		Commune::create([
			'id'			=> 299,
			'commune_name'	=> 'Dalcahue',
			'province_id'	=> 42
		]);

		Commune::create([
			'id'			=> 300,
			'commune_name'	=> 'Puqueldón',
			'province_id'	=> 42
		]);

		Commune::create([
			'id'			=> 301,
			'commune_name'	=> 'Queilén',
			'province_id'	=> 42
		]);

		Commune::create([
			'id'			=> 302,
			'commune_name'	=> 'Quemchi',
			'province_id'	=> 42
		]);

		Commune::create([
			'id'			=> 303,
			'commune_name'	=> 'Quellón',
			'province_id'	=> 42
		]);

		Commune::create([
			'id'			=> 304,
			'commune_name'	=> 'Quinchao',
			'province_id'	=> 42
		]);

		Commune::create([
			'id'			=> 305,
			'commune_name'	=> 'Calbuco',
			'province_id'	=> 43
		]);

		Commune::create([
			'id'			=> 306,
			'commune_name'	=> 'Cochamó',
			'province_id'	=> 43
		]);

		Commune::create([
			'id'			=> 307,
			'commune_name'	=> 'Fresia',
			'province_id'	=> 43
		]);

		Commune::create([
			'id'			=> 308,
			'commune_name'	=> 'Frutillar',
			'province_id'	=> 43
		]);

		Commune::create([
			'id'			=> 309,
			'commune_name'	=> 'Llanquihue',
			'province_id'	=> 43
		]);

		Commune::create([
			'id'			=> 310,
			'commune_name'	=> 'Los Muermos',
			'province_id'	=> 43
		]);

		Commune::create([
			'id'			=> 311,
			'commune_name'	=> 'Maullín',
			'province_id'	=> 43
		]);

		Commune::create([
			'id'			=> 312,
			'commune_name'	=> 'Puerto Montt',
			'province_id'	=> 43
		]);

		Commune::create([
			'id'			=> 313,
			'commune_name'	=> 'Puerto Varas',
			'province_id'	=> 43
		]);

		Commune::create([
			'id'			=> 314,
			'commune_name'	=> 'Osorno',
			'province_id'	=> 44
		]);

		Commune::create([
			'id'			=> 315,
			'commune_name'	=> 'Puero Octay',
			'province_id'	=> 44
		]);

		Commune::create([
			'id'			=> 316,
			'commune_name'	=> 'Purranque',
			'province_id'	=> 44
		]);

		Commune::create([
			'id'			=> 317,
			'commune_name'	=> 'Puyehue',
			'province_id'	=> 44
		]);

		Commune::create([
			'id'			=> 318,
			'commune_name'	=> 'Río Negro',
			'province_id'	=> 44
		]);

		Commune::create([
			'id'			=> 319,
			'commune_name'	=> 'San Juan de la Costa',
			'province_id'	=> 44
		]);

		Commune::create([
			'id'			=> 320,
			'commune_name'	=> 'San Pablo',
			'province_id'	=> 44
		]);

		Commune::create([
			'id'			=> 321,
			'commune_name'	=> 'Chaitén',
			'province_id'	=> 45
		]);

		Commune::create([
			'id'			=> 322,
			'commune_name'	=> 'Futaleufú',
			'province_id'	=> 45
		]);

		Commune::create([
			'id'			=> 323,
			'commune_name'	=> 'Hualaihué',
			'province_id'	=> 45
		]);

		Commune::create([
			'id'			=> 324,
			'commune_name'	=> 'Palena',
			'province_id'	=> 45
		]);

		Commune::create([
			'id'			=> 325,
			'commune_name'	=> 'Aisén',
			'province_id'	=> 46
		]);

		Commune::create([
			'id'			=> 326,
			'commune_name'	=> 'Cisnes',
			'province_id'	=> 46
		]);

		Commune::create([
			'id'			=> 327,
			'commune_name'	=> 'Guaitecas',
			'province_id'	=> 46
		]);

		Commune::create([
			'id'			=> 328,
			'commune_name'	=> 'Cochrane',
			'province_id'	=> 47
		]);

		Commune::create([
			'id'			=> 329,
			'commune_name'	=> 'O\'higgins',
			'province_id'	=> 47
		]);

		Commune::create([
			'id'			=> 330,
			'commune_name'	=> 'Tortel',
			'province_id'	=> 47
		]);

		Commune::create([
			'id'			=> 331,
			'commune_name'	=> 'Coihaique',
			'province_id'	=> 48
		]);

		Commune::create([
			'id'			=> 332,
			'commune_name'	=> 'Lago Verde',
			'province_id'	=> 48
		]);

		Commune::create([
			'id'			=> 333,
			'commune_name'	=> 'Chile Chico',
			'province_id'	=> 49
		]);

		Commune::create([
			'id'			=> 334,
			'commune_name'	=> 'Río Ibáñez',
			'province_id'	=> 49
		]);

		Commune::create([
			'id'			=> 335,
			'commune_name'	=> 'Antártica',
			'province_id'	=> 50
		]);

		Commune::create([
			'id'			=> 336,
			'commune_name'	=> 'Cabo de Hornos',
			'province_id'	=> 50
		]);

		Commune::create([
			'id'			=> 337,
			'commune_name'	=> 'Laguna Blanca',
			'province_id'	=> 51
		]);

		Commune::create([
			'id'			=> 338,
			'commune_name'	=> 'Punta Arenas',
			'province_id'	=> 51
		]);

		Commune::create([
			'id'			=> 339,
			'commune_name'	=> 'Río Verde',
			'province_id'	=> 51
		]);

		Commune::create([
			'id'			=> 340,
			'commune_name'	=> 'San Gregorio',
			'province_id'	=> 51
		]);

		Commune::create([
			'id'			=> 341,
			'commune_name'	=> 'Porvenir',
			'province_id'	=> 52
		]);

		Commune::create([
			'id'			=> 342,
			'commune_name'	=> 'Primavera',
			'province_id'	=> 52
		]);

		Commune::create([
			'id'			=> 343,
			'commune_name'	=> 'Timaukel',
			'province_id'	=> 52
		]);

		Commune::create([
			'id'			=> 344,
			'commune_name'	=> 'Natales',
			'province_id'	=> 53
		]);

		Commune::create([
			'id'			=> 345,
			'commune_name'	=> 'Torres del Paine',
			'province_id'	=> 53
		]);
	
    }
} 