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


background-color: white;
border: thin solid blue;
border-radius: 4px;
display: inline-block;
font: inherit;
line-height: 1.5em;
padding: 0.5em 3.5em 0.5em 1em;
}

input,.round{
    
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
span{
    margin-left: 500px;
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
            <?php

  $sql="select * from `amount` where email='$user'";
 $q=mysqli_query($con,$sql);
 while($row=mysqli_fetch_assoc($q)){
    $meal=$row['meal'];
    $ntiff=$row['ntiff'];
    $nday=$row['nday'];
    $total=$row['total'];
 }
?>        
            <tr>
                <th><ul type="square" style="margin-left: 115px; font-size:17px; font-weight:bold;"><li>Veg: 250₹</li></ul></th><br>
                <th><ul type="square" style="margin-left: 115px; font-size:17px; font-weight:bold;"><li>Non-Veg: 300₹</li></ul></th>
            </tr>
            <br><br>
            <tr>
                <th><span>Meal:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="meal" class="round" style="width: 250px;">
                    <option value="">Select Your Meal</option>
                    <option value="250"<?php if($meal=='250'){ echo "selected";} ?>>Veg</option>
                    <option value="300"<?php if($meal=='300'){ echo "selected";} ?>>Non-Veg</option>
                  </select><br><br></th>
            </tr>
            <tr>
                <th>
                   <span>No. Of Tiffine:</span> <input type="number" name="ntiff" placeholder="Number of Tiffine" value="<?php echo $ntiff; ?>">
                </th>
            </tr>
            <br><br>
            <tr>
                <th><span>No. Of Days:</span>&nbsp;&nbsp;&nbsp;<input type="number" name="nday" placeholder="Number of Days" value="<?php echo $nday; ?>"></th>
            </tr><br><br>
            <tr>
                <th><span>Total Amount :</span><input type="number" name="total" placeholder="Total Amount" value="<?php echo $total; ?>"></th>
            </tr><br><br><br>
            <tr>
                <th><input type="submit" name="submit" value="Confirm" style="cursor: pointer; padding: 10px; margin-left: 650px;"></th>
            </tr><br><br>

            <?php
 
 if(isset($_POST['submit'])){
    $sql2="insert into `orders_admin`(`email`) VALUES ('$user')";
    mysqli_query($con,$sql2);
         header("location:payment.php");
 }
 ?>
 </form>

       </div>
     
      </div>
</body>
</html>
