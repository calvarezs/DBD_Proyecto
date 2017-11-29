<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class CatastropheCommune extends Model
{
    public $table = 'catastrophe_communes';
    
    protected $fillable = [
            'catastrophe_id',
			'commune_id'
    ];
    
    public function catastrophe()
    {
        return $this->belongsTo('App\Catastrophe', 'catastrophe_id');
    }
    
    public function commune()
    {
        return $this->belongsTo('App\Commune', 'commune_id');
    }
}
