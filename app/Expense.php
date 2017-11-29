<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected  $table = 'expenses';
 
	protected $fillable = [
        'name_expense', 
		'description_expense',
		'amount', 
		'total_amount',
		'money_donation_id'
    ];

    public function money_donations()
    {
    	return $this->belongsTo('App\Money_donation', 'money_donation_id');
    }
}
