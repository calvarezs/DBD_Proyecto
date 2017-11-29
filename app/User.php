<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected  $table = 'users';
	
	 protected $fillable = [
        'name', 
		'surname',
		'email', 
		'password', 
		'phone', 
		'state', 
		'blocked',
		'rol_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    public function rols()
    {
        return $this->belongsTo('App\Rol', 'rol_id');
    }

    public function catastrophes()
    {
        return $this->belongsToMany('App\Catastrophe');
    }

    public function measures()
    {
        return $this->hasMany('App\Measure', 'user_id');
    }

    public function user_histories()
    {
        return $this->hasMany('App\User_history', 'user_id');
    }

    public function user_donations()
    {
        return $this->hasMany('App\User_donation', 'user_id');
    }
}
