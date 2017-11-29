<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer_skill extends Model
{
    protected  $table = 'volunteer_skills';
	
    protected $fillable = [
        'name_skill', 
		'description_skill',
		'volunteer_id'
    ];

    public function volunteers()
    {
    	return $this->belongsTo('App\Volunteer', 'volunteer_id');
    }
}
