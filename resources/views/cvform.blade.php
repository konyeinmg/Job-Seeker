<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>JobSeeker</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendorcv/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendorcv/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="vendorcv/main.css" rel="stylesheet" media="all">
	<style>




.submit-button1 {
	background-color:white;
	height: 35px;
	line-height: 35px;
	text-decoration:underline;
	font-size: 16px;
	color: black;
	padding: 0 15px;
	margin-bottom:30px;
	margin-top:10px;
	margin-left:5px;
	border: 0;
	outline: 0;
	border-radius: 30px;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-o-transition: all 0.3s;
	-ms-transition: all 0.3s;
	transition: all 0.3s;
}
.submit-button1:hover{
	background-color:#b9d0ed;
}

</style>
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body" style="margin-top: 0px;">
                    <h2 class="title">Curriculum Vitae Form</h2>
					<hr>
                    <form action="uploadcv" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row row-space" style="margin-top:20px">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input class="input--style-4" type="text" name="name" required/>
                                </div>
                            </div>
                             <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday" required/>
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender" value="Male">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="Female">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
							 <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Father's Name</label>
                                    <input class="input--style-4" type="text" name="fathername" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" required/>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone" required/>
                                </div>
                            </div>
                        </div>
						 <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">NRC</label>
                                    <input class="input--style-4" type="text" name="nrc" required/>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Hourly Rate</label>
                                    <input class="input--style-4" type="text" name="hourlyrate" required/>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                                    <label class="label">Role</label>
                                    <input class="input--style-4" type="text" name="role" required/>
                                </div>
                        <div class="input-group">
                                    <label class="label">Residential Address</label>
                                    <input class="input--style-4" type="text" name="address" required/>
                                </div>
						<div class="col-4">
							<div class="form-group"> 
								<textarea class="form-control" id="message" name="message" placeholder="Your Message" rows="8" cols="120" required/></textarea>
								
							</div>
						</div> 	
						<div class="row row-space">
                           <div class="col-2">
					<img src="images/about-img-03.jpg" id="blah" style="width:100px;height:100px;border-radius:30px;margin-top:20px;" >  
                    <input type="button" value="Browse"  onclick="document.getElementById('fileimg').click()" style="width: 100px">     
					<input type="file" name="fileToUpload" id="fileimg" onchange="previewimage()" value="Browse your image" class="submit-button1" style="display: none"/>	
				</div>
                            
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendorcv/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendorcv/select2/select2.min.js"></script>
    <script src="vendorcv/datepicker/moment.min.js"></script>
    <script src="vendorcv/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="vendorcv/global.js"></script>
    <script>
           function previewimage (){
        var ofreader = new FileReader();
        ofreader.readAsDataURL(document.getElementById("fileimg").files[0]);
        
        ofreader.onload = function(e){
            document.getElementById("blah").src = e.target.result;
        };
    };


    </script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->