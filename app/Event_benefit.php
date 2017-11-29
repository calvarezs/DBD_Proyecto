<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event_benefit extends Model
{
	protected  $table = 'event_benefits';
	 
    protected $fillable = [
        'address',
		'event_description',
		'measure_id'
    ];

    public function measures()
    {
    	return $this->belongsTo('App\Measure', 'measure_id');
    }

    public function event_activities()
    {
    	return $this->hasMany('App\Event_activity', 'event_benefit_id');
    }
}
