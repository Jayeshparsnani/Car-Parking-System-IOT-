<?php
include 'connection.php';
$conn=Opencon();
if(isset($_POST['slot1'])){
	$value=1;
	mysqli_query($conn,"UPDATE slot set info=$value where slotno='slot1'");
}

if(isset($_POST['slot11'])){
	$value=0;
	mysqli_query($conn,"UPDATE slot set info=$value where slotno='slot1'");
}

if(isset($_POST['slot2'])){
	$value=1;
	mysqli_query($conn,"UPDATE slot set info=$value where slotno='slot2'");
}

if(isset($_POST['slot22'])){
	$value=0;
	mysqli_query($conn,"UPDATE slot set info=$value where slotno='slot2'");
}

if(isset($_POST['slot3'])){
	$value=1;
	mysqli_query($conn,"UPDATE slot set info=$value where slotno='slot3'");
}

if(isset($_POST['slot33'])){
	$value=0;
	mysqli_query($conn,"UPDATE slot set info=$value where slotno='slot3'");
}

  ?>