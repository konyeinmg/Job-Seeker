<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JobSeeker</title>
    <meta charset="utf-8">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset ('profile/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset ('profile/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset ('profile/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset ('profile/css/style.css')}}">
    <link rel="stylesheet" href="{{asset ('css/daterangepicker.css')}}">
<style>
	#work input {
  outline: none;
  margin: 0;
  border: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  width: 100%;
  font-size: 14px;
  font-family: inherit;
}

/* input group 1 */
/* end input group 1 */
#work .input-group {
  position: relative;
  margin-bottom: 32px;
  border-bottom: 1px solid #e5e5e5;
}

#work .input-icon {
  position: absolute;
  font-size: 18px;
  color: #ccc;
  right: 8px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  cursor: pointer;
}

#work .input--style-2 {
  padding: 9px 0;
  color: #666;
  font-size: 16px;
  font-weight: 500;
}

#work .input--style-2::-webkit-input-placeholder {
  /* WebKit, Blink, Edge */
  color: #808080;
}

#work .input--style-2:-moz-placeholder {
  /* Mozilla Firefox 4 to 18 */
  color: #808080;
  opacity: 1;
}

#work .input--style-2::-moz-placeholder {
  /* Mozilla Firefox 19+ */
  color: #808080;
  opacity: 1;
}

#work .input--style-2:-ms-input-placeholder {
  /* Internet Explorer 10-11 */
  color: #808080;
}

#work .input--style-2:-ms-input-placeholder {
  /* Microsoft Edge */
  color: #808080;
}

#work .row {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

#work .row-space {
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -moz-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

#work .col-2 {
  width: -webkit-calc((100% - 60px) / 2);
  width: -moz-calc((100% - 60px) / 2);
  width: calc((100% - 60px) / 2);
}

@media (max-width: 767px) {
 #work .col-2 {
    width: 100%;
  }
}

#work textarea {
  outline: none;
  margin: 0;
  border: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  width: 90%;
  font-size: 16px;
  font-family: inherit;
}

#work textarea {
  resize: vertical;
}

#work .input--style-6,
#work .textarea--style-6 {
  background: transparent;
  line-height: 38px;
  border: 1px solid #cccccc;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  color: #666;
  font-size: 16px;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
  padding: 0 20px;
}

#work .input--style-6::-webkit-input-placeholder,
#work .textarea--style-6::-webkit-input-placeholder {
  /* WebKit, Blink, Edge */
  color: #999;
}

#work .input--style-6:-moz-placeholder,
#work .textarea--style-6:-moz-placeholder {
  /* Mozilla Firefox 4 to 18 */
  color: #999;
  opacity: 1;
}

#work .input--style-6::-moz-placeholder,
#work .textarea--style-6::-moz-placeholder {
  /* Mozilla Firefox 19+ */
  color: #999;
  opacity: 1;
}

#work .input--style-6:-ms-input-placeholder,
#work .textarea--style-6:-ms-input-placeholder {
  /* Internet Explorer 10-11 */
  color: #999;
}

#work .input--style-6:-ms-input-placeholder,
#work .textarea--style-6:-ms-input-placeholder {
  /* Microsoft Edge */
  color: #999;
}

#work .input--style-6:focus,
#work .textarea--style-6:focus {
  -webkit-box-shadow: 0px 1px 5px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 1px 5px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 1px 5px 0px rgba(0, 0, 0, 0.15);
  -webkit-transform: translateY(-3px);
  -moz-transform: translateY(-3px);
  -ms-transform: translateY(-3px);
  -o-transform: translateY(-3px);
  transform: translateY(-3px);
}

#work .textarea--style-6 {
  line-height: 1.2;
  min-height: 60px;
  padding: 10px 20px;
}

#work .daterangepicker {
  border: none;
  -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  display: none;
  border: 1px solid #e0e0e0;
  margin-top: 5px;
}

#work .daterangepicker::after, .daterangepicker::before {
  display: none;
}

#work .daterangepicker thead tr th {
  padding: 10px 0;
}

#work .daterangepicker .table-condensed th select {
  border: 1px solid #ccc;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  font-size: 14px;
  padding: 5px;
  outline: none;
}
#work .daterangepicker td {
  width: 40px;
  height: 30px;
}

#work .btn {
  line-height: 40px;
  display: inline-block;
  padding: 0 25px;
  cursor: pointer;
  color: #fff;
  font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
  font-size: 16px;
  font-weight: 700;
  
}

#work .btn--radius {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}

#work .btn--blue {
  background: #5288DF;
}

