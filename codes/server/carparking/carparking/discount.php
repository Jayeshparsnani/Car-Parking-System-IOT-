<!DOCTYPE html>

<html lang="en">
<head>
	<title>SET DISCOUNT</title>
	<meta charset="UTF-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
.topnav {
  overflow: hidden;
  background-color: black;
  position: -webkit-sticky; /* Safari */
  position:relative;
  top: 0;
  height: 60px;
  
}

.topnav a {
  float: left;
  color: rgb(128, 129, 196);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  text-align: center;
}

.topnav a:hover {
  background-color: rgb(0, 0, 0);
  color: rgb(218, 230, 228);
 color: rgb(218, 230, 228);
}
#mySidenav a {
  float: right;
  right: -80px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  font-size: 16px;
  color: white;
  border-radius: a 5px 5px 0;
  height:60px;
  text-align: center;
  padding-top: 20px;
}
#mySidenav a:hover {
  right: 0;
}
#logout {
  top: 80px;
  background-color: red;
}
</style>
</head>
<body>
	

	<div class="container-contact100">
		<div class="contact100-map" style="background-image: url(0.jpg);background-size: cover;"></div>

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(bg-01.jpg);">
				<span class="contact100-form-title-1">
					DISCOUNT
				</span>

				<span class="contact100-form-title-2">
					
				</span>
			</div>

			<form class="contact100-form validate-form" method="post" action="">
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">PERCENT:</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your Discount Percent">
					<span class="focus-input100"></span>
				</div>

				
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="Submit">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
				<?php

					include 'connection.php';
					$conn=Opencon();
					
					if(isset($_POST['Submit']))
					{
						$discount=$_POST['name'];
					
						mysqli_query($conn,"UPDATE dicount set amount=$discount where 1");



					}
				?>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>


