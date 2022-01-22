<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mailBoxLayer extends Controller
{
    //Your mailboxlayer API key
    //Available at https://mailboxlayer.com/product
    private $apiKey = '600bcf802e54666a36a853498cea2be3';
    
    //API endpoint
    //only needs to change if the API changes location
    //to establish a secure connection, change http to https
    private $endPoint = 'http://apilayer.net/api/check';
    
    //holds the error code, if any
    public $errorCode;
    
    //holds the error text, if any
    public $errorText;
    
    //response object
    public $response;
    
    //JSON response from API
    public $responseAPI;
    
    /*
    method:  verifyMail
    usage:   verifyMail(string email[bool smtpCheck=true][,bool formatJSON=false][,string callBack=''][,bool catch_all=false][,bool curl=false]);
    params:  email = the email address to be checked
             smtpCheck = check mx redord and smtp server
             formatJSON = true to use prettified JSON for debugging
             callback = JSONP callback function.
             curl = Use CURL to get response
    
    This method prepares the API request to verify the supplied e-mail address.
    If you do not require the mx or smtp check, setting smtpCheck to false will greatly increse the response time.
    
    returns: false if error returned or true if response returned
    */
    public function verifyMail($email,$smtpCheck=true,$formatJSON=false,$callback='',$catch_all=false,$curl=false){
        
        $request = $this->endPoint.'?access_key='.$this->apiKey.'&email='.$email;
        
        $request .= ( $smtpCheck === false ) ? '&smtp=0' : '';
        
        $request .= ( empty($formatJSON) ) ? '' : '&format=1';
        
        $request .= ( empty($calback) ) ? '' : '&callback='.$callback;
        
        $request .= ( empty($catch_all) ) ? '' : '&catch_all=1';
        
        $this->response = ( empty($curl) ) ? $this->sendRequest($request) : $this->sendRequestCURL($request);
        
        if( !empty($this->response->error->code) ){
            
            $this->errorCode = $this->response->error->code;
            $this->errorText = $this->response->error->info;
            
            return false;
            
        }else{
            
            return true;
            
        }
        
    }
    
    /* 
    method:  sendRequest
    usage:   sendRequest(string request);
    params:  request = full endpoint for API request
    
    This method sends the API request and decodes the JSON response.
    
    returns: object of request results
    */
    public function sendRequest($request){
        
        $this->responseAPI = file_get_contents($request);
        
        $return = json_decode($this->responseAPI);
        
        return $return;
        
    }

    /* 
    method:  sendRequestCURL
    usage:   sendRequestCURL(string request);
    params:  request = full endpoint for API request
    
    This method sends the API request by CURL and decodes the JSON response.
    
    returns: object of request results
    */
    public function sendRequestCURL($request){
        
        $curl = curl_init($request);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        $this->responseAPI = curl_exec($curl);
        curl_close($curl);
        
        $return = json_decode($this->responseAPI);
        
        return $return;
        
    }
}


