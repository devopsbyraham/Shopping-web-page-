 <?php
include "header.php";
include "config.php";

$sql = "SELECT product_id  FROM product ";
$result = mysqli_query($conn,$sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://localhost/ecommerce/script.js"></script>
    <link href="style.css" rel="stylesheet">

    <title>Pixie-Home</title>
  </head>
  <body>
<section id="content">
   <div class="container">
     <div class="row">
         <div class="col-6">
            <h3>Featured Items</h3>
        </div>
        <div class="col-6 line" >
        <a href="#" stytle="cursor: pointer;">All Products</a>
        <a href="#" stytle="cursor: pointer;">Newest</a>
        <a href="#" stytle="cursor: pointer;">Low Price</a>
        <a href="#" stytle="cursor: pointer;">High Price</a>
        </div>
        </div><br><br>

         <?php 
            while($row = mysqli_fetch_array($result))
            {
                $product_id = $row['product_id'];
                $query1="SELECT * FROM product where product_id = '$product_id'";
                $result1= mysqli_query($conn,$query1);
                while($row1 = mysqli_fetch_array($result1))
	            {
         ?>
                 <form method="POST" name="subt">
                 <div class="row mt-3 mr-auto p-2"  style="float: left;">   
                 <div class="col-12 col-md-12 col-sm-12" style="float: right;">                  
                            <div class="card  pt-3 " href="#" style="width: 18rem; height: 18rem; cursor: pointer;">
                            <a href="checkout.php?product_id=<?php echo $row1['product_id']; ?>"> <img class="card-img-top" href="#"  name="product" style="cursor: pointer;" src="<?php echo $row1['image'];?>" alt="Card image cap"></a>
                            <div class="card-body place-items-start">
                                <h4 class="card-title"><?php echo $row1['product_name'];  ?></h4>
                                <h4 class="card-title color">$<?php echo $row1['price']; ?></h4> 
                            </div>
                 </div>
                 </div>
                        </div>
                     </form>  
                <?php 
                 }
                    }
                 ?>        
    </div>
      </section>
      <!-- footer -->
      <section id="footer" style="top: 250px;float: left;width: 100%;" >
          <section id="end">
            <footer class="footer footer-lg mt-5">
                <div class="container ">
                    <div class="row">
                    <div class="col-md-12 mt-3 p-5 text-center">
                    <h4>Subscribe on PIXIE now</h4>
                    </div>
                    <div class="row mt-1 text-center">
                        <p>Godard four dollar toast prism,authethic heirloom raw denim messenger bag gochujang put a 
                           <br> bird on it celiac readymade vice. 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4 align-item-start p-1">
                <input type="email" style="background: #3a8bcd; color: white; font-size: 20px ; font-weight: 700;" class="form-control p-3 subscribe_input" id="exampleInputEmail1" aria-describedby="emailHelp" Placeholder="Your Email..">
                </div>
                <div class="col-md-6 align-item-start ">
                <button type="button" style="width:80%; color:#3a8bcd;font-size: 20px;
                font-weight: 400;" class="btn btn-light btn-light-lg p-2">Subscribe Now!</button>
                </div>
                </div>
                <section>
                  <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top mt-5" style="bottom:-98px;">
                        <a class="navbar-brand" href="#">
                            <img  src="assets/images/header-logo.png"  alt> 
                        </a>
                    </nav>
                  </div>
                </section>
        </footer>
        <div class="sub-footer">
        <div class="footbar  p-5 justify-contents:space-between text-center" style="left:20%;">
        <ul class="navbar-nav "  style="flex-direction:row;">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">HOME</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="index.php">HELP</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="index.php">PRIVACY POLICY</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">HOW IT WORKS ?</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="index.php">CONTACT US</a>
        </li>
        </ul>
        </div>
        <div class="col-4 col-md-4 col-sm-4 m-auto">
        <span><a  href="#" style="color: #aaa; margin: 20px; width: 100%; font-size: 30px;"><i class="fab fa-facebook" ></i></a></span>
        <span><a  href="#" style="color: #aaa; width: 100%; font-size: 30px;"><i class="fab fa-linkedin-in"></i></a></span>
        <span><a href="#" style="color: #aaa; margin: 20px; width: 100%; font-size: 30px;"><i class="fab fa-twitter"></i></a></span>
        </div>
        <div class="container">
<div class="row">
<p class="nav-item text-center">COPYRIGHT @ 2019 COMPANY NAME - DESIGN:<a href="#"> TOOPLATE</a></p>
</div>
</div>
    </div>
     </section>
</section>
</body>
</html>
