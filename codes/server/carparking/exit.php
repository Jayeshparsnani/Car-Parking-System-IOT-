


 <!DOCTYPE html>
<html lang="en">
<head>
	<title>Exit</title>
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
</head>
<body>


	<div class="container-contact100">
		<div class="contact100-map" style="background-image: url(natue.jpg);"></div>

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(bg-01.jpg);">
				<span class="contact100-form-title-1">
					EXIT
				</span>

				<span class="contact100-form-title-2">
					COME AGAIN!
				</span>
			</div>

			<form class="contact100-form validate-form" method="post" action="">
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">OTP:</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your OTP">
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


<?php
	include 'connection.php';
	$conn=Opencon();
	if(isset($_POST['Submit'],$_POST['name'])){
			$otp=$_POST['name'];
		
			$sql1=mysqli_query($conn,"SELECT * from current where otp='$otp'")or die( mysqli_error($conn));
			
			
			

				 while($row = mysqli_fetch_assoc($sql1)){
				
				 	
				 $number=$row['number'];
				
				 $slot=$row["slot"];
				 $amount=$row["amount"];
				$date=$row["date"];
				$email=$row["email"];
				$phone=$row["phone"];
				Closecon($conn);

				$to_email =$email;
				$subject ='PARKING RECEIPT';
				$htmlContent='<!DOCTYPE html>
						<html lang="en" >

						<head>
					  <meta charset="UTF-8">
					  <title>Hover Order Confirmation</title>
					  
					  
					  
					  
					  
					</head>

					<body>

					  
					<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml">
					<head>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
					<meta name="viewport" content="width=device-width">

					<!-- For development, pass document through inliner -->
					<style type="text/css">


					* {
						margin: 0;
						padding: 0;
						font-size: 100%;
						font-family: "Open Sans", Helvetica, Arial, sans-serif;
						line-height: 1.65;
					}

					img {
						max-width: 100%;
						margin: 0 auto;
						display: block;
					}

					body, .body-wrap {
						width: 97% !important;
						margin: 0 auto;
						height: 100%;
						background: #efefef;
						-webkit-font-smoothing: antialiased;
						-webkit-text-size-adjust: none;
					}

					a {
						color: #3ab795;
						text-decoration: none;
					}

					.text-center {
						text-align: center;
					}

					.text-right {
						text-align: right;
					}

					.text-left {
						text-align: left;
					}

					.button a {
						display: inline-block;
						color: #ffffff;
						background: #3ab795;
						border: 2px solid #3ab795;
						padding: 9px 20px 10px;
						text-transform: uppercase;
						font-size: 12px;
						font-weight: normal;
					}
						
					.highlight {
						font-size: 22px;
						font-weight: bold;
					}

					h1, h2, h3, h4, h5, h6 {
						margin-bottom: 20px;
						line-height: 1.25;
					}

					h1 {
						font-size: 32px;
					}

					h2 {
						font-size: 28px;
					}

					h3 {
						font-size: 24px;
					}

					h4 {
						font-size: 20px;
					}

					h5 {
						font-size: 16px;
					}

					p, ul, ol {
						font-size: 14px;
						font-weight: normal;
						margin-bottom: 20px;
					}

					p.footnote {
						font-size: 10px;
						margin-top: 5px;
					}

					.container {
						display: block !important;
						clear: both !important;
						margin: 20px auto 0 !important;
						max-width: 580px !important;
					}

					.container table {
						width: 100% !important;
						border-collapse: collapse;
					}

					.container .preheader {
						font-size: 12px;
						padding: 5px 5px 5px 5px;
						color: #adadad;
						text-align: center;
					}

					.container .masthead {
						padding: 80px 0;
						background: #2a333b;
						color: white;
						background-image: url("https://s3.ca-central-1.amazonaws.com/hover-email/hover_logo_75x21.png");
						background-repeat: no-repeat;
						background-position: center 15px;
						border-radius: 10px 10px 0 0;
					}

					.container .masthead h1 {
						margin: 0 auto !important;
						max-width: 90%;
					}

					.container .content {
						background: white;
						padding: 20px 20px 0 20px;
					}

					.container .content.footer {
						background: none; 
						padding-top: 0;
					}

					.container .content.footer p {
						margin-bottom: 0;
						color: #888;
						text-align: center;
						font-size: 12px;
					}

					.container .content.footer a {
						color: #888;
						text-decoration: none;
						font-weight: bold;
					 }
					</style>
					</head>


					<body style="width:97% !important;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;height:100%;background-color:#efefef;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;-webkit-font-smoothing:antialiased;-webkit-text-size-adjust:none;">

					<table class="body-wrap" style="width:97% !important;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;height:100%;background-color:#efefef;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;-webkit-font-smoothing:antialiased;-webkit-text-size-adjust:none;">
						<tr>
							<td class="container" style="display:block !important;clear:both !important;margin-top:20px !important;margin-bottom:0 !important;margin-right:auto !important;margin-left:auto !important;max-width:580px !important;">


					<!-- Message start -->
								<table style="width:100% !important;border-collapse:collapse;">
									<tr>
					                    <td class="preheader" style="font-size: 10px;color:#adadad;text-align:center; padding:5px;">This is your Parking Receipt.</td>
									</tr>
									<tr>
					                    <td align="center" class="masthead" style="padding-top:80px;padding-bottom:80px;padding-right:0;padding-left:0;background-color:#2a333b;
											<h1 style="line-height:1.25;font-size:32px;margin-top:0 !important;margin-bottom:0 !important;margin-right:auto !important;margin-left:auto !important;max-width:90%;">Receipt Confirmation</h1>
										</td>
									</tr>
									<tr>
										<td class="content" style="background-color:white;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;padding-top:20px;padding-bottom:0;padding-right:20px;padding-left:20px;">
											<p style="font-size:14px;font-weight:normal;margin-bottom:20px;">Hello Customer,</p>
											
											<p style="font-size:14px;font-weight:normal;margin-bottom:20px;">Thank you for Parking! A record of your Parking information appears below. Please keep this email as the confirmation of your amount paid.</p>

					<p style="font-size:18px;font-weight:bold;margin-bottom:20px;">RECEIPT </p>

					<p style="font-size:14px;font-weight:normal;margin-bottom:20px;">Parking Date:'.strip_tags($date).' </p>
						
					<table style="width: 90% margin: 0 auto; margin-bottom: 20px;">
						<tr style="background-color: #eeeeee;">
							<th style="font-size:13px;font-weight:bold;text-align:left;padding: 3px 6px;" width="70%">INFORMATION</th>
							<th style="font-size:13px;font-weight:bold;text-align:right;padding: 3px 6px;" width="30%" align="right">Billing Date</th>
						</tr>
						
						
						<tr style="border-bottom: solid 1px #f7f7f7;">
					        <td style="font-size:13px;font-weight:normal;padding: 0px 6px;vertical-align:top;">Number Plate:'.strip_tags($number).'<ul style="margin-left: 20px;font-size:13px;font-weight:normal;list-style-type: none;"><li>Slot:'.strip_tags($slot).'</li></ul></td>
							<td style="font-size:13px;font-weight:normal;padding: 0px 6px;vertical-align:top;" align="right">'.strip_tags($date).'</td>
							</tr>
						
						
						
						
					</table>
					<table style="width: 40%!important; margin-left: 60%; margin-bottom: 20px;">
						<tr>
					        <td style="font-size:13px;font-weight:normal;padding: 0px 6px;vertical-align:top;" align="right"> Amount:</td>
							<td style="font-size:13px;font-weight:normal;padding: 0px 6px;vertical-align:top;" align="right">'.strip_tags($amount).'</td>
						</tr>
						
						
						
						<tr>
							</tr><tr style="border-top: solid 2px #ccc;">
					        <td style="font-size:13px;font-weight:bold;padding: 0px 6px;vertical-align:top;" align="right">Total:</td>
							<td style="font-size:13px;font-weight:bold;padding: 0px 6px;vertical-align:top;" align="right">'.strip_tags($amount).'</td>
						</tr>
					</table>



					                        <p style="font-size:14px;font-weight:normal;margin-bottom:20px;">If you have questions about this Receipt, you can simply reply to this email with your questions and we will get back to you shortly with an answer.</p>

					<p style="font-size:14px;font-weight:normal;margin-bottom:20px;">Thanks again for your Parking! We appreciate that you have chosen us.</p>

					<!-- signature begin -->
					<p style="font-size:14px;font-weight:normal;margin-bottom:20px;">Thanks,</p>
					<p style="font-size:14px;font-weight:normal;margin-bottom:20px;">Smart Parking System</p>
					<p style="font-size:14px;font-weight:normal;margin-bottom:20px;"><br>
					Smart Parking System is a service of IOT, an VES accredited registrar since 2019.</p>
					</td>
					</tr>
					</table>
					<!-- body end -->
					</td>
					</tr>

					<!-- footer begin -->
					<tr>
					<td class="container" style="display:block !important;clear:both !important;margin-top:20px !important;margin-bottom:0 !important;margin-right:auto !important;margin-left:auto !important;max-width:580px !important;">
					<table style="width:100% !important;border-collapse:collapse;">
					<tr>
					<td class="content footer" align="center" style="background-color:#efefef;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;padding-top:20px;padding-bottom:0;padding-right:20px;padding-left:20px;">
					</td>
					</tr>
					</table>
					</td>
					</tr>
					<!-- footer end -->

					</table>
					<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>
					</html>';
			$headers = "MIME-Version: 1.0" . "\r\n"; 
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
			 
			// Additional headers 
			//$headers .= 'From: parsnani71@gmail.com' .'<'.$from.'>' . "\r\n"; 
			$headers .= 'Cc: parsnani71@gmail.com' . "\r\n"; 
			$headers .= 'Bcc:'.$to_email . "\r\n"; 

			// $headers = 'From: parsnani71@gmail.com';
			mail($to_email,$subject,$htmlContent,$headers);

			}
		}
	
		
?>

