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
  <link href="lib/bootstrap/css/catogoriesbootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <!--<link href="css/style.css" rel="stylesheet">-->

  <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  <style>
<!--How it works section -->
  
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

/* Back to top button */

.back-to-top {
  position: fixed;
  display: none;
  background: #007bff;
  color: #fff;
  width: 44px;
  height: 44px;
  text-align: center;
  line-height: 1;
  font-size: 16px;
  border-radius: 50%;
  right: 15px;
  bottom: 15px;
  transition: background 0.5s;
  z-index: 11;
}

.back-to-top i {
  padding-top: 12px;
  color: #fff;
}

/* Prelaoder */

#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  overflow: hidden;
  background: #fff;
}

#preloader:before {
  content: "";
  position: fixed;
  top: calc(50% - 30px);
  left: calc(50% - 30px);
  border: 6px solid #f2f2f2;
  border-top: 6px solid #007bff;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  -webkit-animation: animate-preloader 1s linear infinite;
  animation: animate-preloader 1s linear infinite;
}

@-webkit-keyframes animate-preloader {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@keyframes animate-preloader {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
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
# Intro Section
--------------------------------------------------------------*/

#intro {
  width: 100%;
  position: relative;
  background: url("img/intro-bg.png") center bottom no-repeat;
  background-size: cover;
  padding: 200px 0 120px 0;
}

#intro .intro-img {
  width: 50%;
  float: right;
}

#intro .intro-info {
  width: 50%;
  float: left;
}

#intro .intro-info h2 {
  color: #fff;
  margin-bottom: 40px;
  font-size: 48px;
  font-weight: 700;
}

#intro .intro-info h2 span {
  color: #74b5fc;
  text-decoration: underline;
}

#intro .intro-info .btn-get-started,
#intro .intro-info .btn-services {
  font-family: "Montserrat", sans-serif;
  font-size: 14px;
  font-weight: 600;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 32px;
  border-radius: 50px;
  transition: 0.5s;
  margin: 0 20px 20px 0;
  color: #fff;
}

#intro .intro-info .btn-get-started {
  background: #007bff;
  border: 2px solid #007bff;
  color: #fff;
}

#intro .intro-info .btn-get-started:hover {
  background: none;
  border-color: #fff;
  color: #fff;
}

#intro .intro-info .btn-services {
  border: 2px solid #fff;
}

#intro .intro-info .btn-services:hover {
  background: #007bff;
  border-color: #007bff;
  color: #fff;
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

/*--------------------------------------------------------------
# Sections
--------------------------------------------------------------*/

/* Sections Header
--------------------------------*/

.section-header h3 {
  font-size: 36px;
  color: #283d50;
  text-align: center;
  font-weight: 500;
  position: relative;
}

.section-header p {
  text-align: center;
  margin: auto;
  font-size: 15px;
  padding-bottom: 60px;
  color: #556877;
  width: 50%;
}
.pricing {
  background: #fff;
  color: #444;
  font-family: "Open Sans", sans-serif;
}

.pricing p {
  padding: 0;
  margin: 0 0 30px 0;
}

.pricing h1,h2,h3,h4,h5,h6 {
  font-family: "Montserrat", sans-serif;
  font-weight: 400;
  margin: 0 0 20px 0;
  padding: 0;
}
	/* Pricing Section
--------------------------------*/

#pricing {
  padding: 80px 0;
}

#pricing .card {
  border: 0;
  border-radius: 0px;
  box-shadow: 0 3px 0px 0 rgba(65, 62, 102, 0.08);
  transition: all .3s ease-in-out;
  padding: 36px 0;
  position: relative;
}

#pricing .card:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 0%;
  height: 5px;
  background-color: #1bb1dc;
  transition: 0.5s;
}

#pricing .card:hover {
  -webkit-transform: scale(1.05);
  transform: scale(1.05);
  box-shadow: 0 20px 35px 0 rgba(0, 0, 0, 0.08);
}

