<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    public function teacher(){
    	return $this->belongsTo('App\Teacher');
    }

    public function student(){
    	return $this->hasMany('App\Student');
    }
}
