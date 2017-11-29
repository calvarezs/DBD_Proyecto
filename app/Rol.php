<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rols';

    protected $fillable = [
        'rol_name', 
		'rol_description',
		'type_permission'
    ];

    public function users()
    {
        return $this->hasMany('App\User', 'rol_id');
    }
}