#pricing .card:hover:after {
  width: 100%;
}

#pricing .card .card-header {
  background-color: white;
  border-bottom: 0px;
  -moz-text-align-last: center;
  text-align-last: center;
}

#pricing .card .card-title {
  margin-bottom: 16px;
  color: #535074;
}

#pricing .card .card-block {
  padding-top: 0;
  text-align: center;
}

#pricing .card .list-group-item {
  border: 0px;
  padding: 6px;
  color: #413e66;
  font-weight: 300;
}

#pricing .card h3 {
  font-size: 64px;
  margin-bottom: 0px;
  color: #535074;
}

#pricing .card h3 .currency {
  font-size: 30px;
  position: relative;
  font-weight: 400;
  top: -30px;
  letter-spacing: 0px;
}

#pricing .card h3 .period {
  font-size: 16px;
  color: #6c67a3;
  letter-spacing: 0px;
}

#pricing .card .list-group {
  margin-bottom: 15px;
}

#pricing .card .btn {
  text-transform: uppercase;
  font-size: 13px;
  font-weight: 500;
  color: #5f5b96;
  border-radius: 0;
  padding: 10px 24px;
  letter-spacing: 1px;
  border-radius: 3px;
  display: inline-block;
  background: #1bb1dc;
  color: #fff;
}

#pricing .card .btn:hover {
  background: #0a98c0;
}
.section-header h3 {
  font-size: 36px;
  color: #413e66;
  text-align: center;
  font-weight: 700;
  position: relative;
  font-family: "Montserrat", sans-serif;
}

.section-header p {
  text-align: center;
  margin: auto;
  font-size: 15px;
  padding-bottom: 60px;
  color: #535074;
  width: 50%;
}
/*Responsive */
@media (max-width: 991px) {
  #header {
    height: 60px;
    padding: 10px 0;
  }

  #header .logo h1 {
    font-size: 28px;
    padding: 8px 0;
  }

  #intro {
    padding: 140px 0 60px 0;
  }

  #intro .intro-img {
    width: 80%;
    float: none;
    margin: 0 auto 25px auto;
  }

  #intro .intro-info {
    width: 80%;
    float: none;
    margin: auto;
    text-align: center;
  }
  
  #pricing {
    padding-bottom: 30px;
  }

  #pricing .card {
    margin-bottom: 50px;
  }

}

@media (max-width: 768px) {
  .back-to-top {
    bottom: 15px;
  }
}

@media (max-width: 767px) {
  #intro .intro-info {
    width: 100%;
  }

  #intro .intro-info h2 {
    font-size: 34px;
    margin-bottom: 30px;
  }

  .section-header p {
    width: 100%;
  }

}

@media (max-width: 574px) {
  #intro {
    padding: 100px 0 20px 0;
  }
}
/* Features Section
--------------------------------*/
.category #features {
  display: inline-block;
  height: 100%;
  width: 100%;
}

.category #features .feature-block {
  background: #fff none repeat scroll 0 0;
  padding: 30px 20px;
  margin-bottom: 30px;
  transition: all 0.5s ease-in-out 0s;
}

.category #features .feature-block:hover {
  box-shadow: 0 0 35px rgba(0, 0, 0, 0.1);
  transition: all 0.5s ease-in-out 0s;
}

.category #features .feature-block h4 {
  margin-bottom: 20px;
}
.category h4 {
  margin: 0;
  color: #000;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 2px;
  text-transform: uppercase;
  line-height: 2;
}
.category .img-fluid {
  height: 60px;
  margin-bottom: 30px;
  width: 60px;
}
<!--CompanyLogo-->
.client_logo {
  padding: 0 0 140px;
}

@media (max-width: 991px) {
  /* line 2, ../../01 cl html template/03_jun 2019/185 Ecobit SAAS html/sass/_client_logo.scss */
  .client_logo {
    padding: 0 0 70px;
  }
}

