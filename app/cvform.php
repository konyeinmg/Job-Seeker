<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class cvform extends Model
{
    protected $table='cvform';
   

    public function skillConnect(){
    	return $this->belongsTo('App\skill','email','email');
    }

    public function educationConnect(){
    	return $this->hasMany('App\education','email','email');
    }

    public function workConnect(){
    	return $this->hasMany('App\workexperience','email','email');
    }

    public function registrationConnect(){
        return $this->belongsTo('App\register','email','email');
    }

    public function retrieve($email){

    	$result = cvform::with('skillConnect','educationConnect','workConnect')->where('email',$email)->get();
    	return $result;
    }

    public function retrievefirst($email){
        $result = cvform::where('email',$email)->first();
        return $result;
    }

    public function retrieveforpost($email){
        $result = cvform::whereIn('email',$email)->get();
        return $result;
    }

    public function retrievedeveloper($email){
        $result = cvform::where('email','<>',$email)->with('skillConnect')->get();
        return $result;
    }

    public function retrievefilter($email,$filter,$data){
        if($filter == 'hourlyrate'){
            $result = cvform::where('email','<>',$email)->where($filter,'<=',$data)->get();
        }
        else
        $result = cvform::where('email','<>',$email)->where($filter,'LIKE',"%{$data}%")->get();

        return $result;
    }

    public function  retrievesearch($email,$search){
        $result = cvform::where('email','<>',$email)->where('role','LIKE',"%{$search}%")->get();
        return $result;
    }

    public function uploadcv($name,$gender,$fathername,$email,$phone,$nrc,$hourlyrate,$role,$address,$birthday,$photopath,$description){
        $cv = new cvform;
        $cv->name = $name;
        $cv->gender = $gender;
        $cv->fathername = $fathername;
        $cv->email = $email;
        $cv->phone = $phone;
        $cv->nrc = $nrc;
        $cv->hourlyrate = $hourlyrate;
        $cv->role = $role;
        $cv->address = $address;
        $cv->birthday = $birthday;
        $cv->photopath = $photopath;
        $cv->description = $description;
        $cv->save();
    }

    public function retrievename($workeremail){
        $result = cvform::where('email',$workeremail)->first();
        return $result;
    }

}
