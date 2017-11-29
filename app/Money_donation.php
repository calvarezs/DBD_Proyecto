<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Money_donation extends Model
{
    protected  $table = 'money_donations';

    protected $fillable = [
        'total_amount',
		'measure_id'
    ];

    public function measures()
    {
    	return $this->belongsTo('App\Measure', 'measure_id');
    }

    public function expenses()
    {
    	return $this->hasMany('App\Expense', 'money_donation_id');
    }

    public function user_donations()
    {
        return $this->hasMany('App\User_donation', 'money_donation_id');
    }
}
