<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
        .signupform{
            display: flex;
            flex-wrap:wrap;
            align-items: center;
            justify-content: center;
            height: 75vh;

        }
        form{
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
        .container-contact{
    padding-left: 100px;
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
    <div class="signupform">
        <form action="signupdetails.php" method="post" onsubmit="return formvalidation()">
            <h2 align="center">Sign Up</h2>
           
            <input type="text" name="fname" placeholder="fullname"><br>
            <span id="fname" style="color: red;"></span>
            <input type="email" name="email" placeholder="EMAIL" ><br>
            <span id="email" style="color: red;"></span>
            <input type="username" name="username" placeholder="Username" ><br>
            <span id="username" style="color: red;"></span>
            <input type="password" name="pword" placeholder="password" > <br>
            <span id="password" style="color: red;"></span>
            <button type="submit" name="submit">Sign Up</button>
    </form>
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
      <script type="text/javascript">
        function validation() {
            //alert(document.getElementById('user').value)
            var fname = document.getElementByName('fname').value;
            var email = document.getElementByName('email').value;
            var username= document.getElementByName('username').value;
            var password = document.getElementById('password').value;
          
           
      if(fname==""){
          document.getElementById('fname').innerHTML="please enter your name";
          return false;
      }
          if (usrname == "") {
                document.getElementById('username').innerHTML = "**please enter your username**";
                return false;
            }
            if((username.length <= 2) || (username.length > 20)){
                document.getElementById('username').innerHTML = "**Length must be between 2 and 20**";
                return false;
            }
            if(!isNaN(username)){
                document.getElementById('username').innerHTML = "**Number is not allowed**";
            return false;
            }

 
            if(password ==""){
                document.getElementById('password').innerHTML = "**Please enter your password**";
                return false;
            }
           if((password.length <=8) || (password.length > 20)){
                document.getElementById('password').innerHTML = "**Password is not long enough**";
            return false;
            }
           
           if(email == ""){
                document.getElementById('email').innerHTML = "**Please enter your Email Address";
                return false;
            }
           }

    </script>

</body>
</html>