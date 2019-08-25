<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trouble extends Model
{
    
    protected $fillable = [
    	'name',
    	'desc',
    	'devices_id',
    ];

    public function device(){
    	return $this->belongsTo('App\Models\Device', 'devices_id');
    }

    public function tasks(){
    	return $this->hasMany('App\Models\Task', 'troubles_id');
    }
}
