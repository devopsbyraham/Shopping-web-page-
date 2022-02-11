<?php
include "config.php";

//register 
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']))
{
   
    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $pass = md5($password);
    $sql = "SELECT * FROM user WHERE email = '$email' ";
    $res = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($res);
    if($num >= 0)
    {
        $sql = "INSERT INTO user(`name`,`email`,`password`) VALUES ('$name', '$email', '$pass')";
        $res = mysqli_query($conn,$sql);
        echo "0";      
    }
    else
    {
        echo "1";
    }
}
else if(isset($_POST['mail_in']) && isset($_POST['password_in'])) 
{
   $mail_in = $_POST['mail_in'];
   $password_in = md5($_POST['password_in']);
   
   $sql = "SELECT * FROM user WHERE email = '$mail_in' and password = '$password_in'";
   $res = mysqli_query($conn,$sql);
   $num = mysqli_num_rows($res);

   if($num == 1) 
   {
      while($row=mysqli_fetch_array($res))
      {
          $_SESSION['id']= $row['id'];
          $_SESSION['email']= $row['email'];
         
      }
      echo "0";
   }
   else
   {
     echo "1";
   }
}

else if(isset($_POST['product_id']) && isset($_POST['quantity']))
{
    $uid = $_SESSION['id'];
    $pid = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $order_id = rand(100000,999999);
    $status = "Confirmed";
   // echo $quantity."".$pid;
    $query = "SELECT * FROM sales";
    $res1 = mysqli_query($conn,$query);
    $num = mysqli_num_rows($res1);
    if($num >= 0)
    {      
        
        $sql1 = "INSERT INTO sales(`sale_id`,`user_id`,`product_id`,`order_id`,`quantity`,`order_status`) VALUES('','$uid','$pid','$order_id','$quantity','$status')";
        $res = mysqli_query($conn,$sql1);
            echo "0";
    }
    else
    {
        echo "1";
    }
}
?>