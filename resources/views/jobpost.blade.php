<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>JobSeeker</title>
<!-- 
Magazee Template 
http://www.templatemo.com/tm-514-magazee
-->
  <!-- load CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">    <!-- Google web font "Open Sans" -->
  <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">                                        <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="css/templatemo-style.css">                                     <!-- Templatemo style -->

  <script>
    var renderPage = true;

    if(navigator.userAgent.indexOf('MSIE')!==-1
      || navigator.appVersion.indexOf('Trident/') > 0){
        /* Microsoft Internet Explorer detected in. */
        alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
        renderPage = false;
    }
  </script>

</head>

<body>


<!-- 6th Section -->
<section class="row">
  <div class="col-lg-12 tm-form-header pl-5 pr-5">
    <h2 class="tm-container-inner tm-text-color-white">Post A Job</h2>
  </div>
  <div class="col-lg-12 pl-2 pl-sm-3 pl-md-5 pr-2 pr-sm-3 pr-md-5">
    <form class="ss row tm-container-inner tm-contact-form" method="POST" action="/jobposting">
    	@csrf
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="form-group">
          <input type="text" id="contact_name" name="position" class="form-control" placeholder="Position"  required/>
        </div>
		 <div class="form-group">
          <select name="jobtype">
          	<option value="Freelancer">Freelancer</option>
            <option value="Part Time">Part Time</option>
            <option value="Primary">Primary</option>
            <option value="Temporary">Temporary</option>
          </select>
        </div>
        <div class="form-group">
          <input type="text" id="contact_name" name="degree" class="form-control" placeholder="Degree"  required/>
        </div>
       		<div class="form-group">
		<input type="text" id="contact_name" name="hourlyrate" class="form-control" placeholder="Hourly rate $20"  required/>
        </div>
        <div class="form-group">
          <input type="text" id="contact_name" name="deadline" class="form-control" placeholder="Deadline(Y-M-D)"  required/>
        </div>
        
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="form-group">
		<div class="row">
		<div class="wksex">
                 Worker sex
		</div>
		</div>
          <div class="row">
            <div class="col-lg-4">
              <label>
                <input type="radio" name="gender" value="Male" required> Male
              </label>
            </div>
            <div class="col-lg-4">
              <label>
                <input type="radio" name="gender" value="Female" required> Female
              </label>
            </div>
			<div class="col-lg-4">
              <label>
                <input type="radio" name="gender" value="Both" required> Both
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea id="contact_message" name="description" class="form-control" rows="5" placeholder="Additional Message" required></textarea>
        </div>
		<div class="col-xs-12 mt-4 tm-center">
        <button type="submit" class="btn btn-primary">Post</button>
      </div>
      </div>
    </form>
  </div>
</section>

<!-- Footer -->
<div class="row">
  <div class="col-lg-12">
    <p class="text-center small tm-copyright-text mb-0">Copyright &copy; <span class="tm-current-year">2018</span> Your Company Name | Designed by Template Mo</p>
  </div>
</div>
</div>
<!-- load JS -->
<script src="js/jquery-3.2.1.slim.min.js"></script>         <!-- https://jquery.com/ -->
<script>

  /* DOM is ready
  ------------------------------------------------*/
  $(function(){

    if(renderPage) {
      $('body').addClass('loaded');
    }

    $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright
  });

</script>

</body>
</html>