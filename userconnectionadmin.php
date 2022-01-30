<?php 
$connection=mysqli_connect("localhost","root","","register");
/*check connection*/
if(mysqli_connect_errno())
{
echo"Connection Fail". mysqli_connect_error();
}
$username='username';
$email='email';
$password='password';
$date='trn_date';
$sql = "INSERT INTO users (username, email, password,trn_date)
VALUES ('$username', '$email', '$password','$date')";

if (mysqli_query($connection, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>
