<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Redirect;
use App\cvform;
use App\post;
use App\skill;
use App\registration;
use Illuminate\Support\Facades\Hash;
use App\register;
use App\workexperience;
use App\education;
use App\admin;
use DB;
class testingdatabase extends Controller
{
    public function retrievecv(Request $request){
    	$cv = new cvform;
    	$result = $cv->retrieve();
    	/*echo "<pre>";
    	var_dump($result);
    	echo "<pre>";*/
    	return view('testdb')->with('data',$result);
    }

    public function retrieve($email){
    	$cv = new cvform;
    	$result = $cv->retrieve($email);
        return view('profile')->with('data',$result);

        /*echo "<pre>";
        var_dump($result);
        echo "<pre>";*/
    }

    public function retrieveuserjoinpost($email){
        $reg = new register;
        $result = $reg->retrievepostjoin($email);
        $string = $result->postsjoin;
        $arr = explode(",",$string);
        array_pop($arr);
        $posts = new post;
        $result = $posts->retrieveforuser($arr);
        /*echo "<pre>";
        var_dump($result);
        echo "<pre>";*/
        return view('viewpostuser')->with('data',$result);
    }

    public function retrieveother($email){
        $cv = new cvform;
        $result = $cv->retrieve($email);
        return view('profilefromother')->with('data',$result);
    }

    public function retrievedevelopers(Request $request){
        $cv = new cvform;
        $email = $request->session()->get('email');
        $result = $cv->retrievedeveloper($email);
        return view('workers')->with('dating',$result);
    }

    public function posting(Request $request){
        $email = $request->session()->get('email');
        $name = $request->session()->get('name');
        $position = $request->input('position');
        $degree = $request->input('degree');
        $sex = $request->input('gender');
        $jobtype = $request->input('jobtype');
        $hourlyrate = $request->input('hourlyrate');
        $description = $request->input('description');
        $relationship = $request->input('relationship');
        $deadline = $request->input('deadline');

        $posts = new post;
         $posts->addPost($email,$name,$position,$degree,$sex,$jobtype, $hourlyrate, $description,$relationship,$deadline);

         return redirect('viewposts');
    }

    public function viewpost(Request $request){
        $email = $request->session()->get('email');
        $posts = new post;
        $request->session()->put('searching','');
        $request->session()->put('filter','');
        $reg = new register;
        $result = $reg->retrievepostjoin($email);
        $joining = explode(",", $result->postsjoin);
        $a = array_pop($joining);
        $join = array_reverse($joining);
       
        $result = $posts->retrieve();
           
        
        return view('viewpost')->with(['data'=>$result, 'join' => $join]);
    }

    public function viewpostself($email){
        $posts = new post;
        $result = $posts->retrievefirst($email);

        return view('viewpostself')->with('data',$result);

    }

    public function viewposthandler($id){
        echo "blah";
        $posts = new post;
        $result = $posts->retrievePost($id);
        $contacting = $result->contacting;
        $contactarray = explode(' ',$contacting);
        array_pop($contactarray);

        $cv = new cvform;
        $res = $cv->retrieveforpost($contactarray);
       /* echo "<pre>";
        var_dump($result);
        echo "<pre>";
        echo "<br>";
        echo "blah";
        echo "<pre>";
        var_dump($res);
        echo "<pre>";*/
        return view('viewhandler')->with(['d' => $result, 'joiner' => $res]);
    }


    public function registrationworker(Request $request){

        $name = $request->input('wname');
        $email = $request->input('wemail');
        $email = explode("@",$email,2);
        $password =Hash::make($request->input('wpassword'));
        //echo $email[0];
        
        $sk = new skill;
        $sk->add($email[0]);
        
        $registers = new register;
        $registers->addWorker($name,$email[0],$password);

        return redirect('viewlogin');
        
    }

    public function registrationagency(Request $request){
        $name = $request->input('aname');
        $email = $request->input('aemail');
        $email = explode("@",$email,2);
        $password = Hash::make($request->input('apassword'));

        $registers = new register;
        $registers->addAgency($name,$email[0],$password);

        return redirect('viewlogin');
    }

    public function addwork(Request $request){
        $companyname = $request->input('companyname');
        $hourlyrate = $request->input('hourlyrate');
        $role = $request->input('role');
        $startdate = $request->input('startdate');
        $enddate = $request->input('enddate');
        $message = $request->input('message');
        $email = $request->session()->get('email');
        $work = new workexperience;
        $work->addWorker($email,$companyname,$hourlyrate,$role,$startdate,$enddate,$message);

        $cv = new cvform;
        $result = $cv->retrieve($email);
        
        //$url = route('viewcvform', ['email' => $email]);
        return redirect("viewcvform/{$email}");
    }

    public function addeducation(Request $request){
        $university = $request->input('university');
        $degree = $request->input('degree');
        $academicyear = $request->input('academicyear');
        $description = $request->input('description');
        $email = $request->session()->get('email');
        $edu = new education;
        $edu->addEducation($email,$university,$degree,$academicyear,$description);

        $cv = new cvform;
        $result = $cv->retrieve($email);
        return redirect("viewcvform/{$email}");
    }


    public function testupload(Request $request){
        $target_dir = "D:/Nyein Chan Aung/phpProject/";
        $target = "phpProject/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            $path = $target.basename($_FILES["fileToUpload"]["name"]);
            echo "<br>";
            echo $path;
            echo "<br>";
            echo $target_file;
            echo "<br>";
            echo $request->input('name');
    }

    public function uploadcv(Request $request){
        $target_dir = "C:/xampp/testproject/public/userimages/";
        $photopath = "userimages/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                   // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                    $photopath = $photopath.basename( $_FILES["fileToUpload"]["name"]);
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }


