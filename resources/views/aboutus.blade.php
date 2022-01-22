<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>NewBiz Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="css/aboutbootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="aboutus/css/jcarousel.min.css" rel="stylesheet">
  
  
  
  
  
    <link rel="stylesheet" href="aboutus/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="aboutus/css/animate.css">
    <link rel="stylesheet" href="aboutus/css/owl.carousel.min.css">
    <link rel="stylesheet" href="aboutus/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="aboutus/css/magnific-popup.css">
    <link rel="stylesheet" href="aboutus/css/aos.css">
    <link rel="stylesheet" href="aboutus/css/ionicons.min.css">
    <link rel="stylesheet" href="aboutus/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="aboutus/css/jquery.timepicker.css">
    <link rel="stylesheet" href="aboutus/css/flaticon.css">
    <link rel="stylesheet" href="aboutus/css/icomoon.css">
    <link rel="stylesheet" href="aboutus/css/aboutstyle.css">
  <!--<link href="css/style1.css" rel="stylesheet" />-->
  <!-- Fav and touch icons -->
  <style>
.headerdiv {
  background: #fff;
  color: #444;
  font-family: "Open Sans", sans-serif;
}

.headerdiv a {
  color: #007bff;
  transition: 0.5s;
}

.headerdiv a:hover,
.headerdiv a:active,
.headerdiv a:focus {
  color: #0b6bd3;
  outline: none;
  text-decoration: none;
}

.headerdiv p {
  padding: 0;
  margin: 0 0 30px 0;
}

.headerdiv h1,h2,h3,h4,h5,h6 {
  font-family: "Montserrat", sans-serif;
  font-weight: 400;
  margin: 0 0 20px 0;
  padding: 0;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/

#header {
  height: 80px;
  transition: all 0.5s;
  z-index: 997;
  transition: all 0.5s;
  padding: 20px 0;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.3);
}

#header.header-scrolled,
#header.header-pages {
  height: 60px;
  padding: 10px 0;
}

#header .logo h1 {
  font-size: 36px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 400;
  letter-spacing: 3px;
  text-transform: uppercase;
}

#header .logo h1 a,
#header .logo h1 a:hover {
  color: #00366f;
  text-decoration: none;
}

#header .logo img {
  padding: 0;
  margin: 7px 0;
  max-height: 26px;
}

.main-pages {
  margin-top: 60px;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/

/* Desktop Navigation */

.main-nav {
  /* Drop Down */
  /* Deep Drop Down */
}

.main-nav,
.main-nav * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.main-nav > ul > li {
  position: relative;
  white-space: nowrap;
  float: left;
}

.main-nav a {
  display: block;
  position: relative;
  color: #004289;
  padding: 10px 15px;
  transition: 0.3s;
  font-size: 14px;
  font-family: "Montserrat", sans-serif;
  font-weight: 500;
}

.main-nav button {
	display: block;
  position: relative;
  color: #004289;
  padding: 10px 15px;
  transition: 0.3s;
  font-size: 14px;
  font-family: "Montserrat", sans-serif;
  font-weight: 500;
}

.main-nav a:hover,
.main-nav .active > a,
.main-nav li:hover > a {
  color: #007bff;
  text-decoration: none;
}

.main-nav .drop-down ul {
  display: block;
  position: absolute;
  left: 0;
  top: calc(100% + 30px);
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  padding: 10px 0;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: ease all 0.3s;
}

.main-nav .drop-down:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.main-nav .drop-down li {
  min-width: 180px;
  position: relative;
}

.main-nav .drop-down ul a {
  padding: 10px 20px;
  font-size: 13px;
  color: #004289;
}

.main-nav .drop-down ul a:hover,
.main-nav .drop-down ul .active > a,
.main-nav .drop-down ul li:hover > a {
  color: #007bff;
}

.main-nav .drop-down > a:after {
  content: "\f107";
  font-family: FontAwesome;
  padding-left: 10px;
}

.main-nav .drop-down .drop-down ul {
  top: 0;
  left: calc(100% - 30px);
}

.main-nav .drop-down .drop-down:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
}

.main-nav .drop-down .drop-down > a {
  padding-right: 35px;
}

.main-nav .drop-down .drop-down > a:after {
  content: "\f105";
  position: absolute;
  right: 15px;
}

/* Mobile Navigation */

.mobile-nav {
  position: fixed;
  top: 0;
  bottom: 0;
  z-index: 9999;
  overflow-y: auto;
  left: -260px;
  width: 260px;
  padding-top: 18px;
  background: rgba(19, 39, 57, 0.8);
  transition: 0.4s;
}

.mobile-nav * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.mobile-nav a {
  display: block;
  position: relative;
  color: #fff;
  padding: 10px 20px;
  font-weight: 500;
}

.mobile-nav button {
  display: block;
  position: relative;
  color: #fff;
  padding: 10px 20px;
  font-weight: 500;
}

.mobile-nav a:hover,
.mobile-nav .active > a,
.mobile-nav li:hover > a {
  color: #74b5fc;
  text-decoration: none;
}

.mobile-nav .drop-down > a:after {
  content: "\f078";
  font-family: FontAwesome;
  padding-left: 10px;
  position: absolute;
  right: 15px;
}

.mobile-nav .active.drop-down > a:after {
  content: "\f077";
}

.mobile-nav .drop-down > a {
  padding-right: 35px;
}

