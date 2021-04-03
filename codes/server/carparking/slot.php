<?php
include "connection.php";
$conn=Opencon();
require_once 'C:\xampp\htdocs\carparking\vendor\autoload.php';

use Twilio\Rest\Client;

if(isset($_POST['empty1']))
{
	$slot1=$_POST['empty1'];
	echo $slot1;
	$sql1=$conn->query("SELECT otp from current where slot='$slot1'");
	if($sql1-> num_rows>0)
	{
		$o=mysqli_fetch_assoc($sql1);
		$otp1=$o['otp'];
		
// Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure
		$sql11=mysqli_query($conn,"SELECT phone,amount from current where otp='$otp1'");
		while($data1=mysqli_fetch_assoc($sql11)){
		$phone1=$data1['phone'];
		$amount1=$data1['amount'];
		$sid    = "AC8d8e68fb3d3f4e155bd4ac1088310260";
		$token  = "6a5614ff8a09f12cb432c0d2d968ff66";
		$twilio = new Client($sid, $token);
		$phone=
		$message = $twilio->messages
        		          ->create("+91".$phone1, // to
                		           array(
                        		       "body" => "your otp is ".$otp1."  And your Amount is".$amount1,
                               		"from" => "+12055946845",
                               
                           		)
                 		 );

		//print($message->sid);



	}

}
}

if(isset($_POST['empty2']))
{
	$slot2=$_POST['empty2'];
	$sql2=$conn->query("SELECT otp from current where slot='$slot2'");
	if($sql2-> num_rows!=0)
	{
		$otp2=mysqli_fetch_assoc($sql2);
				//$otp1=sqli_fetch_assoc($sql1);


// Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure

		$sql12=$conn->query("SELECT phone,amount from current where otp='$otp2'");
		
		$data2=mysqli_fetch_assoc($sql12);
		$phone2=$data2['phone'];
		$amount2=$data2['amount'];
		$sid    = "AC8d8e68fb3d3f4e155bd4ac1088310260";
		$token  = "6a5614ff8a09f12cb432c0d2d968ff66";
		$twilio = new Client($sid, $token);

		$message = $twilio->messages
        		          ->create("+91".$phone2, // to
                		           array(
                        		       "body" => "your otp is ".$otp2." And your Amount is".$amount2,
                               		"from" => "+12055946845",
                               
                           		)
                 		 );

		


	}

}

if(isset($_POST['empty3']))
{
	$slot3=$_POST['empty3'];
	$sql3=$conn->query("SELECT otp from current where slot='$slot3'");
	if($sql3-> num_rows!=0)
	{
		$otp3=mysqli_fetch_assoc($sql3);
		
				//$otp1=sqli_fetch_assoc($sql1);


// Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure

		$sql13=$conn->query("SELECT phone from current where otp='$otp3'");
		
		$data3=mysqli_fetch_assoc($sql13);
		$phone3=$data3['phone'];
		$amount3=$data3['amount'];
		$sid    = "AC8d8e68fb3d3f4e155bd4ac1088310260";
		$token  = "6a5614ff8a09f12cb432c0d2d968ff66";
		$twilio = new Client($sid, $token);

		$message = $twilio->messages
        		          ->create("+91".$phone13, // to
                		           array(
                        		       "body" => "your otp is ".$otp3." And your Amount is".$amount3,
                               		"from" => "+12055946845",
                               
                           		)
                 		 );



	}

}


  ?>

