<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeCatastrophe extends Model
{
	protected  $table = 'type_catastrophe';
	
    protected $fillable = [
        'name', 
		'description'
    ];
	
	public function catastrophe()
    {
    	return $this->hasMany('App\TypeCatastrophe', 'type_catastrophe_id');
    }
}