#work .btn--blue:hover {
  background: #55B2DA;
}
</style>
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	 
@foreach($data as $d)
	<?php 
		$path = $d->photopath;

	?>
    <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 col-lg-6 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url({{asset ($path)}});">
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-6 pl-md-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<h1 class="big">About</h1>
		            <h2 class="mb-4">{{$d->name}}</h2>
		            <p>{{$d->description}}</p>
		            <ul class="about-info mt-4 px-md-0 px-2">
		            	<li class="d-flex"><span>Name:</span> <span>{{$d->name}}</span></li>
		            	<li class="d-flex"><span>Date of birth:</span> <span>{{$d->birthday}}</span></li>
		            	<li class="d-flex"><span>Father Name :</span> <span>{{$d->fathername}}</span></li>
						<li class="d-flex"><span>Role :</span> <span>{{$d->role}}</span></li>
						<li class="d-flex"><span>Hourly Rate :</span> <span>{{$d->hourlyrate}}</span></li>
		            </ul>
		          </div>
		        </div>
	        
	        </div>
        </div>
    	</div>
    </section>
    <section class="ftco-section ftco-no-pb goto-here" id="resume-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-3">
				    <nav id="navi">
					    <ul>
					      <li><a href="#page-1">Education</a></li>
					      <li><a href="#page-2">Experience</a></li>
					      <li><a href="#page-3">Skills</a></li>
					    </ul>
					  </nav>
					</div>
					<div class="col-md-9">
					  <div id="page-1" class= "page one">
					  	<h2 class="heading">Education</h2>
					  	@if($d->educationConnect != null)
					  	@foreach($d->educationConnect as $dd)
					    <div class="resume-wrap d-flex ftco-animate">
					    	<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">{{$dd->academicyear}}</span>
		    					<h2>{{$dd->degree}}</h2>
		    					<span class="position">{{$dd->university}}</span>
		    					<p>{{$dd->description}}</p>
	    					</div>
	    				</div>
	    				@endforeach
	    				@endif
	    				<div class="resume-wrap d-flex ftco-animate">
                			<p><a href="#" class="btn btn-primary py-3 px-3" style="font-size:15px" data-toggle='modal' data-target="#eduModal">
					    	+Add</span></a></p></div>

	    				
					  </div>

					 <div id="page-2" class= "page two">
					  	<h2 class="heading">Experience</h2>
					  	@if($d->workConnect != null)
					  	@foreach($d->workConnect as $dwork)
					    <div class="resume-wrap d-flex ftco-animate">
					    	<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">{{$dwork->startdate}} to {{$dwork->enddate}}</span><br>
		    					<span class="date">{{$dwork->hourlyrate}} perhour </span>
		    					<h2>{{$dwork->role}}</h2>
		    					<span class="position">{{$dwork->company}}</span>
		    					<p>{{$dwork->feedback}}</p>
		    				</div>
	    				</div>
	    				@endforeach
	    				@endif
	    				<div class="resume-wrap d-flex ftco-animate">
                			<p><a  class="btn btn-primary py-3 px-3" style="font-size:15px" data-toggle='modal' data-target="#successModal">
					    	+Add</span></a></p></div>
					  </div>
					  
					  <div id="page-3" class= "page three">
					  	<h2 class="heading">Skills</h2>
					  	
					  	<div class="row">
					  		@if($d->skillConnect != null)
					  		<?php
								$array = array(
								 'C++' => $d->skillConnect->cdoubleplus,
								 'Java' => $d->skillConnect->java,
								 'Html' => $d->skillConnect->html,
								 'CSS' => $d->skillConnect->css,
								 'JQuery' => $d->skillConnect->jquery,
								 'JavaScript' => $d->skillConnect->javascript,
								 'Bootstrap' => $d->skillConnect->bootstrap,
								 'C#' => $d->skillConnect->csharp,
								 'J2ee' => $d->skillConnect->j2ee,
								 'Python' => $d->skillConnect->python,
								 'Android' => $d->skillConnect->android,
								 'PHP' => $d->skillConnect->php,
								 'C' => $d->skillConnect->c,
								 'MySql' => $d->skillConnect->mysql,
								 'NoSql' => $d->skillConnect->nosql,
								 'Oracle' => $d->skillConnect->oracle,
								 'Bigdata' => $d->skillConnect->bigdata,
								 'AI' => $d->skillConnect->ai,
								 'Networking' => $d->skillConnect->networking,
								 'Accounting' => $d->skillConnect->accounting,
								 'Marketing' => $d->skillConnect->marketing,
								 'Adobephotoshot' => $d->skillConnect->adobephotoshot 
								);


								 ?>
					  		@foreach($array as $key=>$value)
					  		@if($value != 0)
					  		<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>{{$key}}</h3>
										<br>
										<div class="progress">
										 	<div class="progress-bar color-2" role="progressbar" aria-valuenow={{$value}}
										  	aria-valuemin="0" aria-valuemax="100" style="width:{{$value}}%">
										    <span>{{$value}}%</span>
										  	</div>
										</div>
									</div>
								</div>
								@endif
								@endforeach
								@endif
					  	</div>
					  	<div class="resume-wrap d-flex ftco-animate">
                			<p><a href="#" class="btn btn-primary py-3 px-3" style="font-size:15px" data-toggle='modal' data-target="#skillModal">
					    	+Add</span></a></p></div>
					  </div>
					</div>
			  </div>
    	</div>
    </section>
