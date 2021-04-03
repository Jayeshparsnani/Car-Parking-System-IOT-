<?php
include 'connection.php';
$conn=Opencon();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Customers</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style type="text/css">
	.limiter{background-image: url(6.jpg);
			background-size: contain;
	}

			body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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
.contact100-form-title {
 
  position: relative;
  z-index: 1;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  align-items: center;

  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;

  padding: 64px 15px 64px 15px;
}

.contact100-form-title-1 {
  font-family: Poppins-Bold;
  font-size: 20px;
  color: black;
  line-height: 1.2;
  text-align: center;
  padding-bottom: 7px;
}

.contact100-form-title-2 {
  font-family: Poppins-Regular;
  font-size: 15px;
  color: #fff;
  line-height: 1.5;
  text-align: center;
}
.wrap-contact100 {
  width: 1150px;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
  position: relative;
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

	<div class="limiter" >

		
		<div class="container-table100">
				<div class="wrap-table100">
					<div class="wrap-contact100">
				<div class="contact100-form-title" style="background-image: url(bg-01.jpg);">
					<span class="contact100-form-title-1" >
						<b>CUSTOMERS</b>
					</span>

					
				</div>
			

					<div class="table100 ver1">

						<div class="table100-firstcol">
							<table>
								<thead>
									<tr class="row100 head">
										<th class="cell100 column1">Date</th>
									</tr>
								</thead>
								<tbody class="row100 body">
									<?php


	    // Retrieve all records and display them
									    $result = mysqli_query($conn,"SELECT date FROM data ORDER BY date ASC");

									    // Used for row color toggle
									    $oddrow = true;

									    // process every record
									    while( $row = mysqli_fetch_array($result) )
									    {
									        

									        echo '<tr class="row100 body">';
									        echo '   <td class="cell100 column1">'.$row["date"].'</td>';
									  
									        
									        echo '</tr>';
									    }
									?>

								</tbody>
							</table>
						</div>
						
						<div class="wrap-table100-nextcols js-pscroll">
							<div class="table100-nextcols">
								<table>
									<thead>
										<tr class="row100 head">
											<th class="cell100 column2">Slot Alloted</th>
											<th class="cell100 column3">NUmberplate</th>
											<th class="cell100 column4">Contact</th>
											<th class="cell100 column5">Email</th>
											<th class="cell100 column6">Amount</th>
											
										</tr>
									</thead>
									<tbody>
										
									<?php


								    // Retrieve all records and display them
								    $result = mysqli_query($conn,"SELECT * FROM data ORDER BY date ASC");

								    // Used for row color toggle
								    $oddrow = true;

								    // process every record
								    while( $row = mysqli_fetch_array($result) )
								    {
								        
								        echo '<tr class="row100 body">';
								        echo '   <td class="cell100 column2">'.$row["slot"].'</td>';
								        echo '   <td class="cell100 column3">'.$row["number"].'</td>';
								        echo '   <td class="cell100 column4">'.$row["phone"].'</td>';
								        echo '   <td class="cell100 column5">'.$row["email"].'</td>';
								        echo '   <td class="cell100 column6">'.$row["amount"].'</td>';
								        
								        echo '</tr>';
								    }
								?>

									</tbody>
								</table>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})

			$(this).on('ps-x-reach-start', function(){
				$(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
			});

			$(this).on('ps-scroll-x', function(){
				$(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
			});

		});

		
		
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>