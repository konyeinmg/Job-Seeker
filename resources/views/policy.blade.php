<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>JobSeeker</title>
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="css/jcarousel.min.css" rel="stylesheet">
   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="policycss/bootstrap.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="policycss/swiper.min.css">
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

body {
    color: #404040;
    font-size: 16px;
    line-height: 1.8;
    font-family: 'Raleway', sans-serif;
}

img {
    vertical-align: baseline;
}
/*--------------------------------------------------------------
# policy Section
--------------------------------------------------------------*/
.hero-slider {
    max-height: 950px;
}

.hero-content-wrap {
    min-height: 700px;
    position: relative;
    color: #fff;

    background-size: cover;
    background-position: center;
}

.hero-content-overlay {
    top: 0;
    left: 0;
    background: rgba(0,0,0,0);
}

.hero-content-overlay h1 {
    margin: 0;
    font-size: 60px;
    font-weight: 600;
    line-height: 1.2;
    color: #404040;
}

.hero-content-overlay p {
    font-size: 14px;
    font-weight: 500;
    line-height: 2;
    color: #828282;
}

.hero-slider .pagination-wrap {
    top: 50%;
    left: 0;
    z-index: 99;
    width: 120px;
    margin-top: -60px;
}

.hero-slider .swiper-pagination-bullet {
    width: 120px;
    height: 28px;
    margin-bottom: 12px;
    border-radius: 0;
    border-bottom: 2px solid transparent;
    font-size: 16px;
    font-weight: 600;
    color: #aaaaaa;
    background: transparent;
    opacity: 1;
    text-align: right;
}

.hero-slider .swiper-pagination-bullet-active {
    color: #18a3eb;
    border-color: #18a3eb;
}

@media screen and (max-width: 1400px) {
    .hero-slider .swiper-pagination-bullet {
        width: 60px;
    }
}

@media screen and (max-width: 576px) {
    .hero-slider .pagination-wrap {
        top: auto;
        bottom: 60px;
        margin-top: 0;
    }

    .hero-slider .swiper-pagination-bullet {
        width: 30px;
        margin-left: 15px;
    }
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
        <a href="#intro" class="scrollto"><img src="img/unnamed.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li><a href="/jobaffair">Home</a></li>
          <li><a href="/viewcategory">Categories</a></li>
          @if(Session::get('auth') != "yes")
          <li><a href="/viewlogin">Posts</a></li>
          @else
          <li><a href="/viewposts">Posts</a></li>
          @endif
          <li class="active"><a href="/viewpolicy">Policy</a></li>
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
  
  <div class="swiper-container hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-content-wrap" style="background-image: url('img/goodpolicy.jpg')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1>Collecting <br>Personal Information</h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <p> We collect the following additional information from our Authorized Customers: the names, addresses, phone numbers and email addresses of Authorized Customers, the nature and size of the business, and the nature and size of the advertising inventory that the Authorized Customer intends to purchase or sell.</p>
                                    </div><!-- .entry-content -->

                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
                </div><!-- .hero-content-wrap -->

                <div class="swiper-slide hero-content-wrap" style="background-image: url('goodpolicy.jpg')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1>Sharing Info <br>With Whom?</h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <p>Personally Identifiable Information about Authorized Customers may be shared with other Authorized Customers who wish to evaluate potential transactions with other Authorized Customers. We may share aggregated information about our Visitors, including the demographics of our Visitors and Authorized Customers, with our affiliated agencies and third party vendors.</p>
                                    </div><!-- .entry-content -->

                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
                </div><!-- .hero-content-wrap -->

                <div class="swiper-slide hero-content-wrap" style="background-image: url('goodpolicy.jpg')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1>How We Keep <br>Information Secure</h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <p>All of our employees are familiar with our security policy and practices. The Personally Identifiable Information of our Visitors and Authorized Customers is only accessible to a limited number of qualified employees who are given a password in order to gain access to the information. We audit our security systems and processes on a regular basis.</p>
                                    </div><!-- .entry-content -->

                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
                </div><!-- .hero-content-wrap -->
				
				<div class="swiper-slide hero-content-wrap" style="background-image: url('goodpolicy.jpg')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1>Identify <br>Personal Info</h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <p>How can Visitors correct any inaccuracies in Personally Identifiable Information?Visitors and Authorized Customers may contact us to update Personally Identifiable Information about them or to correct any inaccuracies by emailing us.</p>
                                    </div><!-- .entry-content -->

                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
                </div><!-- .hero-content-wrap -->
				
				<div class="swiper-slide hero-content-wrap" style="background-image: url('goodpolicy.jpg')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1>If Privacy <br>Policy Change </h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <p>If we are changing our privacy policy in a manner that might cause disclosure of Personally Identifiable Information that a Visitor or Authorized Customer has previously requested not be disclosed, we will contact such Visitor or Authorized Customer to allow such Visitor or Authorized Customer to prevent such disclosure. </p>
                                    </div><!-- .entry-content -->

                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
                </div><!-- .hero-content-wrap -->
            </div><!-- .swiper-wrapper -->

            <div class="pagination-wrap position-absolute w-100">
                <div class="swiper-pagination d-flex flex-row flex-md-column"></div>
            </div><!-- .pagination-wrap -->
        </div><!-- .hero-slider -->
  
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
  <script src='policyjs/jquery.js'></script>
  <script src='policyjs/swiper.min.js'></script>
  <script src='policyjs/custom.js'></script>

</body>
</html>