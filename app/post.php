<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class post extends Model
{
    protected $table = 'post';

    public function addPost($email,$name,$position, $degree, $sex, $jobtype, $hourlyrate, $description,$relationship,$deadline){
    	$post = new post;
    	$post->position = $position;
    	$post->degree = $degree;
    	$post->sex = $sex;
    	$post->type = $jobtype;
    	$post->hourlyrate = $hourlyrate;
    	$post->description = $description;
        $post->relationship = $relationship;
        $post->agencyemail = $email;
        $post->agencyname = $name;
    	$date = date("Y-m-d");
    	$post->date = $date;
        $post->deadline = $deadline;
    	$post->save();
    }

    public function retrieve(){
    	$result = post::orderBy('id','desc')->get();
    	return $result;
    }

    public function retrievefirst($email){
        $result = post::where('agencyemail',$email)->orderBy('id','desc')->get();
        return $result;
    }

    public function retrievePost($id){
        $result = post::where('id',$id)->first();
        return $result;
    }

    public function addContact($id,$contact,$count){
        $posts = new post;
        
        $posts->where('id',$id)->update(['contacting' => $contact,'contactcount' => $count]);
    }

    public function retrieveforuser($id){
        $posts = new post;

        $result = $posts->whereIn('id',$id)->get();
        return $result;
    }

    public function retrieveSearch($column, $data){
        $posts = new post;

        if($column == 'hourlyrate'){
            $result = $posts->where($column,"<=",$data)->get();
        }
        else
        $result = $posts->where($column,'LIKE',"%{$data}%")->get();

        return $result;
    }
}
