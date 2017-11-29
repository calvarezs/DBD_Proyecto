<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_donation extends Model
{
    protected  $table = 'user_donations';

    protected $fillable = [
        'amount', 
		'bank_account',
		'donation_date', 
		'user_id', 
		'money_donation_id'
    ];

    public function users()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function money_donations()
    {
    	return $this->belongsTo('App\Money_donation', 'money_donation_id');
    }
}
