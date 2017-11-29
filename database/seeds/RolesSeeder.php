<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
			'id'				=> 1,
            'rol_name'			=> 'Usuario',
            'rol_description'	=> 'El usuario de toda la vida.', 
            'type_permission'   => 0
        ]);
        
        Rol::create([
			'id'				=> 2,
            'rol_name'			=> 'Administrador',
            'rol_description'	=> 'El que tiene todos los permisos.', 
            'type_permission'   => 1
        ]);

        Rol::create([
			'id'				=> 3,
            'rol_name'			=> 'Gobierno',
            'rol_description'	=> 'Integrante del gobierno.', 
            'type_permission'   => 1
        ]);

        Rol::create([
			'id'				=> 4,
            'rol_name'			=> 'Organización',
            'rol_description'	=> 'Organización humana encargado de las labores solidarias.', 
            'type_permission'   => 1
        ]);
    }
}
