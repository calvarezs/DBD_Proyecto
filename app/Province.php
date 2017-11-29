<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
	protected  $table = 'provinces';
	
	protected $fillable = [
	    'province_name', 
		'region_id'
	];
	
	public function regions()
	{
		return $this->belongsTo('App\Region','region_id');
	}


	/*public funcion provinces($id){
		return Province::where('region_id','=',$id)->get();
	} */
}
