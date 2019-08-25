<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = [
    	'parent_id',
    	'name',
    	'desc',
    	'slug',
    	'users_id',
    	'groups_id',
    ];

    public function user(){
    	return $this->belongsTo('App\Models\User', 'users_id');
    }

    public function group(){
    	return $this->belongsTo('App\Models\Group', 'groups_id');
    }

    public function devices(){
    	return $this->hasMany('App\Models\Device', 'positions_id');
    }

    public function calendars(){
    	return $this->hasMany('App\Models\Calendar', 'positions_id');
    }
}
