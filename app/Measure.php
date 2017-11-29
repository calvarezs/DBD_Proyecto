<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Measure extends Model
{
    protected  $table = 'measures';

    protected $fillable = [
        'start_date', 
        'finish_date',
        'status_measure', 
		'progress_percent',
		'user_id', 
		'catastrophe_id'
    ];

    public function users()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function collection_centers()
    {
    	return $this->hasMany('App\Collection_center', 'measure_id');
    }

    public function volunteers()
    {
    	return $this->hasMany('App\Volunteer', 'measure_id');
    }

    public function event_benefits()
    {
    	return $this->hasMany('App\Event_benefit', 'measure_id');
    }

    public function money_donations()
    {
    	return $this->hasMany('App\Money_donation', 'measure_id');
    }

    public function national_register_volunteers()
    {
        return $this->belongsToMany('App\National_register_volunteer');
    }

    public function catastrophes()
    {
        return $this->belongsTo('App\Catastrophe', 'catastrophe_id');
    }
}