.mobile-nav .drop-down ul {
  display: none;
  overflow: hidden;
}

.mobile-nav .drop-down li {
  padding-left: 20px;
}

.mobile-nav-toggle {
  position: fixed;
  right: 0;
  top: 0;
  z-index: 9998;
  border: 0;
  background: none;
  font-size: 24px;
  transition: all 0.4s;
  outline: none !important;
  line-height: 1;
  cursor: pointer;
  text-align: right;
}

.mobile-nav-toggle i {
  margin: 18px 18px 0 0;
  color: #004289;
}

.mobile-nav-overly {
  width: 100%;
  height: 100%;
  z-index: 9997;
  top: 0;
  left: 0;
  position: fixed;
  background: rgba(19, 39, 57, 0.8);
  overflow: hidden;
  display: none;
}

.mobile-nav-active {
  overflow: hidden;
}

.mobile-nav-active .mobile-nav {
  left: 0;
}

.mobile-nav-active .mobile-nav-toggle i {
  color: #fff;
}
 </style>
</head>

<body>
<div class="headerdiv">
<header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="/jobaffair">Home</a></li>
          <li><a href="/viewcategory">Categories</a></li>
          @if(Session::get('auth') != "yes")
          <li><a href="/viewlogin">Posts</a></li>
          @else
          <li><a href="/viewposts">Posts</a></li>
          @endif
          <li><a href="/viewpolicy">Policy</a></li>
          <li><a href="/viewabout">About Us</a></li>
          <li><a href="#contact">Contact Us</a></li>
          @if(Session::get('auth') != "yes")
          <li><a type="button" class="btn btn-outline-primary" href="/viewlogin">Sign In</a></li>
          @else
          @if(Session::get('type') == "worker")
          <li class="drop-down"><a href="/viewcvform/{{Session::get('email')}}"><i class="fa fa-fw fa-user"></i>{{Session::get('name')}}</a>
            <ul>
              <li><a href="/viewcvform/{{Session::get('email')}}">Profile</a></li>
              <li><a href="/viewpostsjoin/{{Session::get('email')}}">Posts Joined</a></li>
              <li><a href="/logout">Log Out</a></li>
            </ul>
          </li>
          @else
          <li class="drop-down"><a href="/viewpostself/{{Session::get('email')}}"><i class="fa fa-fw fa-user"></i>{{Session::get('name')}}</a>
            <ul>
              <li><a href="/viewpostself/{{Session::get('email')}}">Profile</a></li>
              <li><a href="/jobpost">Post</a></li>
              <li><a href="/logout">Log Out</a></li>
            </ul>
          </li>
          @endif
          @endif
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
  </div>
  
   
    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row d-md-flex">
	    		<div class="col-md-6 ftco-animate img about-image" style="background-image: url(img/aboutt.jpg);">
	    		</div>
	    		<div class="col-md-6 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">What we do</a>

		              <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">Our mission</a>

		              <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Our goal</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
		              	<div>
			                <h2 class="mb-4">What we do ......</h2>
			              	<p>           Our products and services are JOB seekers Journal, JOB seekers.com and
								JOB seekers Recruitment Service respectively. We, JOB seekers,  lead integration 
								of print and online job troll, bringing together  career  opportunities from all 
								around the companies and industries in the country. JOB seekers can obtain a wide
								array of job seeking and employment development services, such as Journal,Website, 
								Social Media and Recruitment Service with enhanced services to empower our community.</pre> </p>
				            </div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
		                <div>
			                <h2 class="mb-4">Mission</h2>
			              	<p>
							Our Web's aim is to connect the Germany’s innovative Startup companies to the top talent
							and the top talent out there, in pursuit of their dream job to the right Startup. A platform
							with hassle-free and single step process to match the requirements of both job giver and 
							job seeker. Join us and match your skills. The possibilities are endless.Our goal is to make
							job offering and searching an easy, fast and efficient procedure for both startups and job 
							seekers. We would like to assist in matching .
							</p>
			                
				            </div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
		                <div>
			                <h2 class="mb-4">Our Goal</h2>
			              	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, 
							there live the blind texts. Separated they live in Bookmarksgrove right at the coast of 
							the Semantics, a large language ocean. One mistake people frequently make is to wait to 
							revise their resume until they find a job that interests them. That prevents them from 
							applying for the position right away. And by the time they have an updated version ready 
							to submit, it may be too late. So, don’t delay</p>
							</div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/js/jquery.jcarousel.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <!-- Template Custom JavaScript File -->
  <script src="js/profile.js"></script>
  
  
  
  
    <script src="aboutus/js/jquery.min.js"></script>
  <script src="aboutus/js/popper.min.js"></script>
  <script src="aboutus/js/bootstrap.min.js"></script>
  <script src="aboutus/js/jquery.easing.1.3.js"></script>
  <script src="aboutus/js/jquery.waypoints.min.js"></script>
  <script src="aboutus/js/jquery.stellar.min.js"></script>
  <script src="aboutus/js/owl.carousel.min.js"></script>
  <script src="aboutus/js/jquery.magnific-popup.min.js"></script>
  <script src="aboutus/js/aos.js"></script>
  <script src="aboutus/js/jquery.animateNumber.min.js"></script>
  <script src="aboutus/js/bootstrap-datepicker.js"></script>
  <script src="aboutus/js/jquery.timepicker.min.js"></script>
  <script src="aboutus/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>
</html>