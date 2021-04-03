<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="1">
<style>
	body{
	margin:0;
	padding:0;
	font-family:sans-serif;
	background-size:cover;
}








.parking{
	margin: 150px 0px 0px 280px;
	width: 400px;
	height: 250px;
	margin-left: 505px;
	padding-left:-10px;
	padding-top: -10px;
	border: 1px;
	background-color: white;	
	top: 30px;
	
}



.hr1
{
	 
	display: block;
  margin-top: 50px;
  margin-bottom: 0.5em;
  margin-left: 40px;
  margin-right: 30px;
  border-style: inset;
  border: 3px solid black;
}
.vl1 {
	
  border-left: 5px solid green;
  height: 130px;
  margin: -12px 350px 50px 395px;
}
.vl2 {
	
  border-left: 5px solid green;
  height: 130px;
  margin: -9px 350px 50px 505px;
}
.vl3 {
	
  border-left: 5px solid green;
  height: 130px;
  margin: -10px 350px 50px 615px;
}
.vl4 {
	
  border-left: 5px solid green;
  height: 130px;
  margin: -12px 350px 50px 725px;
}


.ar1{
	position: absolute;
 	font-size:35px;
 	margin: -35px 0px 0px 192px;
}
.ar2{
	position: absolute;
 	font-size:35px;
 	margin: -35px 0px 0px 82px;
}
.ar3{
	position: absolute;
 	font-size:35px;
 	margin: -35px 0px 0px 302px;
}

.button1
{
	position:absolute;
	width: 50px;
	height: 70px;
	border: none;
	transition: background-color 0.1s ease-out;
	margin:30px 0px 0px 70px;
	border:solid 1px;
	padding-top: -10px;

	
}
.button2
{
	position:absolute;
	width: 50px;
	height: 70px;
	border: none;
	transition: background-color 0.1s ease-out;
	margin:30px 0px 0px 180px;
	border:solid 1px;
	
}
.button3
{

	width: 50px;
	height: 70px;
	border: none;
	transition: background-color 0.1s ease-out;
	margin:30px 0px 0px 290px;
	border:solid 1px;
	
}

.hr2
{
	 
	display: block;
  margin-top: 35px;
  margin-bottom: 0.5em;
  margin-left: 90px;
  margin-right: 260px;
  border-style: inset;
  border: 1px solid black;
}
.hr3
{
	 
	display: block;
  margin-top: -10px;
  margin-bottom: 0.5em;
  margin-left: 200px;
  margin-right: 150px;
  border-style: inset;
  border: 1px solid black;
}
.hr4
{
	 
	display: block;
  margin-top: -10px;
  margin-bottom: -5px;
  margin-left: 310px;
  margin-right: 40px;
  border-style: inset;
  border: 1px solid black;
}


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
.first{
  background-color: #d2fafb;
  height : 350px;
  padding-top: 0px ;
  padding: 0px;
  margin: 0px;
  display:flex;
}
.footer{
  background-color: #95adbe;
  height : 100px;
  padding: 0px;
  margin: 0px;
  display: flex;
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
  text-align: center;
}
body{

	background-image: url(5.jpg);
	background-size: cover;
}
.middle{
	text-align: center;
	margin-left: -20px;
}
.tx{
	position: absolute;
	margin:-10px 0px 0px 420px;
	font-size: 30px;
}
.tx1{
	position: absolute;
	margin:-10px 0px 0px -40px;
	font-size: 30px;	
}
</style>
</head>
<body>
<div>
	<div class="topnav">
  		<div id="mySidenav" class="sidenav">
    		<a href="http://localhost/carparking/carparking/front1.php" id="logout">BACK</a>
  		</div>
	</div>

<div class="middle">
	<h1>PARKING SLOTS</h1>
</div>


<div class="parking">
<hr class="hr1">
	<div class="vl1" style=" border-left:3px solid ; left:150px; position:absolute">
	</div>
	<div class="vl2" style=" border-left:3px solid ; left:150px; position:absolute">
	</div>
	<div class="vl3" style=" border-left:3px solid ; left:150px; position:absolute">
	</div>
	<div class="vl4" style=" border-left:3px solid ; left:150px; position:absolute">
	</div>

<?php
		include 'connection.php';
		$conn=Opencon();

		$result = mysqli_query($conn,"SELECT * FROM slot where slotno='slot1'");
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$value1=$row['info'];

		$result2 = mysqli_query($conn,"SELECT * FROM slot where slotno='slot2'");
		$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
		$value2=$row2['info'];

		$result3 = mysqli_query($conn,"SELECT * FROM slot where slotno='slot3'");
		$row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC);
		$value3=$row3['info'];
		if ($value1==1)
		{
			echo "<button class='button1' style='background-color:red'> Car slot 1</button>";
		} 
		else
		{
			echo "<button class='button1' style='background-color:green'> Car slot 1</button>";
		}

		
		if ($value2==1)
		{
			echo "<button class='button2' style='background-color:red'> Car slot 2</button>";
		} 
		else
		{
			echo "<button class='button2' style='background-color:green'> Car slot 2</button>";
		}

	
		if ($value3==1)
		{
			echo "<button class='button3' style='background-color:red'> Car slot 3</button>";
		} 
		else
		{
			echo "<button class='button3' style='background-color:green'> Car slot 3</button>";
		}
	?>
	


<hr class="hr2">
<hr class="hr3">
<hr class="hr4">
<span class="ar1" >&#8593;</span>
<span class="ar2" >&#8593;</span>
<span class="ar3" >&#8593;</span>
<p class="tx">Entry</p>
<p class="tx1">Exit</p>
</div>

	




</div>
</body>
</html>