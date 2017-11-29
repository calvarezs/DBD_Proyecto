<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
			'id'				=> 1,
            'name'	    		=> 'Carlos',
            'surname'       	=> 'Alvarez Silva', 
            'email'       	    => 'carlosalvarezsilva@gmail.com',
            'password'       	=> bcrypt('123456'),
            'phone'       	    => '+569 7777 7771', 
            'state'            	=> 1,
            'rol_id'            => 2
        ]);  
    
        User::create([
			'id'				=> 2,
            'name'	    		=> 'Vicente',
            'surname'       	=> 'Rivera Gutierrez', 
            'email'       	    => 'vicente@rivera.cl',
            'password'       	=> bcrypt('123456'),
            'phone'       	    => '+569 7777 7771', 
            'state'            	=> 1,
            'rol_id'            => 1
        ]); 
        User::create([
            'id'                => 3,
            'name'              => 'Mauricio',
            'surname'           => 'Lopez Rodriguez', 
            'email'             => 'chao@hola.cl',
            'password'          => bcrypt('123456'),
            'phone'             => '+569 7777 7771', 
            'state'             => 1,
            'rol_id'            => 3
        ]);    
    }
}
