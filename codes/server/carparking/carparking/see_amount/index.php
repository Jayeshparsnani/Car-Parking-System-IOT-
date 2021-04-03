<?php
include 'connection.php';
$conn=Opencon();

?>
<!doctype html>

<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>Pricing Tables | CodyHouse</title>
	<style type="text/css">
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



</style>

</head>
<body>
<div>
	<div class="topnav">
  		<div id="mySidenav" class="sidenav">
    		<a href="http://localhost/carparking/carparking/monthlyamount.php" id="logout">BACK</a>
  		</div>
	</div>

	<header class="cd-header">
		<h1>Collected Amount</h1>
	</header>

	<div class="cd-pricing-container">
		<div class="cd-pricing-switcher">
			<p class="fieldset">
				<input type="radio" name="duration-1" value="monthly" id="monthly-1" checked>
				<label for="monthly-1">Monthly</label>
				<input type="radio" name="duration-1" value="yearly" id="yearly-1">
				<label for="yearly-1">Yearly</label>
				<span class="cd-switch"></span>
			</p>
		</div> <!-- .cd-pricing-switcher -->
		
		<ul class="cd-pricing-list cd-bounce-invert">
			<li>
				<ul class="cd-pricing-wrapper">
					<li data-type="monthly" class="is-visible">
						<header class="cd-pricing-header">
							<h2>Month</h2>

							<div class="cd-price">
								<?php
										$result = mysqli_query($conn,"SELECT MONTH(DATE_SUB(CURDATE(),INTERVAL 2 MONTH)) from data order by CURDATE() Desc limit 1");

										$row = mysqli_fetch_array($result,MYSQLI_NUM);
										$year=$row['0'];
										echo '<span class="cd-value">' .$year.'</span>';
								?>
								
								
								
							</div>
						</header> <!-- .cd-pricing-header -->

						<div class="cd-pricing-body">
							<ul class="cd-pricing-features">
								<?php
								$result1 = mysqli_query($conn,"SELECT SUM(amount),count(amount) from data where MONTH(date)= MONTH(DATE_SUB(CURDATE(),INTERVAL 2 MONTH)) and YEAR(date)= YEAR(CURDATE())");
								$cust1=mysqli_query($conn,"SELECT count(amount) from data where MONTH(date)= MONTH(DATE_SUB(CURDATE(),INTERVAL 2 MONTH)) and YEAR(date)= YEAR(CURDATE()) and count>5");
										$row1 = mysqli_fetch_array($result1,MYSQLI_NUM);
										$row2 = mysqli_fetch_array($cust1,MYSQLI_NUM);
										$year1=$row1['0'];
										$count1=$row1['1'];
										$Frequent=$row2['0'];
										

								echo '<li><em>'.$year1.'</em> Amount</li>';
								echo '<li><em>'.$count1.'</em> Customers</li>';
								echo '<li><em>'.$Frequent.'</em> Frequent Customers</li>';
								?>
							</ul>
						</div> <!-- .cd-pricing-body -->

						<footer class="cd-pricing-footer">
							<a class="cd-select" href="#">Penultimate Month</a>
						</footer> <!-- .cd-pricing-footer -->
					</li>

					<li data-type="yearly" class="is-hidden">
						<header class="cd-pricing-header">
							<h2>Year</h2>
							<div class="cd-price">
								<?php
										$result = mysqli_query($conn,"SELECT YEAR(DATE_SUB(CURDATE(),INTERVAL 2 YEAR)) from data order by CURDATE() Desc limit 1");

										$row = mysqli_fetch_array($result,MYSQLI_NUM);
										$year=$row['0'];
										echo '<span class="cd-value">' .$year.'</span>';
								?>
							</div>
						</header> <!-- .cd-pricing-header -->

						<div class="cd-pricing-body">
							<ul class="cd-pricing-features">
								<?php
								$result1 = mysqli_query($conn,"SELECT SUM(amount),count(amount) from data where YEAR(date)= YEAR(DATE_SUB(CURDATE(),INTERVAL 2 YEAR))");
								$cust1=mysqli_query($conn,"SELECT count(amount) from data where YEAR(date)= YEAR(DATE_SUB(CURDATE(),INTERVAL 2 YEAR)) and count=3");
										$row1 = mysqli_fetch_array($result1,MYSQLI_NUM);
										$row2 = mysqli_fetch_array($cust1,MYSQLI_NUM);
										$year1=$row1['0'];
										$count1=$row1['1'];
										$Frequent=$row2['0'];
										

								echo '<li><em>'.$year1.'</em> Amount</li>';
								echo '<li><em>'.$count1.'</em> Customers</li>';
								echo '<li><em>'.$Frequent.'</em> Frequent Customers</li>';
								?>
							</ul>
						</div> <!-- .cd-pricing-body -->

						<footer class="cd-pricing-footer">
							<a class="cd-select" href="#">Penultimate Year</a>
						</footer> <!-- .cd-pricing-footer -->
					</li>
				</ul> <!-- .cd-pricing-wrapper -->
			</li>

			<li class="cd-popular">
				<ul class="cd-pricing-wrapper">
					<li data-type="monthly" class="is-visible">
						<header class="cd-pricing-header">
							<h2>MONTH</h2>

							<div class="cd-price">
								
								<?php
										$result = mysqli_query($conn,"SELECT MONTH(DATE_SUB(CURDATE(),INTERVAL 1 MONTH)) from data order by CURDATE() Desc limit 1");

										$row = mysqli_fetch_array($result,MYSQLI_NUM);
										$year=$row['0'];
										echo '<span class="cd-value">' .$year.'</span>';
								?>
							</div>
						</header> <!-- .cd-pricing-header -->

						<div class="cd-pricing-body">
							<ul class="cd-pricing-features">
								<?php
								$result12 = mysqli_query($conn,"SELECT SUM(amount),count(amount) from data where MONTH(date)= MONTH(DATE_SUB(CURDATE(),INTERVAL 1 MONTH)) and YEAR(date)= YEAR(CURDATE())");
								$cust12=mysqli_query($conn,"SELECT count(amount) from data where MONTH(date)= MONTH(DATE_SUB(CURDATE(),INTERVAL 1 MONTH)) and YEAR(date)= YEAR(CURDATE()) and count=5");
										$row12 = mysqli_fetch_array($result12,MYSQLI_NUM);
										$row23 = mysqli_fetch_array($cust12,MYSQLI_NUM);
										$year12=$row12['0'];
										$count12=$row12['1'];
										$Frequent12=$row23['0'];
										

								echo '<li><em>'.$year12.'</em> Amount</li>';
								echo '<li><em>'.$count12.'</em> Customers</li>';
								echo '<li><em>'.$Frequent12.'</em> Frequent Customers</li>';
								?>
							</ul>
						</div> <!-- .cd-pricing-body -->

						<footer class="cd-pricing-footer">
							<a class="cd-select" href="#">Previous Month</a>
						</footer> <!-- .cd-pricing-footer -->
					</li>

					<li data-type="yearly" class="is-hidden">
						<header class="cd-pricing-header">
							<h2>Year</h2>

							<div class="cd-price">
								
								<?php
										$result = mysqli_query($conn,"SELECT YEAR(DATE_SUB(CURDATE(),INTERVAL 1 YEAR)) from data order by CURDATE() Desc limit 1");

										$row = mysqli_fetch_array($result,MYSQLI_NUM);
										$year=$row['0'];
										echo '<span class="cd-value">' .$year.'</span>';
								?>
							</div>
						</header> <!-- .cd-pricing-header -->

						<div class="cd-pricing-body">
							<ul class="cd-pricing-features">
								<?php
								$result1 = mysqli_query($conn,"SELECT SUM(amount),count(amount) from data where YEAR(date)= YEAR(DATE_SUB(CURDATE(),INTERVAL 1 YEAR))");
								$cust1=mysqli_query($conn,"SELECT count(amount) from data where YEAR(date)= YEAR(DATE_SUB(CURDATE(),INTERVAL 1 YEAR)) and count=3");
										$row1 = mysqli_fetch_array($result1,MYSQLI_NUM);
										$row2 = mysqli_fetch_array($cust1,MYSQLI_NUM);
										$year1=$row1['0'];
										$count1=$row1['1'];
										$Frequent=$row2['0'];
										

								echo '<li><em>'.$year1.'</em> Amount</li>';
								echo '<li><em>'.$count1.'</em> Customers</li>';
								echo '<li><em>'.$Frequent.'</em> Frequent Customers</li>';
								?>
							</ul>
						</div> <!-- .cd-pricing-body -->

						<footer class="cd-pricing-footer">
							<a class="cd-select" href="#">Previous Year</a>
						</footer> <!-- .cd-pricing-footer -->
					</li>
				</ul> <!-- .cd-pricing-wrapper -->
			</li>

			<li>
				<ul class="cd-pricing-wrapper">
					<li data-type="monthly" class="is-visible">
						<header class="cd-pricing-header">
							<h2>Month</h2>

							<div class="cd-price">
								
								<?php
										$result = mysqli_query($conn,"SELECT MONTH(CURDATE()) from data order by CURDATE() Desc limit 1");

										$row = mysqli_fetch_array($result,MYSQLI_NUM);
										$year=$row['0'];
										echo '<span class="cd-value">' .$year.'</span>';
								?>
							</div>
						</header> <!-- .cd-pricing-header -->

						<div class="cd-pricing-body">
							<ul class="cd-pricing-features">
								<?php
								$result5 = mysqli_query($conn,"SELECT SUM(amount),count(amount) from data where MONTH(date)= MONTH(CURDATE()) and YEAR(date)= YEAR(CURDATE())");
								$cust5=mysqli_query($conn,"SELECT count(amount) from data where MONTH(date)= MONTH(CURDATE()) and YEAR(date)= YEAR(CURDATE()) and count>5");
										$row5 = mysqli_fetch_array($result5,MYSQLI_NUM);
										$row6 = mysqli_fetch_array($cust5,MYSQLI_NUM);
										$year5=$row5['0'];
										$count5=$row5['1'];
										$Frequent5=$row6['0'];
										

								echo '<li><em>'.$year5.'</em> Amount</li>';
								echo '<li><em>'.$count5.'</em> Customers</li>';
								echo '<li><em>'.$Frequent5.'</em> Frequent Customers</li>';
								?>
							</ul>
						</div> <!-- .cd-pricing-body -->

						<footer class="cd-pricing-footer">
							<a class="cd-select" href="#">This Month</a>
						</footer>  <!-- .cd-pricing-footer -->
					</li>

					<li data-type="yearly" class="is-hidden">
						<header class="cd-pricing-header">
							<h2>Year</h2>
							<div class="cd-price">
								<?php
										$result = mysqli_query($conn,"SELECT YEAR(CURDATE()) from data order by CURDATE() Desc limit 1");

										$row = mysqli_fetch_array($result,MYSQLI_NUM);
										$year=$row['0'];
										echo '<span class="cd-value">' .$year.'</span>';
								?>
								
							</div>
						</header> <!-- .cd-pricing-header -->

						<div class="cd-pricing-body">
							<ul class="cd-pricing-features">
								<?php
								$result1 = mysqli_query($conn,"SELECT SUM(amount),count(amount) from data where YEAR(date)= YEAR(CURDATE())");
								$cust1=mysqli_query($conn,"SELECT count(amount) from data where YEAR(date)= YEAR(CURDATE()) and count=3");
										$row1 = mysqli_fetch_array($result1,MYSQLI_NUM);
										$row2 = mysqli_fetch_array($cust1,MYSQLI_NUM);
										$year1=$row1['0'];
										$count1=$row1['1'];
										$Frequent=$row2['0'];
										

								echo '<li><em>'.$year1.'</em> Amount</li>';
								echo '<li><em>'.$count1.'</em> Customers</li>';
								echo '<li><em>'.$Frequent.'</em> Frequent Customers</li>';
								?>
							</ul>
						</div> <!-- .cd-pricing-body -->

						<footer class="cd-pricing-footer">
							<a class="cd-select" href="http://codyhouse.co/?p=429">This Year</a>
						</footer>  <!-- .cd-pricing-footer -->
					</li>
				</ul> <!-- .cd-pricing-wrapper -->
			</li>
		</ul> <!-- .cd-pricing-list -->
	</div> <!-- .cd-pricing-container -->

				</ul> <!-- .cd-pricing-wrapper -->
			</li>
		</ul> <!-- .cd-pricing-list -->
	</div> <!-- .cd-pricing-container -->	
</div>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>