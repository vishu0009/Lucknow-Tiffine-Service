<?php
 session_start();
 $dil=$_SESSION['dil_boy'];

if($_SESSION['dil_boy']==null){
    header("location:login.php?Plaease login first");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delevery boy Home page</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
       body{
        background: rgb(238,174,202);
        background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
       }
       .main{
        width: 400px;
        border-radius: 10px;
        margin: 100px 400px;
        box-shadow: 0 0 27px 10px white;
        background: rgb(238,174,202);
        background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,0.8409488795518207) 0%);
       }
       h1{
        padding: 50px;
        font-size: 50px;
       }
    
       ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
    align-items: center;
  display: block;
  color: rgb(255, 255, 255);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;

}
    </style>
</head>
<body>
    <div class="nav">
        <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="dil_boy_Profile.php">Profile</a></li>
            <li><a href="cos_orders.php">Costumers Order</a></li>
            <li><a href="dil_boy_logout.php">Logout</a></li>
          </ul>
    </div>
    <div class="main">
<h1>Welecome Bruh!!</h1>
    </div>
    
</body>
</html>



