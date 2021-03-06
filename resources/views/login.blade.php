
<!DOCTYPE html>
<html lang="en">
<head>
	<title>JobSeeker</title>
	<meta charset="UTF-8">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/loginvendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="login/logincss/util.css">
	<link rel="stylesheet" type="text/css" href="login/logincss/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #cdd7fe ;">
	
	<div class="limiter" >
		<div class="container-login100" >
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50" >
				<form class="login100-form validate-form" action="/loginverify" method="POST">
					@csrf
					<span class="login100-form-title p-b-33" >
						Login
					</span>
					
					@if(Session::get('login') == "fail")
					<p style="color: red;">Your email or password is wrong!!</p>
					@endif

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Email" required/>
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
 						<input class="input100" type="password" name="password" placeholder="Password" required/>
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" style="border-radius:10px" type="submit">
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

						<a href="/registration" class="txt2 hov1">
							Sign up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<?php 
	


?>
	


</body>
<!--===============================================================================================-->
	<script src="login/loginvendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/loginvendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login/loginvendor/bootstrap/js/popper.js"></script>
	<script src="login/loginvendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="login/loginjs/main.js"></script>
</html>