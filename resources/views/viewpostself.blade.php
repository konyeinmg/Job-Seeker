<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JobSeeker</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset ('viewpost/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset ('viewpost/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset ('viewpost/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{ asset ('viewpost/css/icomoon.css')}}">
   <link rel="stylesheet" href="{{ asset ('viewpost/css/stylepost.css')}}">
   <link rel="stylesheet" href="{{ asset ('viewpost/css/custom-bs.css')}}">
    <link rel="stylesheet" href="{{ asset ('viewpost/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('viewpost/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{ asset ('viewpost/css/animate.min.css')}}">
  <link href="{{ asset ('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset ('lib/animate/animate.min.css')}}" rel="stylesheet">
  
  <link href="{{ asset ('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ asset ('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset ('viewpost/css/jcarousel.min.css')}}" rel="stylesheet">
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
.btn-lg {
    border-color: skyblue;
  
}
.dropdown-item.active, .dropdown-item:active {
    color: 
#fff;
text-decoration: none;
background-color:#3a82eb;
}
</style>
  </head>
  <body>
  <div id="top">
  <div class="site-wrap">
  <div class="headerdiv">
<header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="{{ asset ('img/unnamed.png')}}" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li><a href="/jobaffair">Home</a></li>
          <li><a href="/viewcategory">Categories</a></li>
          @if(Session::get('auth') != "yes")
          <li><a href="/viewlogin">Posts</a></li>
          @else
          <li class="active"><a href="/viewposts">Posts</a></li>
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
          <li class="drop-down active"><a href="/viewpostself/{{Session::get('email')}}"><i class="fa fa-fw fa-user"></i>{{Session::get('name')}}</a>
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
    <section class="home-section section-hero overlay" id="home-section">
  <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-9">
            
           
          </div>
      <div id="colorlib-page">
    
    
      <section class="ftco-section ftco-no-pt ftco-no-pb">
      
        <div class="container">
      <div>
      
          <div class="row d-flex">
        
            
              <!-- END COL -->
              @foreach($data as $d)
                <div class="col-md-12" alignment="center">

                  <div class="blog-entry ftco-animate d-md-flex">
                    <a href="single.html" class="img img-2" style="background-image: url({{ asset ('img/jojo.png')}});"></a>
                    <div class="text text-2 pl-md-4">
                      <h4 class="mb-2">{{$d->agencyname}}</h4>
                      <h5>{{$d->position}}</h5>
                      <div class="meta-wrap">
                        <p class="meta">
                          <?php  

                            $date = $d->date;
                            $date = date("M d,Y");

                           ?>
                          <span><i class="icon-calendar mr-2"></i>{{$date}}</span>
                          <span><i class="icon-folder-o mr-2"></i>{{$d->hourlyrate}}</span>
                          <span><i class="icon-comment2 mr-2"></i>{{$d->sex}}</span>
                          <span><i class="icon-degree mr-2"></i> {{$d->degree}}</span>
                          <span><i class="icon-jobtype mr-2"></i>{{$d->type}}</span>
                          <span><i class="icon-deadline mr-2"></i>{{$d->deadline}}</span>
                        </p>
                      </div>
                      <p class="mb-4">{{$d->description}}</p>
                    
                  
                      <p><a href="viewposthandle/{{$d->id}}" class="col-3"><button type="submit" class="btn-primary text-white"> 
                      @if($d->contactcount > 1)
                      {{$d->contactcount}} Joiners
                      @else
                      {{$d->contactcount}} Joiner
                      @endif
                      </button> </a></p>
                      
                    </div>
                  </div>
                </div>
                @endforeach
                <!--<div class="col-md-12">
                  <div class="blog-entry ftco-animate d-md-flex">
                    <a href="single.html" class="img img-2" style="background-image: url(viewpost/images/image_2.jpg);"></a>
                    <div class="text text-2 pl-md-4">
                      <h3 class="mb-2"><a href="single.html">Great Things Never Came from Comfort Zone</a></h3>
                      <div class="meta-wrap">
                        <p class="meta">
                          <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                          <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                          <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                        </p>
                      </div>
                      <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                      <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="blog-entry ftco-animate d-md-flex">
                    <a href="single.html" class="img img-2" style="background-image: url(viewpost/images/image_3.jpg);"></a>
                    <div class="text text-2 pl-md-4">
                      <h3 class="mb-2"><a href="single.html">Paths Are Made by Walking</a></h3>
                      <div class="meta-wrap">
                        <p class="meta">
                          <span>Dec 14, 2018</span>
                          <span><a href="single.html">Lifestyle</a></span>
                          <span>5 Comment</span>
                        </p>
                      </div>
                      <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                      <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="blog-entry ftco-animate d-md-flex">
                    <a href="single.html" class="img img-2" style="background-image: url(viewpost/images/image_4.jpg);"></a>
                    <div class="text text-2 pl-md-4">
                      <h3 class="mb-2"><a href="single.html">The Secret of Getting Ahead is Getting Started</a></h3>
                      <div class="meta-wrap">
                        <p class="meta">
                          <span>Dec 14, 2018</span>
                          <span><a href="single.html">Nature</a></span>
                          <span>5 Comment</span>
                        </p>
                      </div>
                      <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                      <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="blog-entry ftco-animate d-md-flex">
                    <a href="single.html" class="img img-2" style="background-image: url(viewpost/images/image_5.jpg);"></a>
                    <div class="text text-2 pl-md-4">
                      <h3 class="mb-2"><a href="single.html">You Can't Blame Gravity for Falling in Love</a></h3>
                      <div class="meta-wrap">
                        <p class="meta">
                          <span>Dec 14, 2018</span>
                          <span><a href="single.html">Lifestyle</a></span>
                          <span>5 Comment</span>
                        </p>
                      </div>
                      <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                      <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="blog-entry ftco-animate d-md-flex">
                    <a href="single.html" class="img img-2" style="background-image: url(viewpost/images/image_6.jpg);"></a>
                    <div class="text text-2 pl-md-4">
                      <h3 class="mb-2"><a href="single.html">You Can't Blame Gravity for Falling in Love</a></h3>
                      <div class="meta-wrap">
                        <p class="meta">
                          <span>Dec 14, 2018</span>
                          <span><a href="single.html">Travel</a></span>
                          <span>5 Comment</span>
                        </p>
                      </div>
                      <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                      <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="blog-entry ftco-animate d-md-flex">
                    <a href="single.html" class="img img-2" style="background-image: url(viewpost/images/image_7.jpg);"></a>
                    <div class="text text-2 pl-md-4">
                      <h3 class="mb-2"><a href="single.html">You Can't Blame Gravity for Falling in Love</a></h3>
                      <div class="meta-wrap">
                        <p class="meta">
                          <span>Dec 14, 2018</span>
                          <span><a href="single.html">Travel</a></span>
                          <span>5 Comment</span>
                        </p>
                      </div>
                      <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                      <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="blog-entry ftco-animate d-md-flex">
                    <a href="single.html" class="img img-2" style="background-image: url(viewpost/images/image_8.jpg);"></a>
                    <div class="text text-2 pl-md-4">
                      <h3 class="mb-2"><a href="single.html">You Can't Blame Gravity for Falling in Love</a></h3>
                      <div class="meta-wrap">
                        <p class="meta">
                          <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                          <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                          <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                        </p>
                      </div>
                      <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                      <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="blog-entry ftco-animate d-md-flex">
                    <a href="single.html" class="img img-2" style="background-image: url(viewpost/images/image_9.jpg);"></a>
                    <div class="text text-2 pl-md-4">
                      <h3 class="mb-2"><a href="single.html">You Can't Blame Gravity for Falling in Love</a></h3>
                      <div class="meta-wrap">
                        <p class="meta">
                          <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                          <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                          <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                        </p>
                      </div>
                      <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                      <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="blog-entry ftco-animate d-md-flex">
                    <a href="single.html" class="img img-2" style="background-image: url(viewpost/images/image_10.jpg);"></a>
                    <div class="text text-2 pl-md-4">
                      <h3 class="mb-2"><a href="single.html">You Can't Blame Gravity for Falling in Love</a></h3>
                      <div class="meta-wrap">
                        <p class="meta">
                          <span>Dec 14, 2018</span>
                          <span><a href="single.html">Lifestyle</a></span>
                          <span>5 Comment</span>
                        </p>
                      </div>
                      <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                      <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="blog-entry ftco-animate d-md-flex">
                    <a href="single.html" class="img img-2" style="background-image: url(viewpost/images/image_11.jpg);"></a>
                    <div class="text text-2 pl-md-4">
                      <h3 class="mb-2"><a href="single.html">You Can't Blame Gravity for Falling in Love</a></h3>
                      <div class="meta-wrap">
                        <p class="meta">
                          <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                          <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                          <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                        </p>
                      </div>
                      <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                      <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="blog-entry ftco-animate d-md-flex">
                    <a href="single.html" class="img img-2" style="background-image: url(viewpost/images/image_12.jpg);"></a>
                    <div class="text text-2 pl-md-4">
                      <h3 class="mb-2"><a href="single.html">You Can't Blame Gravity for Falling in Love</a></h3>
                      <div class="meta-wrap">
                        <p class="meta">
                          <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                          <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                          <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                        </p>
                      </div>
                      <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                      <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                    </div>
                  </div>
                </div>-->
              </div><!-- END-->
            </div>
          </div>
          </section>
    </div><!-- END COLORLIB-MAIN -->
        </div>
     </section>
  </div>
  </div>
  <script src="{{asset ('viewpost/js/jquery.min.js')}}"></script>
  <script src="{{asset ('viewpost/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset ('viewpost/js/popper.min.js')}}"></script>
  <script src="{{asset ('viewpost/js/bootstrap.min.js')}}"></script>
  <script src="{{asset ('viewpost/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset ('viewpost/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset ('viewpost/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset ('viewpost/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset ('viewpost/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset ('viewpost/js/aos.js')}}"></script>
  <script src="{{asset ('viewpost/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset ('viewpost/js/scrollax.min.js')}}"></script>
  <script src="{{asset ('viewpost/js/google-map.js')}}"></script>
  <script src="{{asset ('viewpost/js/main.js')}}"></script>
  <script src="{{asset ('viewpost/js/jquery.min.js')}}"></script>
  <script src="{{asset ('viewpost/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset ('viewpost/js/bootstrap-select.min.js')}}"></script>
  <script src="{{asset ('viewpost/js/custom.js')}}"></script>
  <script src="{{asset ('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset ('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset ('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset ('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset ('lib/mobile-nav/mobile-nav.js')}}"></script>
  <script src="{{asset ('lib/wow/wow.min.js')}}"></script>
  <script src="{{asset ('lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset ('lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset ('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset ('lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset ('lib/lightbox/js/lightbox.min.js')}}"></script>
  <script src="{{asset ('lib/js/jquery.jcarousel.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset ('viewpost/js/main.js')}}"></script>
  <!-- Template Custom JavaScript File -->
  <script src="{{asset ('viewpost/js/profile.js')}}"></script>
    
  </body>
</html>