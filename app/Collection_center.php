<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection_center extends Model
{
    protected  $table = 'collection_centers';

    protected $fillable = [
        'name',
        'status_report', 
		'address',
		'measure_id'
    ];

    public function measures()
    {
    	return $this->belongsTo('App\Measure', 'measure_id');
    }

    public function type_articles()
    {
    	return $this->hasMany('App\Type_article', 'collection_center_id');
    }
}
