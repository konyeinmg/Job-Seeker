<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use Mail;

class MailController extends Controller
{
    public function basic_email($id){
    	$data = new admin;
    	$result = $data->retrievewithid($id);
    	$email = $result->contactemail;
    	$email .= "@gmail.com";

    	$data->updatecontact($id);


    	$data = array('contactname' => $result->contactname,
    					'contactemail' => $email,
    					'workername' => $result->workername,
    					'workeremail' => $result->workeremail);


    	Mail::send(['text' => 'mail'],$data,function($message){
    		$message->to('nyeinchanaung.myeik@gmail.com')->subject('Laravel Basic Testing Mail');
    		//$message->attach('D:\Nyein Chan Aung\phpProject\templateTest\img\translation.png');
    		$message->from('kehkac@gmail.com','Keh');
    	});
    	return redirect('admin');
    }
}
