<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class National_register_volunteer extends Model
{
    protected  $table = 'national_register_volunteers';

    protected $fillable = [
        'name', 
		'surname',
		'email', 
		'run'
    ];

    public function measures()
    {
    	return $this->belongsToMany('App\Measure');
    }
}
