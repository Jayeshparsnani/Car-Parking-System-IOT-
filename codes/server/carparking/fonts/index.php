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
	
	.limiter{

		background-color: black;
	}
</style>
</head>
<body>
	
	<div class="limiter" >
		<div class="container-table100">
			<div class="wrap-table100">
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