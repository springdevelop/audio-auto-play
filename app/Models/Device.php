<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = [
    	'name',
    	'desc',
    	'slug',
    	'status',
    	'positions_id',
    	'users_id',
    	'groups_id',
    ];

    public function position(){
    	return $this->belongsTo('App\Models\Position', 'positions_id');
    }

    public function user(){
    	return $this->belongsTo('App\Models\User', 'users_id');
    }

    public function group(){
    	return $this->belongsTo('App\Models\Group', 'groups_id');
    }

    public function troubles(){
    	return $this->hasMany('App\Models\Trouble', 'devices_id');
    }
}