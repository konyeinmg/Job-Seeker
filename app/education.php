<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class education extends Model
{
    protected $table='education';
    public function cvformConnect(){
    	return $this->hasMany('App\cvform','email','email');
    }

    public function addEducation($email,$university,$degree,$academicyear,$description){
    	$edu = new education;
    	$edu->email = $email;
    	$edu->degree = $degree;
    	$edu->university = $university;
    	$edu->academicyear = $academicyear;
    	$edu->description = $description;
    	$edu->save();
    }
}
