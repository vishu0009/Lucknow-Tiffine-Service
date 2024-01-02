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
        height: 400px;
        width:50%;
        margin-left:300px;
        margin-top:100px;
        border-radius: 5px;
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
#cus {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#cus td, #cus th {
  border: 1px solid #ddd;
  padding: 8px;
}

#cus tr:nth-child(even){background-color: #f2f2f2;}

#cus tr:hover {background-color: #ddd;}

#cus th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
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

    <table id="cus">
        <form method="post">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Meal</th>
    <th>Quantity</th>
    <th>Days</th>
    <th>Total</th>
    <th>Action</th>

  </tr>
  <?php
  include 'conn.php';
  $sql="select * from `ready4del`";
  $q=mysqli_query($con,$sql);
  while($row=mysqli_fetch_assoc($q)){
    $name=$row['name'];
    $em=$row['email'];
    $ad=$row['addr'];
    $mea=$row['meal'];
    $qua=$row['quan'];
    $nd=$row['nday'];
    $to=$row['total'];
  

?>
  <tr>
    <td><?php echo $name; ?></td>
    <td><?php echo $em; ?></td>
    <td><?php echo $ad; ?></td>
    <td><?php echo $mea; ?></td>
    <td><?php echo $qua; ?></td>
    <td><?php echo $nd; ?></td>
    <td><?php echo $to; ?></td>
    <td><input type="submit" name="save" value="Deliver" style="padding: 7px; background-color: lightgreen; border: none; cursor: pointer; border-radius: 5px;"></td>

  </tr>
  <?php 
if(isset($_POST['save'])){
$sql1="delete from `ready4del`";
mysqli_query($con,$sql1);
header("location:last_action.php");
}
?>
 <?php }?>
</form>
</table>
    </div>
    
</body>
</html>




