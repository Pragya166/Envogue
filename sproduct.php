<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Product</title>
    <style>
        .container{
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            height: 75vh;
        }
        .box{
            width:225px;
        }
        form{
            border: 1px solid purple;
            padding: 30px;
            color: purple;
            align-items: center;

        }
        input{
            margin: 10px;
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
    <div class="container" id="spro">
        <form action="sproductdetails.php"  method="post">
            <label for="">Fullname</label><br>
            <input type="text" name="fullname" class="box">  <br>    
            <label for="">Size</label><br>
           <input type="radio" name="size" value="XL" >
           <label for="">XL</label><br>
            <input type="radio" name="size" value="Medium" >
            <label for="">Medium</label><br>
           <input type="radio" name="size" value="Small" >
           <label for="">Small</label><br>
            <label for="">Address</label><br>
            <input type="text" name="address" placeholder="please enter proper delivery address"  class="box"><br>
            <label for="">contact No</label><br>
            <input type="text" name="contact"  class="box"><br>
            <input type="submit" name="submit" value="submit" >
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
  
  <script>
      var fname=document.getElementsByName('fullname').value;
      var size=document.getElementByName('size').value;
      var address=document.getElementsByName('address').value;
      var contact=document.getElementsByName('contact').value;
      function validateform(){
      document.getElementsById("spro").innerHtml="thank you for your order.Our team will call you up"; 
    }

  </script>
</body>
</html>