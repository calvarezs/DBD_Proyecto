<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event_activity extends Model
{
    protected  $table = 'event_activities';

    protected $fillable = [
        'name_activity',
		'description_activity',
		'event_benefit_id'
    ];

    public function event_benefits()
    {
    	return $this->belongsTo('App\Event_benefit', 'event_benefit_id');
    }
}
