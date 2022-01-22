  <?php 


  ?>
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
  color: black;
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


#contact {
  box-shadow: 0px 0px 12px 0px rgba(0, 0, 0, 0.1);
  padding: 60px 0;
  overflow: hidden;
}

#contact .section-header {
  padding-bottom: 30px;
}

#contact .contact-about h3 {
  font-size: 36px;
  margin: 0 0 10px 0;
  padding: 0;
  line-height: 1;
  font-family: "Montserrat", sans-serif;
  font-weight: 300;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: #007bff;
}

#contact .contact-about p {
  font-size: 14px;
  line-height: 24px;
  font-family: "Montserrat", sans-serif;
  color: #888;
}

#contact .social-links {
  padding-bottom: 20px;
}

#contact .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #fff;
  color: #007bff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
  border: 1px solid #007bff;
}

#contact .social-links a:hover {
  background: #007bff;
  color: #fff;
}

#contact .info {
  color: #283d50;
}

#contact .info i {
  font-size: 32px;
  color: #007bff;
  float: left;
  line-height: 1;
}

#contact .info p {
  padding: 0 0 10px 36px;
  line-height: 28px;
  font-size: 14px;
}

#contact .form #sendmessage {
  color: #007bff;
  border: 1px solid #007bff;
  display: none;
  text-align: center;
  padding: 15px;
  font-weight: 600;
  margin-bottom: 15px;
}

#contact .form #errormessage {
  color: red;
  display: none;
  border: 1px solid red;
  text-align: center;
  padding: 15px;
  font-weight: 600;
  margin-bottom: 15px;
}

#contact .form #sendmessage.show,
#contact .form #errormessage.show,
#contact .form .show {
  display: block;
}

#contact .form .validation {
  color: red;
  display: none;
  margin: 0 0 20px;
  font-weight: 400;
  font-size: 13px;
}

#contact .form input,
#contact .form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

#contact .form button[type="submit"] {
  background: #007bff;
  border: 0;
  border-radius: 20px;
  padding: 8px 30px;
  color: #fff;
  transition: 0.3s;
}

#contact .form button[type="submit"]:hover {
  background: #0067d5;
  cursor: pointer;
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/

#footer {
  background: #00428a;
  padding: 0 0 30px 0;
  color: #eee;
  font-size: 14px;
}

#footer .footer-top {
  background: #004a99;
  padding: 60px 0 30px 0;
}

#footer .footer-top .footer-info {
  margin-bottom: 30px;
}

#footer .footer-top .footer-info h3 {
  font-size: 34px;
  margin: 0 0 20px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-family: "Montserrat", sans-serif;
  color: #fff;
  font-weight: 400;
  letter-spacing: 3px;
  text-transform: uppercase;
}

#footer .footer-top .footer-info p {
  font-size: 13px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Montserrat", sans-serif;
  color: #ecf5ff;
}

#footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #007bff;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#footer .footer-top .social-links a:hover {
  background: #0067d5;
  color: #fff;
}

#footer .footer-top h4 {
  font-size: 14px;
  font-weight: bold;
  color: #fff;
  text-transform: uppercase;
  position: relative;
  padding-bottom: 10px;
}

#footer .footer-top .footer-links {
  margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#footer .footer-top .footer-links ul li {
  padding: 8px 0;
}

#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

#footer .footer-top .footer-links ul a {
  color: #ecf5ff;
}

#footer .footer-top .footer-links ul a:hover {
  color: #74b5fc;
}

#footer .footer-top .footer-contact {
  margin-bottom: 30px;
}

#footer .footer-top .footer-contact p {
  line-height: 26px;
}

#footer .footer-top .footer-newsletter {
  margin-bottom: 30px;
}

#footer .footer-top .footer-newsletter input[type="email"] {
  border: 0;
  padding: 6px 8px;
  width: 65%;
}

#footer .footer-top .footer-newsletter input[type="submit"] {
  background: #007bff;
  border: 0;
  width: 35%;
  padding: 6px 0;
  text-align: center;
  color: #fff;
  transition: 0.3s;
  cursor: pointer;
}

#footer .footer-top .footer-newsletter input[type="submit"]:hover {
  background: #0062cc;
}

#footer .copyright {
  text-align: center;
  padding-top: 30px;
}

#footer .credits {
  text-align: center;
  font-size: 13px;
  color: #f1f7ff;
}

#footer .credits a {
  color: #bfddfe;
}

#footer .credits a:hover {
  color: #f1f7ff;
}


/*endlogin*/
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


  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="img/intro-img.svg" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>We provide<br><span>solutions</span><br>for your business!</h2>
        <div>
          @if(Session::get('type') == 'worker')
            <a href="viewposts" class="btn-services scrollto">Work</a>
          @else
           <a href="jobpost" class="btn-get-started scrollto">Hire</a>
           @endif
        </div>
      </div>

    </div>
  </section><!-- #intro -->
