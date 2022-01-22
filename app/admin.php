<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'admin';
    public function add($contactemail,$contactname,$workeremail,$workername){
    	$ad = new admin;
    	$ad->contactname = $contactname;
    	$ad->contactemail = $contactemail;
    	$ad->workername = $workername;
    	$ad->workeremail = $workeremail;
    	$date = date("Y-m-d");
    	$ad->date = $date;
    	$ad->save();
    }

    public function retrieve(){
    	$result = admin::orderBy('id','desc')->get();
    	return $result;
    }

    public function retrievewithid($id){
    	$result = admin::where('id',$id)->first();
    	return $result;
    }

    public function updatecontact($id){
    	$ad = new admin;
    	$ad->where('id',$id)->update(["contact" => '1']);
    }
}