@media only screen and (min-width: 992px) and (max-width: 1200px) {
  /* line 2, ../../01 cl html template/03_jun 2019/185 Ecobit SAAS html/sass/_client_logo.scss */
  .client_logo {
    padding: 0 0 100px;
  }
}

/* line 10, ../../01 cl html template/03_jun 2019/185 Ecobit SAAS html/sass/_client_logo.scss */
.client_logo .single_client_logo {
  display: flex;
  align-items: center;
}

/* line 14, ../../01 cl html template/03_jun 2019/185 Ecobit SAAS html/sass/_client_logo.scss */
.client_logo .owl-carousel .owl-item img {
  width: auto;
}

/* line 17, ../../01 cl html template/03_jun 2019/185 Ecobit SAAS html/sass/_client_logo.scss */
.client_logo .single_client_logo {
  height: 100px;
}

/* line 19, ../../01 cl html template/03_jun 2019/185 Ecobit SAAS html/sass/_client_logo.scss */
.client_logo .single_client_logo img {
  margin: 0 auto;
}
<!--Serach-->
.section_padding {
  padding: 50px 50px;
}

a:hover {
  outline: none;
  text-decoration: none;
}

a:focus,
.button:focus,
button:focus,
.btn:focus {
  text-decoration: none;
  outline: none;
  box-shadow: none;
  -webkit-transition: 1s;
  transition: 1s;
}

.submit_btn {
  width: auto;
  display: inline-block;
  background: #1158B2;
  padding: 0px 50px;
  color: #1158B2;
  font-size: 13px;
  font-weight: 500;
  line-height: 50px;
  border-radius: 5px;
  outline: none !important;
  box-shadow: none !important;
  text-align: center;
  border: 1px solid #1158B2;
  cursor: pointer;
  -webkit-transition: 0.5s;
  transition: 0.5s;
}

.submit_btn:hover {
  background: transparent;
}

.btn_1 {
  display: inline-block;
  padding: 17px 50px;
  border-radius: 5px;
  background-color: #1158B2;
  border: 1px solid #1158B2;
  font-size: 15px;
  font-weight: 500;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  text-transform: capitalize;
  color: #fff;
}

.btn_1:hover {
  background-color: #018EFE;
  color: #fff;
}

.subscribe_part {
  background-color: #fff;
}

.subscribe_part .subscribe_part_content {
  text-align: center;
}

.subscribe_part .subscribe_part_content h2 {
  color: #1158B2;
}

.subscribe_part .subscribe_form {
  margin: 0 auto;
  margin-top: 45px;
  position: relative;
  max-width: 558px;
}

.subscribe_part .subscribe_form input {
  border: 1px solid #1158B2;
  width: 100%;
  background-color: transparent;
  color: #1158B2;
  border-radius: 50px;
  padding: 19px 30px;
  line-height: 20px;
}

.subscribe_part .subscribe_form .btn_1 {
  padding: 15px 30px;
  line-height: 16px;
  border-radius: 50px;
  position: absolute;
  right: 5px;
  top: 5px;
}


