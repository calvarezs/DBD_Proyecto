<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentary extends Model
{
    public $table = 'comments';
    
    protected $fillable = [
            'commentary_date', 
			'commentary_time', 
			'commentary', 
			'measure_id', 
			'user_id'
    ];

    public function measures()
    {
        return $this->belongsTo('App\Measure', 'measure_id');
    }
    
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
