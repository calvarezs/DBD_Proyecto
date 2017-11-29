<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeasureRegisterNationalVolunteers extends Model
{
    protected  $table = 'measure_volunteers';

    protected $fillable = [
		'measure_id', 
		'national_register_volunteer_id'
    ]; 
	
    public function users()
    {
        return $this->hasMany('App\Measure');
    }

    public function communes()
    {
        return $this->belongsToMany('App\National_register_volunteer');
    }
}
