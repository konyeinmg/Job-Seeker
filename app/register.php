<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class register extends Model
{
    protected $table = 'registration';

    public function registrationConnect(){
        return $this->belongsTo('App\cvform','email','email');
    }


    public function addWorker($name, $email, $password){
    	$registers = new register;
    	$registers->username = $name;
    	$registers->email = $email;
    	$registers->password = $password;
    	$registers->type = 'worker';
    	$registers->save();
    }

    public function addAgency($name,$email,$password){
        $registers = new register;
        $registers->username = $name;
        $registers->email = $email;
        $registers->password = $password;
        $registers->type = 'agency';
        $registers->save();
    }

    public function loginverify($email, $password){
    	$result = register::where('email',$email)->first();
    	//$request = new Request;
    	if(!empty($result) && Hash::check($password,$result->password)){
    		/*$request->session()->put('auth','yes');
    		$request->session()->put('email',$result->email);
    		$request->session()->put('name',$result->username);
    		$request->session()->put('type',$result->type);*/
    		/*
    		if($result->type == 'worker'){
    		$cv = register::with('registrationConnect')->where('email',$result->email)->first();
    			if(empty($cv)){
    				return "cv";
    			}
    			else{
     				return "main";
    			} 
    		}
    		else{
    			return "main";
    		}*/
    		return $result;
    	}
    	//setcookie('login');
        
    	return null;
    }

    public function retrievepostjoin($email){
        $result = register::where('email',$email)->first();
        return $result;
    }

    public function join($email,$id){
        $result = register::where('email',$email)->update(['postsjoin'=>$id]);

    }
}
