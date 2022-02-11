<?php
include "header.php";
include "data.php";
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
    <link href="style.css" rel="stylesheet">

    <title>Pixie-Home</title>
  </head>
<body>
<!-- register new -->
<div class="container mt-5">
    <div class="row">
<div class="col-4 col-md-4 col-sm-4 mt-5 align-items-center m-auto"> 
<form method="POST" action="register.php" style="width: 250%;">
    <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label" style="font-size:17px; font-weight:700;">REGISTER </label>
    </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input type="text" class="form-control w-50" id="name" placeholder="First Name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email Address</label>
    <input type="email" class="form-control w-50" placeholder="Email Address" id="mail" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control w-50" id="password" placeholder="Password">
    <input type="checkbox"  onclick="myFunction()">Show Password
        <script>
        function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }
        </script>
  </div>

  <input type="button" value="Submit" class="btn btn-primary w-50" style="background: #3a8bcd;" id="subt">
</form>
</div>
</div>
</div>

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
        </div>
</nav>
</section>
        </footer>
        <div class="sub-footer">
        <div class="footbar p-5 justify-contents:space-between text-center" style="left:20%;">
        <ul class="navbar-nav "  style="flex-direction:row; background-color: #">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 <script rel="text/javascript">
$(document).ready(function(){
  $("#subt").click(function(e){
    e.preventDefault();
      var name = $("#name").val();
      var email = $("#mail").val();
      var password= $("#password").val();
      var data = "name="+name+"&email="+email+"&password="+password;
      if(name == ""){
        alert("Name field cannot be empty");
      }
      else if(email == ""){
        alert("Email field cannot be empty");
      }
      else if(password == ""){
        alert("password field cannot be empty");
      }
      else
      {
        $.ajax({
          url: "data.php",
          method:"POST",
          data: data,
          success:function(data)
          {
            alert(data);
          }
        });
      }
  });
});
</script>
</body>
</html>