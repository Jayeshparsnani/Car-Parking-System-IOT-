<?php
include "connection.php";
$conn=opencon();
$current_date=date('y/m/d');
echo $current_date;

if(isset($_POST['number'],$_POST['phone'],$_POST['email'],$_POST['otp'],$_POST['slot']))
{
	$number=$_POST['number'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$otp=$_POST['otp'];
	$slot=$_POST['slot'];
	$current_date=date('y/m/d');
	$sql22=$conn->query("SELECT amount1 from amount");
	$amount1=mysqli_fetch_assoc($sql22);
	$amount=$amount1['amount1'];
	$sql33=$conn->query("SELECT amount from dicount");
	$discount1=mysqli_fetch_assoc($sql33);
	$discount=$discount1['amount'];

	$final_discount=$amount-($amount*($discount/100));
	$sql1=$conn->query("SELECT count from data where number='$number' ORDER BY count DESC LIMIT 1");

	if($sql1-> num_rows==0)
	{

		$n=1;
		$SQL = "INSERT INTO data (number,phone,email,otp,slot,count,date,amount) VALUES ('$number','$phone','$email','$otp','$slot',$n,'$current_date',$amount)";
		mysqli_query($conn,$SQL);
		mysqli_query($conn,"UPDATE current set number='$number',phone='$phone',email='$email',otp='$otp',count=$n,date='$current_date',amount=$amount where slot='$slot'");
	}
	else
	{	

		$count=mysqli_fetch_assoc($sql1);
		$n=$count['count']+1;
		if($n>2){

			$final=$final_discount;
		}
		else{
			$final=$amount;
		}
		//echo $count['count'];

		$SQL = "INSERT INTO data (number,phone,email,otp,slot,count,date,amount) VALUES ('$number','$phone','$email','$otp','$slot',$n,'$current_date',$final)";
		mysqli_query($conn,$SQL);
		mysqli_query($conn,"UPDATE current set number='$number',phone='$phone',email='$email',otp='$otp',count=$n,date='$current_date',amount=$final where slot='$slot'");	

	}


}


  ?>