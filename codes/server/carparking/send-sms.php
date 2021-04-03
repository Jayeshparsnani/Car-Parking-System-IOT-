<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once 'C:\xampp\htdocs\carparking\vendor\autoload.php';

use Twilio\Rest\Client;

// Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure
$otp = "123456";
$num= "9834692325";
$sid    = "AC8d8e68fb3d3f4e155bd4ac1088310260";
$token  = "6a5614ff8a09f12cb432c0d2d968ff66";
$twilio = new Client($sid, $token);

$message = $twilio->messages
                  ->create("+91".$num, // to
                           array(
                               "body" => "YOUR OTP IS ".$otp,
                               "from" => "+12055946845",
                               
                           )
                  );

print($message->sid);
?>