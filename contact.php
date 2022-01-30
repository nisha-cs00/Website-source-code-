<?php
session_start();
require_once 'db.php';

if(isset($_POST['submit_btn'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$msg=$_POST['msg'];

	$insertquery="insert into contactus(name,email,msg)values('$name','$email','$msg')";

	$iquery=mysqli_query($con,$insertquery);

	if($iquery){
		?>
		<script>
			alert("Message Sent");
			location.replace("index.php");
		</script>
		<?php
	}else{
		?>
		<script>
			alert("Message Fail.Try Again");
			location.replace("index.php");
		</script>
		<?php
	}
}
?>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="css/contact.css">
	<style>
		
	</style>
</head>
<body>
<div class="main">
			<div class="heading">
		<h1>PRINTER PERIPHERALS</h1>
	</div>
	<div class="navbar">
  <a href="index.php">Home</a>
  <a href="cartindex.php">Product</a>
  <a href="about.php">About Us</a>
  <a href="contact.php">Contact Us</a>
  <div class="nav-right">
  	<a href="registration.php">Register here</a>
  	<a href="login.php">Login</a>
  	
  </div>  
</div>

</div>

</div>	
<div class="head">
	<h2>Contact Us</h2>
</div>
<form method="post" action="contact.php">
	
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="name" required="true">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" required="true">
	</div>
	
	<div class="input-group">
		<label>Message</label>
		<input type="textarea" name="msg">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="submit_btn">Send</button>
	</div>
	
</form>
<div class="footer">
		<div class="menubar">
  <a href="index.php" class="active">Home</a>
  <a href="logout.php">Logout</a>
</div>
</div>
</body>
</html>


