<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_history extends Model
{
	protected  $table = 'user_histories';
	 
    protected $fillable = [
        'modified_table_id', 
		'action',
		'name_modified_column', 
		'modification_date', 
		'int_old_value', 
		'int_new_value', 
		'string_old_value', 
		'string_new_value', 
		'user_id'
    ];

    public function users()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

}
