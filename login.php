<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .container{
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            height: 75vh;
            
        }
        .login{
            border: 2px solid purple;
            color: purple;
            padding: 30px;

        }
        input{
            border: 2px solid purple;
            margin: 10px;
            height: 20px;
            width: auto;
        }
        a{
            text-decoration: none;
            color: purple;
            font-size: 15px;
        }
        .container-contact{
    padding-left: 100px;
    background-color: rgb(235, 133, 227);
}
.fitem{
    height: 200px;
    width: 300px;
    margin: 12px;
}
.fitem>img{
    width: 150px;
    margin-bottom: 30px;
}
.fitem>p{
    font-size: 18px;
    
}
    </style>
</head>
<body>
    
    <div class="container">
        <div class="login">
            <form action="logindetails.php" method="post">
            <input type="text" name="username" placeholder="username"><br>
            <input type="password" name="password" placeholder="password"><br>
            <input type="submit" name="login" value="login" onclick="window.location.href='shop.php'"><br>
            <a href="signup.php" >Create new account</a>
            </form>
        </div>
    </div>
    <footer><section id="contacts">
        <div class="container-contact">
          <div class="fitem">
            <img src="img/logoenvogue.png" alt="logo"><br>
           <p>Address: Bagbazar,Kathmandu <br>
          Phone:9840436106 
        Email:envoguefashion@gmail.com
        Follow Us:
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-tiktok"></i> </p>
          </div>
          
          </div>
        </div>
      </section>
      
  
  </footer>
</body>
</html>