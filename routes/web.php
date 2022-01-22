<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/jobaffair','testing@welcome');

Route::get('/viewcvform/{email}', 'testingdatabase@retrieve');

Route::get('/viewcvformother/{email}','testingdatabase@retrieveother');

Route::get('/retrievecv','testingdatabase@retrievecv');

Route::get('/retrieve','testingdatabase@retrieve');

Route::get('/developers','testingdatabase@retrievedevelopers');

Route::get('/worker','testingdatabase@retrievedevelopers');

Route::get('/jobpost',function(){
	return view('jobpost');
});

Route::get('/viewposts','testingdatabase@viewpost');

Route::get('/viewpostself/{email}','testingdatabase@viewpostself');

Route::get('viewpostself/viewposthandle/{id}','testingdatabase@viewposthandler');

Route::get('viewpostself/viewposthandle/viewcvform/{email}','testingdatabase@retrieve');

Route::get('viewpostself/viewposthandle/viewcvformother/{email}','testingdatabase@retrieveother');

Route::get('/viewpostsjoin/{email}','testingdatabase@retrieveuserjoinpost');

Route::post('/jobposting','testingdatabase@posting');

Route::get('registration', function(){
	return view('registration');
});


Route::post('/registrationworker','testingdatabase@registrationworker');

Route::post('/registrationagency','testingdatabase@registrationagency');

Route::post('/addwork','testingdatabase@addwork');

Route::post('/addEducation','testingdatabase@addeducation');

Route::get('/viewlogin',function(){
	return view('login');
});

Route::post('/loginverify', 'testingdatabase@loginVerify');

Route::get('/logout','testingdatabase@logout');

Route::get('/testphoto', function() {
	return view('testphoto');
});

Route::post('/testupload', 'testingdatabase@testupload');

Route::get('/cvform', function(){
	return view('cvform');
});

Route::post('/uploadcv','testingdatabase@uploadcv');

Route::get('/postjoin/{id}','testingdatabase@postjoining');

Route::post('/searchengine','testingdatabase@search');

Route::post('/searchworker', 'testingdatabase@searchworker');

Route::get('/admin', 'testingdatabase@adminview');

Route::get('/viewcategory', 'testingdatabase@category');

Route::get('/addadmin/{email}','testingdatabase@addAdmin');

Route::get('/mail/{id}','MailController@basic_email');

Route::get('/viewpolicy', function (){
	return view('policy');
});

Route::post('/addskill','testingdatabase@addSkill');

Route::post('/searchfrommain','testingdatabase@searchmain');

Route::get('/viewabout', function(){
	return view('aboutus');
});