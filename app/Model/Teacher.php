<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
    	'teacher_id' , 'name'
    ];

    public function students(){
    	return $this->hasMany('App\Student');
    }


    public function classrooms(){
    	return $this->hasMany('App\ClassRoom');
    }
}
