<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <title>Login Page</title> 
    <style> 
    body { 
        margin: 0; 
        padding: 0; 
        font-family: sans-serif; 
        background: url() no-repeat; 
        background-size: cover; 
    } 
  
    .login-box { 
        width: 280px; 
        position: absolute; 
        top: 50%; 
        left: 50%; 
        transform: translate(-50%, -50%); 
        color: ; 
    } 
  
    .login-box h1 { 
        float: left; 
        font-size: 40px; 
          border-bottom: 4px solid #191970; 
        margin-bottom: 50px; 
        padding: 13px; 
    } 
  
    .textbox { 
        width: 100%; 
        overflow: hidden; 
        font-size: 20px; 
        padding: 8px 0; 
        margin: 8px 0; 
        border-bottom: 1px solid #191970; 
    } 
  
    .fa { 
        width: px; 
        float: left; 
        text-align: center; 
    } 
  
    .textbox input { 
        border: none; 
        outline: none; 
        background: none; 
   font-size: 18px; 
        float: left; 
        margin: 0 10px; 
    } 
  
    .button { 
        width: 100%; 
        padding: 8px; 
        color: #ffffff; 
        background: none #191970; 
        border: none; 
        border-radius: 6px; 
        font-size: 18px; 
        cursor: pointer; 
        margin: 12px 0; 
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
 <div class="main">
            <div class="heading">
        <h1>PRINTER PERIPHERALS</h1>
    </div>
    <div class="navbar">
  <a href="index.php">Home</a>  
</div>
</div>

  
<body> 
    <form action="loginvalidate.php" method="post"> 
        <div class="login-box"> 
            <h1>Login</h1> 
  
            <div class="textbox"> 
                <i class="fa fa-user" aria-hidden="true"></i> 
                <input type="text" placeholder="Username"
                         name="username" value=""> 
            </div> 
             <div class="textbox"> 
                <i class="fa fa-lock" aria-hidden="true"></i> 
                <input type="password" placeholder="Password"
                         name="password" value=""> 
            </div> 
  
            <input class="button" type="submit"
                     name="login" value="Sign In"> 
        </div>
        Don't have an account?<a href="registration.php">Register</a>
    </form> 

</body> 
  
</html> 