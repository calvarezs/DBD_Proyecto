<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_article extends Model
{
    protected  $table = 'type_articles';

    protected $fillable = [
        'category_name', 
		'description',
		'collection_center_id'
    ];

    public function collection_centers()
    {
    	return $this->belongsTo('App\Collection_center', 'collection_center_id');
    }

    public function articles()
    {
    	return $this->hasMany('App\Article', 'type_article_id');
    }
}
