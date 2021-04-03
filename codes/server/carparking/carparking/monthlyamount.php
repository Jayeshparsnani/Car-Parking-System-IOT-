<!DOCTYPE html>
<html>
<head>
  
<link rel="stylesheet" href="master.css">
<style>
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
}
.container {
  position: relative;
}
/* Bottom right text */
.text-block {
  position: absolute;
  top: 0px;
  bottom: 20px;
  background-color: #696464;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
  justify-content: center;
  margin-left: 60.5%;
  height: 400px;
  font-style:Arial;
  text-decoration: none;
  width:36.5%;
}
.text-block1 {
  position: absolute;
  top: 0px;
  bottom: 20px;
  background-image: url(users/5.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  color: #504658;
  padding-left: 20px;
  padding-right: 20px;
  justify-content: center;
  margin-right:50%;
  height: 400px;
  font-style:Arial;
  text-decoration: none;
  width: 47%;
}
.img{
  height: 400px;
}
.img1{
  height: 400px;
  margin-left: 50%
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.welcome{
  text-align: center;
}
</style>
</head>
<body>

<div class="topnav">
  <div id="mySidenav" class="sidenav">
    <a href="http://localhost/carparking/carparking/front1.php" id="logout">Back</a>
  </div>
</div>
<h1 class="welcome">ANALYSIS</h1>

<div class="container">
  <img class="img" src="9.jpg" alt="Norway" style="width:60%;">
  <div class="text-block">
    <h2>GIVE DISCOUNT</h2>
    <br>
    <p>Click to Give Discount to Frequent Users</p>
    <a href="http://localhost/carparking/carparking/updateddiscount.php" class="button">Enter</a>
  </div>
</div>
<div class="container">
  <img class="img1" src="report.jpg" alt="Norway" style="width:50%;">
  <div class="text-block1">
    <h2>CHECK COLLECTED AMOUNT</h2>
    <br>
    <h3>Click to check the collected amount</h3>
    <br>
    <a href="http://localhost/carparking/carparking/see_amount/index.php" class="button">Enter</a>
  </div>
  <h1 class="welcome">SET AMOUNT</h1>

<div class="container">
  <img class="img" src="emp.jpg" alt="Norway" style="width:60%;">
  <div class="text-block">
    <h2>SET AMOUNT</h2>
    <br>
    <p>Click to Set Amount</p>
    <a href="http://localhost/carparking/carparking/setamount.php" class="button">Enter</a>
  </div>
</div>

</div>
</body>
</html>