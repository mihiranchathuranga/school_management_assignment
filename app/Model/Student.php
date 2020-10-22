<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{   
    protected  $fillable = [

           'first_name','last_name','gender','joined_year'
           ];

    public function teachers(){
       return $this->belongsTo('App\Teacher');
    }

    public function classrooms(){
    	return $this->belongsTo('App\ClassRoom');
    }
}
