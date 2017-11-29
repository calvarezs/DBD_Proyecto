<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{

	protected  $table = 'communes';
	
	protected $fillable = [
	    'commune_name', 
		'province_id'
	];



	public function catastrophes()
	{
		 return $this->hasMany('App\CatastropheCommune','commune_id');
	}

	public function provinces()
	{
		return $this->belongsTo('App\Province', 'province_id');
	}

}
