<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    protected $table='skill';
    public function cvformConnect(){
    	return $this->belongsTo('App\cvform','email','email');
    }

    public function add($email){
    	$sk = new skill;
    	$sk->email = $email;
    	/*$sk->cdoubleplus = '0';
    	$sk->java = '0';
    	$sk->html  = '0';
    	$sk->css  = '0';
    	$sk->jquery = '0';
    	$sk->javascript = '0';
    	$sk->bootstrap = '0';
    	$sk->csharp = '0';
    	$sk->j2ee = '0';
    	$sk->python = '0';
    	$sk->android = '0';
    	$sk->php = '0';
    	$sk->c  = '0';
    	$sk->mysql  = '0';
    	$sk->nosql  = '0';
    	$sk->oracle = '0';
    	$sk->bigdata = '0';
    	$sk->ai  = '0';
    	$sk->networking = '0';
    	$sk->accounting = '0';
    	$sk->marketing = '0';
    	$sk->adobephotoshot = '0';*/
    	$sk->save();
    }


    public function updateskill($email,$skill,$percent){
    	$sk = new skill;

    	$sk->where('email',$email)->update([$skill => $percent]);
    }
}
