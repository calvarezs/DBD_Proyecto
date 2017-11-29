<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catastrophe extends Model
{
	protected  $table = 'catastrophes';

    protected $fillable = [
        'catastrophe_name', 
		'catastrophe_progress', 
		'type_catastrophe_id'
    ];

    public function type_catastrophe()
    {
    	return $this->belongsTo('App\TypeCatastrophe', 'type_catastrophe_id');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function communes()
    {
        return $this->hasMany('App\CatastropheCommune','catastrophe_id');
    }

    public function measures()
    {
        return $this->hasMany('App\Measure', 'catastrophe_id');
    } 
}
