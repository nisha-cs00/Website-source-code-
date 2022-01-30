<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Printer peripherals</title>
  <link rel="stylesheet" href="css/dd.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  	
  
 
  

<style>

ul {
 margin: 0;
 padding: 0;
 list-style: none;
 width: 150px;
 }
 ul li {
 position: relative;
 }
 li ul {
 position: absolute;
 left: 149px;
 top: 0;
 display: none;
 }
 ul li a {
 display: block;
 text-decoration: none;
 color: #777;
 background: #fff;
 padding: 5px;
 border: 1px solid #ccc;
 border-bottom: 0;
 }
* html ul li { float: left; }
* html ul li a { height: 1%; }
ul {
 margin: 0;
 padding: 0;
 list-style: none;
 width: 150px;
 border-bottom: 1px solid #ccc;
 }
 li:hover ul { display: block; }
* {
  box-sizing: border-box;
}


</style>
	
	

</head>
<body>
<div class="main">
			<div class="heading">
		<h1>PRINTER PERIPHERALS</h1>
	</div>
	<div class="navbar">
  <a href="index.php">Home</a>
   <a href="login.php">Login</a>
  <a href="cartindex.php">Product</a>
  <a href="contact.php">Contact Us</a>
  <div class="nav-right">
  	<a href="registration.php">Register here</a>
  	<a href="about.php">About Us</a>
  	
  </div>  
</div>

</div>


</div>
<ul> 
  <li><a href="#">:</a> 
      <ul> 
      <li><a href="login.php">Login</a></li> 
      <li><a href="adminlogin.php">Admin Login</a></li>  
      </ul> 
    </li> 
    </ul><br><br><br>


    





    <h1><center><b>About Website</b></center></h1><br><br><br>
<center><h4><p>Website to shop Printer Accessories and spare parts.We provide high quality products at an appropriate cost.</p></h4></center><br><br><br>

<center><h1>Our Product Gallery</h1></center><br><br><br><br>

<tr>
<td><img src="images/toner1.jfif" class="img-rounded" alt="Cinque Terre" width="304" height="236"></td>
<td><img src="images/spare1.jfif" class="img-rounded" alt="Cinque Terre" width="304" height="236"></td>
<td><img src="images/catridge1.jfif" class="img-rounded" alt="Cinque Terre" width="304" height="236"></td>
<td><img src="images/HP-05X-CARTRIDGE.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236"></td>
</tr> 


<div class="container">
  <h2></h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/catridge1.jfif" alt="Los Angeles" style="width:100%;height: 450px;">
      </div>

      <div class="item">
        <img src="images/download (1).jpg" alt="Chicago" style="width:100%;height: 450px;">
      </div>
    
      <div class="item">
        <img src="images/images.jpg" alt="New york" style="width:100%;height: 450px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br><<br><br>

	<div class="footer" style="position: relative;">
		<div class="menubar">
  <a href="index.php" class="active">Home</a>
  <a href="logout.php">Logout</a>
 </div>
</div>
</body>
</html>