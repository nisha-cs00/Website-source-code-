<?php 
  
include_once('db.php'); 
   
if(isset($_POST['username'])){
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $stmt=$con->prepare("SELECT username,password FROM users where username='$username' and password='$password'");
    $stmt->execute();
    $stmt->bind_result($user,$pass);
    while ($stmt->fetch()) {
        
    }
    if($user==$username)
    {
        ?>
        <script>
            alert("Logged in.");
            location.replace("index.php");
        </script>
        <?php
       
    }
    else{
        $msg="Your username or password is wrong";
    }
    $stmt->close();
   
}
?>