p1-gradient-bg, .banner-left .primary-btn, .home-about-right .primary-btn, .facts-area, .thumb .overlay-bg, .price-area .single-price:hover, .brands-area, .about-banner, .sb_bar {
  background: -moz-linear-gradient(0deg, #8490ff 0%, #62bdfc 100%);
  background: -webkit-linear-gradient(0deg, #8490ff 0%, #62bdfc 100%);
  background: -ms-linear-gradient(0deg, #8490ff 0%, #62bdfc 100%);
}


/*--------- Start price  Area -------------*/
.price-area .single-price {
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  text-align: center;
  background-color: #f9f9ff;
  padding: 40px 20px;
}

.price-area .single-price .package-no {
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  font-weight: 300;
  margin-left: auto;
  margin-right: auto;
  width: 140px;
  height: 140px;
  background-color: rgba(132, 144, 255, 0.1);
  border-radius: 100px;
  align-items: center;
  display: grid;
  border: 30px solid rgba(132, 144, 255, 0.1);
}

.price-area .single-price .top-part h4 {
  margin-top: 20px;
}

.price-area .single-price .package-list {
  padding-bottom: 30px;
  padding-top: 15px;
}

.price-area .single-price .package-list ul li {
  padding: 10px 0;
  border-top: 1px solid #eee;
}

.price-area .single-price .package-list ul li:last-child {
  border-bottom: 1px solid #eee;
}

.price-area .single-price .bottom-part {
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.price-area .single-price .bottom-part .price-btn {
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  background-color: #fff;
  color: #222;
  padding: 10px 50px;
  font-weight: 600;
  display: inline-block;
  display: none;
}

.price-area .single-price:hover {
  transform: scale(1.05);
  z-index: 2;
  color: #fff;
  cursor: pointer;
}

.price-area .single-price:hover h1, .price-area .single-price:hover h4 {
  color: #fff;
}

.price-area .single-price:hover .package-no {
  border-color: rgba(255, 255, 255, 0.21);
  background-color: rgba(255, 255, 255, 0.1);
}

.price-area .single-price:hover .bottom-part h1 {
  display: none;
}

.price-area .single-price:hover .bottom-part .price-btn {
  display: block;
}
/*--------- end price  Area -------------*/



<!--login-->
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

@font-face {
  font-family: OpenSans-Regular;
  src: url('../fonts/OpenSans/OpenSans-Regular.ttf'); 
}
* {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

body, html {
	height: 100%;
	font-family: OpenSans-Regular, sans-serif;
}


a {
	font-family: OpenSans-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
	outline: none !important;
}

a:hover {
	text-decoration: none;
}

/*---------------------------------------------*/
h1,h2,h3,h4,h5,h6 {
	margin: 0px;
}

p {
	font-family: OpenSans-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
}

ul, li {
	margin: 0px;
	list-style-type: none;
}


/*---------------------------------------------*/
input {
	outline: none;
	border: none;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}

input::-webkit-input-placeholder { color: #666666;}
input:-moz-placeholder { color: #666666;}
input::-moz-placeholder { color: #666666;}
input:-ms-input-placeholder { color: #666666;}

textarea::-webkit-input-placeholder { color: #666666;}
textarea:-moz-placeholder { color: #666666;}
textarea::-moz-placeholder { color: #666666;}
textarea:-ms-input-placeholder { color: #666666;}
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}
.txt1 {
  font-family: OpenSans-Regular;
  font-size: 15px;
  line-height: 1.4;
  color: #999999;
}

.txt2 {
  font-family: OpenSans-Regular;
  font-size: 15px;
  line-height: 1.4;
  color: #4272d7;
}

.hov1:hover {
  text-decoration: underline;
}

.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-login100 {
  width: 100%;  
  min-height: 50vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}

.wrap-login100 {
  width: 500px;
  background: #fff;
  border-radius: 0px;
  overflow: hidden;
}


/*==================================================================
[ Form ]*/

.login100-form {
  width: 100%;
}

.login100-form-title {
  display: block;
  font-family: OpenSans-Regular;
  font-size: 30px;
  color: #555555;
  line-height: 1.2;
  text-align: center;
}

/*------------------------------------------------------------------
[ Input ]*/

.wrap-input100 {
  width: 100%;
  position: relative;
  background-color: #fff;
  border: 1px solid #e6e6e6;
}

.wrap-input100.rs1 {
  border-top: none;
}

.input100 {
  display: block;
  width: 100%;
  background: transparent;
  font-family: OpenSans-Regular;
  font-size: 15px;
  color: #666666;
  line-height: 1.2;
}


/*---------------------------------------------*/
input.input100 {
  height: 68px;
  padding: 0 25px 0 25px;
}

/*------------------------------------------------------------------
[ Focus Input ]*/

.focus-input100-1, 
.focus-input100-2 {
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
}

.focus-input100-1::before,
.focus-input100-2::before {
  content: "";
  display: block;
  position: absolute;
  width: 0;
  height: 1px;
  background-color: #4272d7;
}

.focus-input100-1::before {
  top: -1px;
  left: 0;
}

.focus-input100-2::before {
  bottom: -1px;
  right: 0;
}

.focus-input100-1::after,
.focus-input100-2::after {
  content: "";
  display: block;
  position: absolute;
  width: 1px;
  height: 0;
  background-color: #4272d7;
}

.focus-input100-1::after {
  top: 0;
  right: -1px;
}

.focus-input100-2::after {
  bottom: 0;
  left: -1px;
}

.input100:focus + .focus-input100-1::before {
  -webkit-animation: full-w 0.2s linear 0s;
  animation: full-w 0.2s linear 0s;
  animation-fill-mode: both;
  -webkit-animation-fill-mode: both;
}

.input100:focus + .focus-input100-1::after {
  -webkit-animation: full-h 0.1s linear 0.2s;
  animation: full-h 0.1s linear 0.2s;
  animation-fill-mode: both;
  -webkit-animation-fill-mode: both;
}

.input100:focus + .focus-input100-1 + .focus-input100-2::before {
  -webkit-animation: full-w 0.2s linear 0.3s;
  animation: full-w 0.2s linear 0.3s;
  animation-fill-mode: both;
  -webkit-animation-fill-mode: both;
}

.input100:focus + .focus-input100-1 + .focus-input100-2::after {
  -webkit-animation: full-h 0.1s linear 0.5s;
  animation: full-h 0.1s linear 0.5s;
  animation-fill-mode: both;
  -webkit-animation-fill-mode: both;
}


@keyframes full-w {
  to {
    width: calc(100% + 1px);
  }
}

@keyframes full-h {
  to {
    height: calc(100% + 1px);
  }
}


/*------------------------------------------------------------------
[ Button ]*/
.container-login100-form-btn {
  width: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
}

.login100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  width: 100%;
  height: 40px;
  background-color: #7a9cf8
;

  font-family: OpenSans-Regular;
  font-size: 14px;
  color: #fff;
  line-height: 1.2;
  text-transform: uppercase;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn:hover {
  background-color: #164fa2;
}


/*------------------------------------------------------------------
[ Alert validate ]*/

.validate-input {
  position: relative;
}

.alert-validate::before {
  content: attr(data-validate);
  position: absolute;
  max-width: 70%;
  background-color: #fff;
  border: 1px solid #c80000;
  border-radius: 2px;
  padding: 4px 25px 4px 10px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 12px;
  pointer-events: none;

  font-family: OpenSans-Regular;
  color: #c80000;
  font-size: 13px;
  line-height: 1.4;
  text-align: left;

  visibility: hidden;
  opacity: 0;

  -webkit-transition: opacity 0.4s;
  -o-transition: opacity 0.4s;
  -moz-transition: opacity 0.4s;
  transition: opacity 0.4s;
}

.alert-validate::after {
  content: "\f12a";
  font-family: FontAwesome;
  display: block;
  position: absolute;
  color: #c80000;
  font-size: 16px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 18px;
}

.alert-validate:hover:before {
  visibility: visible;
  opacity: 1;
}

@media (max-width: 992px) {
  .alert-validate::before {
    visibility: visible;
    opacity: 1;
  }
}
.p-t-5 {padding-top: 20px;}
.p-t-45 {padding-top: 30px;}
.p-b-4 {padding-bottom: 6px;}
.p-b-10 {padding-bottom: 10px;}
.p-l-10 {padding-left: 10px;}
.p-r-10 {padding-right: 10px;}
.m-t-20 {margin-top: 20px;}



  </style>
</head>
<body>
<div class="headerdiv">
<!--==========================
  Header
  ============================-->
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
          <li class="active"><a href="/viewcategory">Categories</a></li>
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
<div id="loginModal" class="modal">
<div class="modal-dialog modal-dialog-centered" style="background-color:background: rgba(0,0,0,0.5);">
<div class="modal-content"style="background: linear-gradient(to top right, #f8f9fd 0%,  #acc1fa  100%);">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Account Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
  <div class="limiter" >
		<div class="container-login100" >
			<div class="wrap-login100 p-l-10 p-r-10 p-t-5 p-b-10" >
				<form class="login100-form validate-form">
                    
                   
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2 hov1">
							Username / Password?
						</a>
					</div>

					<div class="text-center">
						<span class="txt1">
							Create an account?
						</span>

						<a href="#" class="txt2 hov1">
							Sign up
						</a>
					</div>
				</form>
			</div>
		</div></div></div>

</div>
</div>
</div>
<div class="category">
  <section id="features" class="padd-section text-center wow fadeInUp">

 <br><br>
    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-3">
          <a href="/worker">
          <div class="feature-block">
            <img src="categories_image/webdeveloperr.png" alt="img" class="img-fluid">
            <h4>Web Developer</h4>
          </div>
        </a>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="categories_image/softwaredeveloper.png" alt="img" class="img-fluid">
            <h4>Software Developer</h4>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="categories_image/moblie_application_developer.png" alt="img" class="img-fluid">
            <h4>Mobile Application Developer</h4>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="categories_image/database adminstrator.png" alt="img" class="img-fluid">
            <h4>Database Adminstrator</h4>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="categories_image/information_security_analyst.png" alt="img" class="img-fluid">
            <h4>Information Security Analyst</h4>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="categories_image/computer_system_analyst.png" alt="img" class="img-fluid">
            <h4>Computer System Analyst</h4>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="categories_image/business_analyst.png" alt="img" class="img-fluid">
            <h4>Business Analyst</h4>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="categories_image/computer_system_adminstrator.png" alt="img" class="img-fluid">
            <h4>Computer System Adminstrator</h4>
          </div>
        </div>
		<div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="categories_image/computer_support_specialist.png" alt="img" class="img-fluid">
            <h4>Computer Support Specialist</h4>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="categories_image/computer_programmar.png" alt="img" class="img-fluid">
            <h4>Computer Programmer</h4>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="categories_image/data_scientist.png" alt="img" class="img-fluid">
            <h4>Data Scientist</h4>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="categories_image/computer_hardware_engineer.png" alt="img" class="img-fluid">
            <h4>Computer Hardware Engineer</h4>
          </div>
        </div>
		<div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="categories_image/ITmanagerr.png" alt="img" class="img-fluid">
            <h4>IT Manager</h4>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="categories_image/project_manager.png" alt="img" class="img-fluid">
            <h4>Project Manager</h4>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="categories_image/HR_manager.png" alt="img" class="img-fluid">
            <h4>HR Manager</h4>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="categories_image/webdesigner.png" alt="img" class="img-fluid">
            <h4>Web Designer</h4>
          </div>
        </div>
		<div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="categories_image/machine_learning_engineer.png" alt="img" class="img-fluid">
            <h4>Machine Learning Engineer</h4>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="categories_image/infrastructure_engineer.png" alt="img" class="img-fluid">
            <h4>Infrastructure Engineer</h4>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="categories_image/cloud_infrastructure_engineer.png" alt="img" class="img-fluid">
            <h4>Cloud  Infrastructure Engineer</h4>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="categories_image/ComputerNetworkArchitect.png" alt="img" class="img-fluid">
            <h4>Computer Network Architect</h4>
          </div>
        </div>

      </div>
    </div>
  </section>
</div>
</body>
<!-- JavaScript Libraries -->
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
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="js/custom.js"></script>
</html>