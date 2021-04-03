<?php
include "connection.php";

if(isset($_POST['empty1']))
{
	$slot1=$_POST['empty1'];
	$sql1=$conn->query("select otp from data where slot='$slot1' order by $slot DESC LIMIT 1");
	if($sql1-> num_rows!=0)
	{
		$otp1=sqli_fetch_assoc($sql1);
		require_once 'C:\xampp\htdocs\carparking\vendor\autoload.php';

		use Twilio\Rest\Client;

// Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure
		$sql11=$conn->query("select phone from data where otp='$otp' order by $otp DESC LIMIT 1");
		$phone1=sqli_fetch_assoc($sql11);
		$sid    = "AC8d8e68fb3d3f4e155bd4ac1088310260";
		$token  = "6a5614ff8a09f12cb432c0d2d968ff66";
		$twilio = new Client($sid, $token);
		$phone=
		$message = $twilio->messages
        		          ->create("+91".$phone1, // to
                		           array(
                        		       "body" => "your otp is ".$otp1,
                               		"from" => "+12055946845",
                               
                           		)
                 		 );

		//print($message->sid);



	}

}

if(isset($_POST['empty2']))
{
	$slot2=$_POST['empty2'];
	$sql2=$conn->query("select otp from data where slot='$slot2' order by $slot DESC LIMIT 1");
	if($sql2-> num_rows!=0)
	{
		$otp2=sqli_fetch_assoc($sql2);
				//$otp1=sqli_fetch_assoc($sql1);
		require_once 'C:\xampp\htdocs\carparking\vendor\autoload.php';

		use Twilio\Rest\Client;

// Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure

		$sql12=$conn->query("select phone from data where otp='$otp' order by $otp DESC LIMIT 1");
		$phone2=sqli_fetch_assoc($sql12);
		$sid    = "AC8d8e68fb3d3f4e155bd4ac1088310260";
		$token  = "6a5614ff8a09f12cb432c0d2d968ff66";
		$twilio = new Client($sid, $token);

		$message = $twilio->messages
        		          ->create("+91".$phone2, // to
                		           array(
                        		       "body" => "your otp is".$otp2,
                               		"from" => "+12055946845",
                               
                           		)
                 		 );

		


	}

}

if(isset($_POST['empty3']))
{
	$slot3=$_POST['empty3'];
	$sql3=$conn->query("select otp from data where slot='$slot3' order by $slot DESC LIMIT 1");
	if($sql3-> num_rows!=0)
	{
		$otp3=sqli_fetch_assoc($sql3);
		
				//$otp1=sqli_fetch_assoc($sql1);
		require_once 'C:\xampp\htdocs\carparking\vendor\autoload.php';

		use Twilio\Rest\Client;

// Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure

		$sql13=$conn->query("select phone from data where otp='$otp' order by $otp DESC LIMIT 1");
		$phone13=sqli_fetch_assoc($sql13);
		$sid    = "AC8d8e68fb3d3f4e155bd4ac1088310260";
		$token  = "6a5614ff8a09f12cb432c0d2d968ff66";
		$twilio = new Client($sid, $token);

		$message = $twilio->messages
        		          ->create("+91".$phone13, // to
                		           array(
                        		       "body" => "your otp is".$otp3,
                               		"from" => "+12055946845",
                               
                           		)
                 		 );



	}

}


  ?>

