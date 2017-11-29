<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatastropheUser extends Model
{
    protected  $table = 'catastrophe_users';

    protected $fillable = [
		'user_id',
		'catastrophe_id'
    ]; 
	
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function communes()
    {
        return $this->belongsToMany('App\Catastrophe');
    }
}
