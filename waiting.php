<?php
session_start();
$user=$_SESSION['user'];

if($_SESSION['user']==null){
    header("location:login.php?Plaease login first");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>wait</title>
  <style>
    *{
      margin:0;
      padding: 0;
    }
    html, body { 
  min-height: 100%; 
}
body {
  background: #92c7d6;
  background-image: -webkit-radial-gradient(top, circle cover, #3c6eb4 , #294172 80%);
  background-image: -moz-radial-gradient(top, circle cover, #3c6eb4 , #294172 80%);
  background-image: -o-radial-gradient(top, circle cover, #3c6eb4 , #294172 80%);
  background-image: radial-gradient(top, circle cover, #3c6eb4 , #294172 80%);
}

    .m{
      border-radius: 7px;
      width: 50%;
      margin: 190px 290px;
      background-color: whitesmoke;
      box-shadow: 0 0 20px 5px white;
    }
   
    .content{
      margin-left: 50px;
      font-size: 40px;
    }
    @supports (-webkit-text-stroke: 1px black) {
  .content {
    -webkit-text-stroke: 1px rgb(239, 13, 13);
    -webkit-text-fill-color: white;
  }
}
a{
  border-radius: 5px;
  text-decoration: none;
  padding: 15px;
  color: white;
  margin-left: 490px;
  background-color: rgb(245, 57, 57);
  box-shadow: 0 0 20px 5px red;
}
  </style>
</head>
<body>
  <div class="m">
<div class="content">Your Order is Under Process.......</div>
  </div>
  <div>
    <a href="index.php">Go to Home Page</a>
  </div>
</body>
</html>
<?php
session_unset();
session_destroy();

?>