@endforeach  
	 <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		       
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<div id="work">
		        	<h2 class="title" style="text-align: center;">Work Experience</h2>
								<form method="POST" action="/addwork" method="POST">
									@csrf
									<div class="input-group">
										<input class="input--style-2" type="text" placeholder="Company Name" name="companyname">
									</div>
									<div class="row row-space">
										<div class="col">
											<div class="input-group">
											<input class="input--style-2" type="text" placeholder="Hourly Rate" name="hourlyrate">
											</div>
										</div>
										<div class="col">
											<div class="input-group">
											<input class="input--style-2" type="text" placeholder="Role" name="role">
											</div>
										</div>
									</div>
									<div class="row row-space">
										<div class="col">
											<div class="input-group">
												<input class="input--style-2 js-datepicker" type="text" placeholder="Start Date(YY/MM/DD)" name="startdate">
												<i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
											</div>
										</div>
										<div class="col">
											<div class="input-group">
												<input class="input--style-2 js-datepicker" type="text" placeholder="End Date(YY/MM/DD)" name="enddate">
												<i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
											</div>
										</div>
									</div>
									<div class="input-group">
										<textarea class="textarea--style-6" name="message" placeholder="Feedback"></textarea>
									</div>
									<div class="p-t-30 p-l-50">
										<button class="btn btn--radius btn--blue" type="submit"> Add More</button>
									</div>
								</form>
		      </div>
		  </div>
		      
		    </div>
		 </div>
</div>


<div class="modal fade" id="eduModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		       
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<div id="work">
		        	<h2 class="title" style="text-align: center;">Qulification</h2>
								<form action="/addEducation" method="POST">
								@csrf
									<div class="input-group">
										<input class="input--style-2" type="text" placeholder="University or Course" name="university">
									</div>
									
									<div class="row row-space">
										<div class="col">
											<div class="input-group">
											<input class="input--style-2" type="text" placeholder="Degree" name="degree">
											</div>
										</div>
										<div class="col">
											<div class="input-group">
											<input class="input--style-2" type="text" placeholder="Academic Year" name="academicyear">
											</div>
										</div>
									</div>
									<div class="input-group">
										<textarea class="textarea--style-6 input--style-2" name="description" placeholder="Description"></textarea>
									</div>
									<div class="p-t-30 p-l-80">
										<button class="btn btn--radius btn--blue" type="submit">Add More</button>
									</div>
								</form>
		      </div>
		  </div>
		      
		    </div>
		 </div>
</div>


<div class="modal fade" id="skillModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		       
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          
		        </button>
		      </div>
		      <div class="modal-body">
		      	<span class="close">&times;</span>
		<h1 style="text-align:center;color:#142dad;">Add Your Skill</h1>
		<hr style="color:#4C9AFF;"></hr>
		 
			<div id="text">
				<br>
				<form action="/addskill" method="post">
					@csrf
				<input type='text'name='skill' placeholder='Enter your skills' class="col-9 col-s-9">
				
				
				<select name='percent'>
					<option value="10">10%</option>
					<option value="20">20%</option>
					<option value="30">30%</option>
					<option value="40">40%</option>
					<option value="50">50%</option>
					<option value="60">60%</option>
					<option value="70">70%</option>
					<option value="80">80%</option>
					<option value="90">90%</option>
					<option value="100">100%</option>
				</select>
				
			</div><br>
			<div class="p-t-30 p-l-80">
										<button  class="btn btn--radius btn--blue" type="submit">Add More</button>
									</div>
								</form>
</div>
		 </div>
</div>


  </body>
  <script>
  </script>
   <script src="{{asset ('profile/js/jquery.min.js')}}"></script>
  <script src="{{asset ('profile/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset ('profile/js/bootstrap.min.js')}}"></script>
  <script src="{{asset ('profile/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset ('profile/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset ('profile/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset ('profile/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset ('profile/js/aos.js')}}"></script>
  <script src="{{asset ('profile/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset ('profile/js/scrollax.min.js')}}"></script>
  <script src="{{asset ('profile/js/main.js')}}"></script>
  <script src="{{asset ('js/daterangepicker.js')}}"></script>
  <script src="{{asset ('js/moment.min.js')}}"></script>



</html>