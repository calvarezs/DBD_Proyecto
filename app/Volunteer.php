<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
	protected  $table = 'volunteers';
	
	protected $fillable = [
        'required_amount', 
		'address',
		'work_hours',
		'description',
		'measure_id'
    ];

    public function measures()
    {
    	return $this->belongsTo('App\Measure', 'measure_id');
    }

    public function volunteer_skills()
    {
    	return $this->hasMany('App\Volunteer_skill', 'volunteer_id');
    }
}
