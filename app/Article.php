<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected  $table = 'articles';

    protected $fillable = [
        'article_name', 
		'description',
		'amount',
		'type_article_id'
    ];

    public function type_articles()
    {
    	return $this->belongsTo('App\Type_article', 'type_article_id');
    }
}
