<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
      .navbar i{
    font-size: 1.2rem;
    padding: 0 20px;
    cursor: pointer;
    font-weight: 500;
    transition: 3s ease;
    top: 0;
    left: 0;
}
/* mobile nav */
.navbar-light .navbar-toggler{
    border: none;
    outline: none;

}
.flex-container{
   flex-wrap: wrap;
   flex-grow: 1;
    display: flex;
    background-color: rgb(239, 202, 236);
   align-items: center;
   justify-content: space-evenly;
   margin-top: 100px;
}
.flex-item{
    height: 400px;
    width: 300px;
    background-color: #fff;
    border: 2px solid black;
    margin: 12px;
}
.card-img-top{
    height:190px;
    width: 296px;
}
.btn-primary{
    width: 250px;
}
.container-contact{
    padding-left: 100px;
    background-color: rgb(235, 133, 227);
    padding-top:20px;
    height:250px;
    margin-top:20px;
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 fixed-top">
        <div class="container">
          <img src="img/logoenvogue.png" alt="logo">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i id="bar" class="fas fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.php">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
              <li class="nav-item">
                <i class="fal fa-search"></i>
                <i class="fal fa-shopping-bag"></i>
              </li>
              </ul>
          </div>
        </div>
     </nav>


    </section>
    <section id="clothes">
      <div class="flex-container">
        <div class="flex-item">
          <div class="card" >
            <img class="card-img-top" src="img/img1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Hoodie</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="sproduct.php" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>


        <div class="flex-item">
          <div class="card" >
            <img class="card-img-top" src="img/img2.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">white tshire</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="sproduct.php" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>


        <div class="flex-item">
          <div class="card" >
            <img class="card-img-top" src="img/img3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">crop Tshirt</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="sproduct.php" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>


        <div class="flex-item">
          <div class="card" >
            <img class="card-img-top" src="img/img4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Bluecrop</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="sproduct.php" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="card" >
            <img class="card-img-top" src="img/img5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Tennis Skirt</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="sproduct.php" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="card" >
            <img class="card-img-top" src="img/img6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Pencil Skirt</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="sproduct.php" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="card" >
            <img class="card-img-top" src="img/img7.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Skirt</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="sproduct.php" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="card" >
            <img class="card-img-top" src="img/img8.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Floral Skirt</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="sproduct.php" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="card" >
            <img class="card-img-top" src="img/img9.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Lenin Skirt</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="sproduct.php" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="card" >
            <img class="card-img-top" src="img/img10.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Red Plazo</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="sproduct.php" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="card" >
            <img class="card-img-top" src="img/img11.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Cargo Pant</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="sproduct.php" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="card" >
            <img class="card-img-top" src="img/img2.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">White Tee</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="sproduct.php" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="card" >
            <img class="card-img-top" src="img/img12.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Blue Plazo</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="sproduct.php" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="card" >
            <img class="card-img-top" src="img/img13.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Flared Pant</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="sproduct.php" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="card" >
            <img class="card-img-top" src="img/img14.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Mom Jeans</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="sproduct.php" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="card" >
            <img class="card-img-top" src="img/img15.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="sproduct.php" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="card" >
            <img class="card-img-top" src="img/img16.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="sproduct.php" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="card" >
            <img class="card-img-top" src="img/img17.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="sproduct.php" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="card" >
            <img class="card-img-top" src="img/img17.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="sproduct.php" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="flex-item">
          <div class="card" >
            <img class="card-img-top" src="img/img18.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="sproduct.php" class="btn btn-primary">Buy Now</a>
          </div>
        </div>
        
        
        

        
      </div>
    </section>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>




     <section id="contacts">
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
      
    
</body>
</html>