</div>
<!--search-->
<br><br>
<section class="subscribe_part section_padding">
        <div class="container">
                    <div class="subscribe_part_content">
                        <h2>Search Greater Jobs Here!</h2>
                        <div class="subscribe_form">
                          <form action="/searchfrommain" method="post">
                            @csrf
                            <input type="text" name="search" placeholder="Enter job position">
                            <button type="submit" class="btn_1">Search</a>
                          </form>
                        </div>
                    </div>
        </div>
    </section>
    <br><br>
    <header class="section-header">
          <h3>Categories</h3>
        </header>
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


      </div>
    </div>
  </section>
  
</div>
<!-- Start how it works Area -->
      <section class="price-area section-gap">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <header class="section-header">
          <h3>How It Works</h3>
        </header>
          </div>          
          <div class="row">
            <div class="col-lg-3 col-md-6 single-price">
              <div class="top-part">
                <h1 class="package-no">01</h1>
                <h4>Sign up/ Sign in</h4>
                <p class="mt-10">To join our site</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 single-price">
              <div class="top-part">
                <h1 class="package-no">02</h1>
                <h4>CV Form</h4>
                <p class="mt-10">To know biography</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 single-price">
              <div class="top-part">
                <h1 class="package-no">03</h1>
                <h4>Join/View Post</h4>
                <p class="mt-10">For searching workers/job</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 single-price">
              <div class="top-part">
                <h1 class="package-no">04</h1>
                <h4>Contact Mail</h4>
                <p class="mt-10">To contact company/workers</p>
              </div>
            </div>                                    
          </div>
        </div>  
      </section>
      <!-- End how it works Area -->  
<div class="pricing">
<!--==========================
      Pricing Section
    ============================-->
    <section id="pricing" class="wow fadeInUp section-bg">

      <div class="container">

        <header class="section-header">
          <h3>Pricing</h3>
        </header>

        <div class="row flex-items-xs-middle flex-items-xs-center">
      
          <!-- Basic Plan  -->
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency">$</span>0<span class="period">/month</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                  Free 
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">One User Account</li>
                  <li class="list-group-item">Unlimited Candidates</li>
                  <li class="list-group-item">Resume salary, Email Inbox</li>
                  <li class="list-group-item">Support System</li>
                </ul>
                <a href="#" class="btn">Choose Plan</a>
              </div>
            </div>
          </div>
      
          <!-- Regular Plan  -->
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency">$</span>29<span class="period">/month</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                  Regular Plan
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">Unlimited User Account</li>
                  <li class="list-group-item">Unlimited Candidates</li>
                  <li class="list-group-item">Advanced Reporting</li>
                  <li class="list-group-item">Resuming Email Inbox</li>
                </ul>
                <a href="#" class="btn">Choose Plan</a>
              </div>
            </div>
          </div>
      
          <!-- Premium Plan  -->
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency">$</span>39<span class="period">/month</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                  Premium Plan
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">Custom Integration</li>
                  <li class="list-group-item">Free Data Migration</li>
                  <li class="list-group-item">Priority Support</li>
                  <li class="list-group-item">Lead Management</li>
                </ul>
                <a href="#" class="btn">Choose Plan</a>
              </div>
            </div>
          </div>
      
        </div>
      </div>

    </section><!-- #pricing -->
</div>
<!--Category-->


<section class="client_logo">
    <header class="section-header">
          <h3>Clients</h3>
        </header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="client_logo_slider owl-carousel d-flex justify-content-between">
                        <div class="single_client_logo">
                            <img src="img/campanylogo/client_logo_1.png" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img src="img/campanylogo/client_logo_2.png" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img src="img/campanylogo/client_logo_3.png" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img src="img/campanylogo/client_logo_4.png" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img src="img/campanylogo/client_logo_5.png" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img src="img/campanylogo/client_logo_1.png" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img src="img/campanylogo/client_logo_2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
      Contact Section
    ============================-->

    <br><br>
    <section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>
          <br>
        <div class="row wow fadeInUp">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-5 info">
                <i class="ion-ios-location-outline"></i>
                <p>Besides Mandalay-Lashio Road</p>
              </div>
              <div class="col-md-4 info">
                <i class="ion-ios-email-outline"></i>
                <p>jobseeker@example.com</p>
              </div>
              <div class="col-md-3 info">
                <i class="ion-ios-telephone-outline"></i>
                <p> +95 9422 211 882</p>
              </div>
            </div>

            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

     <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>JobSeeker</h3>
            <p>JobSeeker has most real jobs from most important companies. Apply now. Find a job in our website, great for job seekers! The rignt job for you is Here! Best paying jobs.</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">How It Works</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A14 Mandalay-Lashio Road<br>
              PyinSar, NY 535022<br>
              Pyin Oo Lwin <br>
              <strong>Phone:</strong> +95 9422 211 882 <br>
              <strong>Email:</strong> Jobseeker@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our NewsLetter</h4>
            <p>Job seeker newsletter to receive great information every week for a smarter job search. Sign up to the newsletter to get all our jobs email to you every week or sign up for job.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- #footer -->


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
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