<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class workexperience extends Model
{
	protected $table='workexperience';
    protected function cvformConnect(){
    	return $this->hasMany('App\cvform','email','email');
    }

    public function  addWorker($email,$companyname,$hourlyrate,$role,$startdate,$enddate,$message){
    	$work = new workexperience;
    	$work->email=$email;
    	$work->company = $companyname;
    	$work->role = $role;
    	$work->hourlyrate = $hourlyrate;
    	$work->startdate = $startdate;
    	$work->enddate = $enddate;
    	$work->feedback = $message;
    	$work->save();
    }
}
