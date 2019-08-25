<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    
    protected $fillable = [
    	'name',
    	'desc',
    	'audio',
    	'time_from',
    	'time_to',
    	'users_id',
    	'groups_id',
    ];

    public function position(){
    	return $this->belongsTo('App\Models\Position', 'positions_id');
    }

    public function user(){
    	return $this->hasMany('App\Models\User', 'users_id');
    }
}
