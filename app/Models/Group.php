<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
    	'name',
    	'desc',
    	'slug',
    	'type',
    ];

    public function positions(){
    	return $this->hasMany('App\Models\Position', 'groups_id');
    }

    public function devices(){
    	return $this->hasMany('App\Models\Device', 'groups_id');
    }
}
