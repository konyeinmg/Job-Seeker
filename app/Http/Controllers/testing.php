<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testing extends Controller
{
    public function welcome(Request $request){
    	return view('welcome');
    }

    public function profile(Request $request){
    	return view('profile');
    }
}
