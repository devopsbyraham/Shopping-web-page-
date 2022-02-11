<?php
include "config.php";
//include "data.php";
if(!isset($_SESSION['email']))
{
    header("location: login.php");
}
//Insert current values of single checkout
 //Insert into sales
 
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

    <title>Pixie-Checkout</title>
  </head>
  <body>
      <!-- header -->
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
        <div class="collapse navbar-collapse" style="bottom: -75px; flex-direction: row;" id="navbarResponsive">
        <ul class="navbar-nav" >
        <li class="nav-item active">
            <a class="nav-link" href="index.php">HOME</a>
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
        <?php
            if(isset($_SESSION['id']))
            {
        ?>
        <li class="nav-item">
            <a class="nav-link" href=""><i class="fa fa-user" aria-hidden="true"></i><?php echo $_SESSION['email']; ?></a>
        </li>
        <li class="nav-item"><a class="nav-link" href="logout.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Logout</a></li>
        <?php

            }
            else
            {
        ?>
        <li class="nav-item"><a class="nav-link" href="login.php" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
		<li class="nav-item"><a class="nav-link" href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
        <?php

            }

        ?>

        </ul> 
        </div>
        
</div>
</nav>
<br class="ms-5">
</section>
<!-- content -->
<?php
if(isset($_REQUEST['product_id']))
{
 $pid = $_REQUEST['product_id'];
$sql = "SELECT * FROM product WHERE product_id= '$pid'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result))
{
    $product_id = $row['product_id'];
    $product_name = $row['product_name'];
    $product_price = $row['price'];
    
?>
<form method="POST">
    <div class="container">

<div class="row mt-2">
    <h3 class="mt-5"><?php echo $row['product_name'];?></h3>
<div class="col-6 col-md-6 col-sm-6" style="right: 30px; top:-50px; position: relative;">
    <img src="<?php echo $row['image'];?>" height="100%" width="90%" alt="">
</div>
<div class="col-6 col-md-6 col-sm-6">
<h6 style="font-weight:600;" name="productname"><?php echo $row['product_name'];?></h6>
<p style="color: #3a8bcd" name="price">$<?php echo $row['price'];?></p>

<p style="font-size: 16px; font-weight: 520; color: #88817c;"><?php echo $row['description'];?></p>
 <p> Stocks Left: <?php echo $row['stocks'];?></p>
 <div style="flex-direction: row;">
    Quantity:<input type="number" min="1" max="5" class="form-control quantity" placeholder="0" style="width: 20%; padding-top: 5px;"/> 
    <button class="btn btn-primary p-3 order" style="background: #3a8bcd; color: #fff; bottom: 50px; left: 120px; position:relative;">ORDER NOW!</button>
    <input type="text" class="product_id" value="<?php echo $row['product_id'];?>" hidden/>
    <hr>
    <p>Category: pants,bags</p>
        <hr>
        <p>Share: <span><a href="#" style="color: #aaa; width: 50%; font-size: 25px;" ><i class="fab fa-facebook" ></i></a></span><span><a href="#" style="color: #aaa; width: 50%; font-size: 25px;"><i class="fab fa-linkedin-in"></i></a></span><span><a href="#" style="color: #aaa; width: 50%; font-size: 25px;"><i class="fab fa-twitter"></i></a></span></p>
</div>
</div>
</div>
</div>
</form>
<?php
    }
}

    ?>
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
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 <script rel="text/javascript">
     $(document).ready(function()
     {
        $(".order").click(function(e)
         {
            e.preventDefault();
            var quantity = $(".quantity").val();
            var product_id = $(".product_id").val();
            var data = "quantity="+quantity+"&product_id="+product_id;
            if(quantity == "")
            {
                alert("0 Quantity cannot be ordered");
            }
             else
            {
                
               $.ajax({
                url: "data.php",
                method:"POST",
                data: data,
                success:function(data)
                {
                    //alert(data);
                    
                       if(data == 0)
                       {
                           alert("success");
                       window.location = "success.php";
                       }
                       else
                       {
                           alert("error");
                       }
                }
               });
            }
            
         });
     });

 </script>
</body>
</html>