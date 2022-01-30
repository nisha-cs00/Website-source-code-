

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<style>
    form{
        position: absolute;
        border: 5px;
        box-sizing: 0;
        padding-top: 12%;
        padding-left: 42%;
    }
    form input{
        padding: 5px;
    }
    header{
    height: 100vh;
    
}
/* Navbar container */
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
  padding: 0;
  margin: 0;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  padding-left: 0;
  letter-spacing: 0;
}
.dropdown{float: left;overflow: hidden;}
.dropdown .dropbtn{
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.nav-right{
  float: right;
}
.main{
    top: 40%;
    width: 100%;
    margin: auto;
}

.footer{
    padding-top: 5px;
  background-color: purple;
    overflow: hidden;
    width: 100%;
    height: 40px;
    font-weight: bold;
    position: fixed;
    text-align: center;
    bottom: 0;
}
.footer a{
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

.footer a:hover{
    background-color: white;
    color: black;
}
.footer a.active{
    background-color: #4CAF50;
    color: white;
}

.heading{
    color: #000;
    text-transform: uppercase;
    bottom: 0;
    height: 70px;
    background-color: purple;
}
.heading h1{
    font-size: 32px;
    line-height: 20px;
    padding-bottom: 10px;
    padding-top: 15px;
    background-color: purple;
    color: white;
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
  <a href="productindex.php">Product</a>
  <a href="contact.php">Contact Us</a>
  <div class="nav-right">
    <a href="registration.php">Register here</a>
    <a href="about.php">About Us</a>
    
  </div>  
</div>

</div>


</div>

<?php
require('db.php');
if (isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
  $cpassword = stripslashes($_REQUEST['cpassword']);
  $cpassword = mysqli_real_escape_string($con,$cpassword);
	$trn_date = date("Y-m-d H:i:s");
  $sql="SELECT * FROM users WHERE email='$email'";
  $result=mysql_query($sql);
        $query = "INSERT into `users` (username, password,cpassword, email, trn_date)
VALUES ('$username', '".md5($password)."','".md5($cpassword)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
      
?>
<div class="form">
<center><h1>Registration</h1></center>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required /><br><br>
<input type="email" name="email" placeholder="Email" required /><br><br>
<input type="password" name="password" placeholder="Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
title="Must contain at least one number and one uppercase and
lowercase letter, and at least 8 or more characters" required /><br><br>
<input type="password" name="cpassword" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
title="Must contain at least one number and one uppercase and
lowercase letter, and at least 8 or more characters" required /><br><br>
<input type="submit" name="submit" value="Register" />
Alredy have an account?<a href="login.php">Login</a>
</form>
</div>
<?php }; ?>
<div class="footer">
        <div class="menubar">
  <a href="index.php" class="active">Home</a>
  <a href="logout.php">Logout</a>
 </div>
</div>

</body>
</html>

