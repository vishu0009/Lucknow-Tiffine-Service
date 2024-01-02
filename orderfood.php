<?php
session_start();
$user=$_SESSION['user'];

if($_SESSION['user']==null){
    header("location:login.php?Plaease login first");
}

include 'conn.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Food Now</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .nav{
            border: 0 solid black;
            height: 100px;
            width: 100%;
            background-color: dodgerblue;
        }
        .column1 {
  float: left;
  width: 40%;
}
.column2 {
  float: left;
  width: 60%;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
select {

margin-left: 100px;
background-color: white;
border: thin solid blue;
border-radius: 4px;
display: inline-block;
font: inherit;
line-height: 1.5em;
padding: 0.5em 3.5em 0.5em 1em;
}

input,.round{
    margin-left: 500px;
    background-color: white;
border: thin solid blue;
border-radius: 4px;
display: inline-block;
font: inherit;
line-height: 1.5em;
padding: 0.5em 3.5em 0.5em 1em;
   
}
.column1,.column2{
    height: 542px;
    width: 100%;
}li{
    margin-left:480px;
}
    </style>
</head>
<body>
    <div class="nav"><marquee><h1 style="margin-top: 25px;">Order Your Food</h1></marquee></div>
    <div class="row">
        <div class="column1" style="background-color: aqua;">
        <form method="post">
       <center style="font-size: 22px;">Food Menu</center>
            <br>
            <br>
        
            <tr>
                <th><ul type="square" style="margin-left: 115px; font-size:17px; font-weight:bold;"><li>Veg: 250₹</li></ul></th><br>
                <th><ul type="square" style="margin-left: 115px; font-size:17px; font-weight:bold;"><li>Non-Veg: 300₹</li></ul></th>
            </tr>
            <br><br>
            <tr>
                <th>
                    <input type="text" name="email" placeholder="Enter Your Email">
                </th>
            </tr><br><br>
            <tr>
                <th><select name="meal" class="round" style="width: 267px;">
                    <option >Select Your Meal</option>
                    <option value="250">Veg</option>
                    <option value="300">Non-Veg</option>
                  </select><br><br></th>
            </tr>
            <tr>
                <th>
                    <input type="number" name="ntiff" placeholder="Number of Tiffine">
                </th>
            </tr>
            <br><br>
            <tr>
                <th><input type="number" name="nday" placeholder="Number of Days"></th>
            </tr><br><br>
            <tr>
                <th><input type="hidden" name="total" placeholder="Total Amount"></th>
            </tr><br><br>
            <tr>
                <th><input type="submit" name="submit" value="Confirm" style="cursor: pointer; padding: 10px;"></th>
            </tr>
            <tr>
                <th><a href="payment.php" style="cursor: pointer; padding: 10px; margin-left: 100px; text-decoration: none; border: 1px solid black; border-radius: 5px;"> Go To Payment</a></th>
            </tr>

</form>

<?php
$sql1="select * from amount where email='$user'";
$q1=mysqli_query($con,$sql1);
if($row=mysqli_fetch_assoc($q1)){
    echo "Your Order Completed";
}




else{
if(isset($_POST['submit'])){
  $email=$_POST['email'];
$meal=$_POST['meal'];
$ntiff=$_POST['ntiff'];
$nday=$_POST['nday'];
$total=$_POST['total'];
$total=($meal*$ntiff)*$nday;
$sql="insert into `amount`( email, `meal`, `ntiff`, `nday`, `total`) VALUES ('$email','$meal','$ntiff','$nday','$total')";
mysqli_query($con,$sql);
header("location:userorder.php?id=1");
}}
?>
       </div>
        
      </div>
</body>
</html>
