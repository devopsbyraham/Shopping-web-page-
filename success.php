<?php
include "config.php";
if(!isset($_SESSION['email'])){
    header("Location: login.php");
}
//session_destroy();

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
   

    <title>Pixie-Success</title>
  </head>
  <body>
  <section>
    <div id="preheader">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <span>Suspendisse laoreet magna vel diam lobortis imperdiet</span>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Navigation -->
    <section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img  src="assets/images/header-logo.png" alt> 
        </a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-responsive="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" style="bottom: -60px;" id="navbarResponsive">
        <ul class="navbar-nav " >
        <li class="nav-item active">
            <a class="nav-link"  href="singleproduct.php">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="singleproduct.php">PRODUCTS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about.php">ABOUT US</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact.php">CONTACT US</a>
        </li>
        
        </ul> 
        </div>
        
</div>
</nav>
<br class="ms-5">
</section>
<!-- contents --> 
<div class="conatiner mt-5 mb-5 ">
    <form method="POST">
                <table border="3" class="table table-hover ">
                    <tr>
                    <th>User id</th>
                    <th>Order id</th>
                    <th>Product id</th>
                    <th>quantity</th>
                    <th>Status</th>
                    <th>Order At</th>
                    </tr>
                    <tr>
                        <?php
                        $sql1 = "SELECT * FROM sales";
                        $result1 = mysqli_query($conn,$sql1);
                        while($row1 = mysqli_fetch_array($result1))
                        {
                            $product_id = $row1['product_id'];
                            $user_id = $_SESSION['id'];   
                         $sql = "SELECT * FROM sales WHERE product_id = '$product_id' AND user_id = '$user_id'";
                         $result = mysqli_query($conn,$sql);
                         while($row = mysqli_fetch_array($result))
                         {
                            ?>
                        <td><?php echo $row['user_id'];?></td>
                        <td><?php echo $row['order_id'];?></td>
                        <td><?php echo $row['product_id'];?></td>
                        <td><?php echo $row['quantity'];?></td>
                        <td><?php echo $row['order_status'];?></td>  
                        <td><?php echo $row['created_at'];?></td>   
                    </tr>
                    <?php
                         }
                        }
                    ?>
                </table>
</form>
</div>
<br>
<br>
<!-- footer -->
<section id="footer">
          <hr>
          <section id="end">
            <footer class="footer footer-lg">
                <div class="container">
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
                <input type="email" style="background: #3a8bcd; color: white; font-size: 20px ; font-weight: 700;" class="form-control p-3  subscribe_input" id="exampleInputEmail1" aria-describedby="emailHelp" Placeholder="Your Email..">
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
        </div>
</nav>
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
            <a class="nav-link" href="contact.php">CONTACT US</a>
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
</body>
</html>