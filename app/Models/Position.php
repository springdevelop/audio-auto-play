<?php

namespace App\Models;

use App\Models\Traits\ApiScopes;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use ApiScopes;

    protected $fillable = [
    	'parent_id',
    	'name',
    	'desc',
    	'slug',
    	'users_id',
    	'groups_id',
    	'station_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
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
