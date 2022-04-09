<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbase='envogue';
    $conn=mysqli_connect($servername,$username,$password,$dbase);
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
   
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $uname = $_REQUEST['username']; 
        $pword = md5($_REQUEST['password']);
        echo "$pword";
        // Check user is exist in the database
        $sql = "SELECT * FROM `customer_details` WHERE username='$uname' AND Pword='$pword'";
        $result = $conn->query($sql) or die(mysqli_error($conn));
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $uname;
            // Redirect to user dashboard page
            header("Location: shop.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    }
?>