            $day = $request->input('birthday');
            $arr = explode("/",$day);
            $birthday = $arr[2].'/';
            $birthday .= $arr[1].'/';
            $birthday .= $arr[0];

            $name = $request->input('name');
            $gender = $request->input('gender');
            $fathername = $request->input('fathername');
            $email = $request->input('email');
             $email = explode("@",$email,2);
            $phone = $request->input('phone');
            $nrc = $request->input('nrc');
            $hourlyrate = $request->input('hourlyrate');
            $role = $request->input('role');
            $address = $request->input('address');
            $description = $request->input('message');

            $cv = new cvform;
            $cv->uploadcv($name,$gender,$fathername,$email[0],$phone,$nrc,$hourlyrate,$role,$address,$birthday,$photopath,$description);
            /*echo $birthday;
            echo "<br>";
            echo $email[0];
            echo "<br>";
            echo $photopath;*/
           // $result = $cv->retrieve($email[0]);
            //return view('profile')->with('data',$result);
            return redirect('/jobaffair');
    }

    public function loginVerify(Request $request){
       //$request->session()->forget('login');
        //$request->session()->flush();
        
        $email = $request->input('email');
        $email = explode("@",$email,2);
        $password = $request->input('password');

        $reg = new register;
        $result = $reg->loginverify($email[0],$password);

        $cv = new cvform;
        $cvhas = $cv->retrievefirst($email[0]);
       //echo "<pre>";
       //var_dump($cvhas);
       //echo "<pre>";
        if(empty($result)){
            $request->session()->put('login','fail');
           //echo $request->session()->get('login');
            return redirect('/viewlogin');
        }
        else if($result->type == 'worker'){
            if($cvhas == null){
            $request->session()->put('login','success');
            $request->session()->put('auth','yes');
            $request->session()->put('email',$result->email);
            $request->session()->put('name',$result->username);
            $request->session()->put('type',$result->type);
            return redirect('/cvform');
             }
             else{
                 $request->session()->put('login','success');
                    $request->session()->put('auth','yes');
                    $request->session()->put('email',$result->email);
                    $request->session()->put('name',$result->username);
                    $request->session()->put('type',$result->type);
                    return redirect('/jobaffair');
                }
        }

        else{ 
            $request->session()->put('login','success');
            $request->session()->put('auth','yes');
            $request->session()->put('email',$result->email);
            $request->session()->put('name',$result->username);
            $request->session()->put('type',$result->type);
            return redirect('/jobaffair');
        }
    }

    public function logout(Request $request){
        $request->session()->forget('name');
        $request->session()->flush();

        $request->session()->forget('email');
        $request->session()->flush();

        $request->session()->forget('type');
        $request->session()->flush();

        return redirect('/jobaffair');
    }

    public function postjoining($id){
        $email = request()->session()->get('email');
        
        $posts = new post;
        $postcolumn = $posts->retrievePost($id);
        $contact = $postcolumn->contacting;
        
        $count = $postcolumn->contactcount;
        $count += 1;
        $contact .= $email." ";
        
        $posts->addContact($id,$contact,$count);
        
        $reg = new register;
        $regcol = $reg->retrievepostjoin($email);
        $bb = $regcol->postsjoin;
        
        $bb .= $id.",";
        
        $reg->join($email,$bb);
        

        /*echo "<pre>";
        var_dump($joining);
        echo "<pre>";*/
        return redirect('/viewposts');
    }

    public function search(Request $request){
        $email = $request->session()->get('email');
        $filter = $request->input('filter');
        $data = $request->input('search');
        $request->session()->put('searching',$data);
        $request->session()->put('filter',$filter);
        $posts = new post;
        $result = $posts->retrieveSearch($filter, $data);

        /*echo "<pre>";
        var_dump($result);
        echo  "<pre>";*/
        if($request->session()->get('type') == 'agency'){
        return view('viewpost')->with('data',$result);}

        else {
            $reg = new register;
            $resultt = $reg->retrievepostjoin($email);
            $joining = explode(",", $resultt->postsjoin);
            $a = array_pop($joining);
            return view('viewpost')->with(['data' => $result, 'join' => $joining]);
        }
    }

    public function category(Request $request){
        return view('categories');
    }

    public function searchworker(Request $request){
        $email = $request->session()->get('email');
        $filter = $request->input('filter');
        $data = $request->input('search');
        $request->session()->put('searching',$data);
        $cv = new cvform;
        $result = $cv->retrievefilter($email,$filter,$data);
        /*echo $filter;
        echo "<br>";
        echo $data;
        echo "<pre>";
        var_dump($result);
        echo "<pre>";*/
        return view('workers')->with(['dating' => $result]);
    }

    public function searchmain(Request $request){
        $email = $request->session()->get('email');
         $data = $request->input('search');
         $cv = new cvform;
         $result = $cv->retrievesearch($email,$data);
         return view('workers')->with(['dating' => $result]);
    }

    public function addAdmin($email){
        $contactemail = request()->session()->get('email');
        $contactname = request()->session()->get('name');
        $workeremail = $email;

        $cv = new cvform();
        $namedb = $cv->retrievename($workeremail);
        $workername = $namedb->name;

        $ad = new admin;
        $ad->add($contactemail,$contactname,$workeremail,$workername);

        return redirect ("viewpostself/viewposthandle/viewcvformother/{$email}");

    }

    public function adminview(Request $request){
        $ad = new admin;
        $result = $ad->retrieve();

        return view('adminview')->with('data',$result);
    }


    public function addSkill(Request $request){
        $email = $request->session()->get('email');
        $skill = $request->input('skill');
        $percent = $request->input('percent');
        $sk = new skill;
        $sk->updateskill($email,$skill,$percent);

        return redirect("viewcvform/{$email}");
    }
}
