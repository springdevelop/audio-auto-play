<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    
    protected $fillable = [
    	'name',
    	'desc',
    	'time_from',
    	'time_to',
    	'status',
    	'troubles_id',
    	'users_id',
    ];

    public function user(){
    	return $this->belongsTo('App\Models\User', 'users_id');
    }

    public function trouble(){
    	return $this->belongsTo('App\Models\Trouble', 'troubles_id');
    }
}
