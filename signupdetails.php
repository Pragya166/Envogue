<?php
$servername='localhost';
$username='root';
$password='';
$dbase='envogue';
$conn=mysqli_connect($servername,$username,$password,$dbase);
if(!$conn){
    die('Could not Connect My Sql:' .mysql_error());
}
        // removes backslashes
$fname=$_POST['fname'];
$email=$_POST['email'];
$uname=$_POST['username'];
//escapes special characters in a string
$pword=md5($_POST['pword']);
$conn=mysqli_connect($servername,$username,$password,$dbase);
$sql="SELECT * FROM customer_details where Email_id='$email'";

$result=mysqli_query($conn,$sql);
  
if(mysqli_num_rows($result)>0)
{
  echo "email already exists";
      }
else{
  $query="INSERT INTO `customer_details`(fullname,Email_id,username,Pword)VALUES('$fname','$email','$uname','$pword')";
} 
if (!mysqli_query($conn, $query)) {
  echo "Error: " . mysqli_error($conn);
}
else{
  echo "<div class='form'>
  <h3>You are registered successfully.</h3><br/>
  <p class='link'>Click here to <a href='login.php'>Login</a></p>
  </div>";
}

?>

