<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>JobSeeker</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

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
  <link href="css/style1.css" rel="stylesheet">
  <link href="css/dev-bootstrap.css" rel="stylesheet"/>
  <link href="css/dev-bootstrap-responsive.css" rel="stylesheet"/>
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
  font-size: 15.3px;
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
    .home-section .search-jobs-form .form-control, .home-section .search-jobs-form .btn-lg {
    height: calc(2em + 1rem + 2px);
    padding: 0.5rem 1rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.3rem; }
  .home-section .search-jobs-form .btn-search > span {
    font-size: 1rem;
    position: relative; }
  .home-section .search-jobs-form .btn-white {
    background: #fff;
    color: #343a40; }
.section-hero, .section-hero > .container > .row {
  height: 0vh;
  min-height: 0px;
margin-top:100px;  }
.section-hero.overlay, .section-hero.overlay-2 {
  position: relative; }
  .section-hero.overlay:before, .section-hero.overlay-2:before {
    z-index: 1;
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); }
.section-hero > .container {
  z-index: 2;
  position: relative; }
  .row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: 20px;
    margin-left: 20px;
}
.btn-outline-primary {
    color: #89ba16;
    border-color: 
    skyblue;
}
.btn-primary {
    color: #212529;
    background-color: #3a82eb;
border-color:skyblue;
}
.btn-primary:hover {
    color: #fff;
    background-color: #1f5fd0;
border-color:skyblue;
}
.btn-outline-primary:hover {
    color: 
#212529;
background-color:blue;
border-color:skyblue;
}
a {
    color: skyblue;
    text-decoration: none;
    background-color:transparent;
}
a:hover {
    color: blue;
    text-decoration: underline;
}
.form-control:focus {
    color: 
#495057;
background-color:
#fff;
border-color:#58a5db;
outline: 0;
-webkit-box-shadow: 0 0 0 0.1rem rgba(137, 186, 22, 0.25);
box-shadow: 0 0 0 0.1rem
   skyblue;
}
.dropdown-item.active, .dropdown-item:active {
    color: 
#fff;
text-decoration: none;
background-color:#3a82eb;
}
.row1 {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
  margin-top:0px;
    margin-right: 20px;
    margin-left: 60px;
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
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#team">Team</a></li>
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
		  <li><button type="button" class="btn btn-outline-primary">Sign In</button></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
  </div>
  
  <section class="home-section section-hero overlay" id="home-section">
  
    <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-9">
            
            <form method="post" class="search-jobs-form">
              <div class="row mb-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0" style="margin-left:20px">
                  <input type="text" class="form-control form-control-lg" placeholder="Job title, Company...">
                </div>
        
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0" style="margin-left:20px">
                  <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" title="Select Region">
                    <option>Part Time</option>
                    <option>Full Time</option>
                    <option>Palo Alto</option>
                    <option>New York</option>
                    <option>Manhattan</option>
                    <option>Ontario</option>
                    <option>Toronto</option>
                    <option>Kansas</option>
                    <option>Mountain View</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0" style="margin-left:20px">
                  <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search Job</button>
                </div>
              </div>
              
            </form>
          </div>
    
      
    </div><!-- END COLORLIB-MAIN -->
        </div>
  
    <section id="content" style="margin-top: 100px">
      <div class="container">
        <div class="row1">
          <div class="span12">
            <div class="row">
              @foreach($dating as $data)
              <div class="col-md-3" style="box-shadow: 3px 3px 3px 3px #f3f6f9;padding:20px 20px 20px 20px;">
                <div class="box aligncenter" style="background-color:white; border:0.1px solid #94aae7;box-shadow:1px 1px 1px 1px   #bacedf;border-radius: 10px;padding:20px 5px 5px 5px;">
                  <div class="aligncenter icon">
					         <img src="img/avatar.png" style="border-radius:50px;width:80px;height:80px">
                  </div><br>
                  <div class="text" style="color: #085ba5 ;">
                    <h6><span style="color: #085ba5 ;">{{$data->name}}</span></h6>
                    <p>
          					  <i><span style="font-weight:bold;">{{$data->role}}</span></i><br></p>
                      <hr>
                      <p>

                      if($data->skillConnect != null)
                      <?php
                      $array = array(
                         'C++' => $data->skillConnect->cdoubleplus,
                         'Java' => $data->skillConnect->java,
                         'Html' => $data->skillConnect->html,
                         'CSS' => $data->skillConnect->css,
                         'JQuery' => $data->skillConnect->jquery,
                         'JavaScript' => $data->skillConnect->javascript,
                         'Bootstrap' => $data->skillConnect->bootstrap,
                         'C#' => $data->skillConnect->csharp,
                         'J2ee' => $data->skillConnect->j2ee,
                         'Python' => $data->skillConnect->python,
                         'Android' => $data->skillConnect->android,
                         'PHP' => $data->skillConnect->php,
                         'C' => $data->skillConnect->c,
                         'MySql' => $data->skillConnect->mysql,
                         'NoSql' => $data->skillConnect->nosql,
                         'Oracle' => $data->skillConnect->oracle,
                         'Bigdata' => $data->skillConnect->bigdata,
                         'AI' => $data->skillConnect->ai,
                         'Networking' => $data->skillConnect->networking,
                         'Accounting' => $data->skillConnect->accounting,
                         'Marketing' => $data->skillConnect->marketing,
                         'Adobephotoshot' => $data->skillConnect->adobephotoshot 
                        );
                  
                     ?>
                      @foreach($array as $key=>$value)
                      @if($value != 0)
                      <span style="color:black;background-color: #dee2e5 ; border-radius: 10px">{{$key}}</span>
                      @endif
                      @endforeach
                      @endif
                    </p>
                    

                    <a href="viewcvform/{{$data->email}}">Learn more</a><br>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
        </div>
      </section>
    </section>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster 
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jcarousel/jquery.jcarousel.min.js"></script>-->
<!-- JavaScript Libraries -->
</body>
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
</html>
