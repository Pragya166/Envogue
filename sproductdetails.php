<?php
$servername='localhost';
$username='root';
$password='';
$dbase='envogue';
$conn=mysqli_connect($servername,$username,$password,$dbase);
if(!$conn){
    die('Could not Connect My Sql:' .mysql_error());
}
$fname=$_POST['fullname'];
$size=$_POST['size'];
$address = $_POST['address'];
$contact = ($_POST['contact']);


$sql  = "INSERT into customer_order(fullname,size,addr,contactno) VALUES ('$fname','$size','$address','$contact')";
    
if (mysqli_query($conn,$sql)) {
    echo"<h3>Thank You For your order. Our team will call you up soon</h3><br/>
    <p class='link'>Click here to <a href='shop.php'>Shop More</a></p>";
            
} 
else {
    echo "<div class='form'>
            <h3>Required fields are missing.</h3><br/>
            <p class='link'>Click here to <a href='sproduct.php'>registration</a> again.</p>
            </div>";
}

?>