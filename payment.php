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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Text:wght@500&family=Black+Ops+One&family=Bungee+Spice&family=Croissant+One&family=Dancing+Script&family=Lobster&family=PT+Serif&family=Skranji&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya&family=Big+Shoulders+Inline+Text:wght@500&family=Black+Ops+One&family=Bungee+Spice&family=Croissant+One&family=Dancing+Script&family=Lobster&family=PT+Serif&family=Skranji&display=swap" rel="stylesheet">

    <title>Order Food Now</title>
    <style>
      body {
  /* Base64 encoded transparent gif */
  background: url(https://marketplace.canva.com/EAE_VOmudHs/1/0/1600w/canva-delicious-japanese-food-cartoon-vector-aesthetic-%28flyer-%28landscape%29%29-tLjDLN2tYh0.jpg);
}
        *{
            padding: 0;
            margin: 0;
        }
        .nav{
            border: 0 solid black;
            height: 100px;
            width: 100%;
            background-color: #5485FF99;
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
    margin-left: 10px;
    width: 170px;
    background-color: white;
border: thin solid blue;
border-radius: 4px;
display: inline-block;
font: inherit;
line-height: 1.5em;
padding: 0.5em 3.5em 0.5em 1em;
   
}
span{
    margin-left: 20px;
    font-size: 19px;
    font-family: 'Alegreya', serif;
font-family: 'Big Shoulders Inline Text', cursive;
font-family: 'Black Ops One', cursive;
font-family: 'Bungee Spice', cursive;
font-family: 'Croissant One', cursive;
font-family: 'Dancing Script', cursive;
font-family: 'Lobster', cursive;
font-family: 'PT Serif', serif;
font-family: 'Skranji', cursive;
}
.column1,.column2{
    height: 542px;
}
h1,center{
 
  font-family: 'Big Shoulders Inline Text', cursive;
font-family: 'Black Ops One', cursive;
font-family: 'Bungee Spice', cursive;
font-family: 'Croissant One', cursive;
font-family: 'Dancing Script', cursive;
font-family: 'Lobster', cursive;
font-family: 'PT Serif', serif;
font-family: 'Skranji', cursive;
}


    </style>
</head>
<body>
    <div class="nav"><marquee><h1 style="margin-top: 25px; color: #E200F2FC; 	color: white;-webkit-text-stroke: 1px #F8F8F8;text-shadow: 0px 2px 4px red;">Order Your Food 🥗 👌😋</h1></marquee></div>
    <div class="row">
        <div class="column1" style="background-color: #52D4FF84;">
        <form method="post">
       <center style="font-size: 22px;  background: #FF080CDB; color: white;"><u>Food Menu</u></center>
            <br>
            <br>
            <?php 
            $sql="select * from `amount` where email='$user'";
            $q=mysqli_query($con,$sql);
            if($row=mysqli_fetch_assoc($q)){
              $em=$row['email'];
                $meal=$row['meal'];
                $ntiff=$row['ntiff'];
                $nday=$row['nday'];
                $total=$row['total'];
            
            ?>
            <tr>
                <th><ul type="square" style="margin-left: 115px; font-size:17px; font-weight:bold;"><li>Veg: 250$</li></ul></th><br>
                <th><ul type="square" style="margin-left: 115px; font-size:17px; font-weight:bold;"><li>Non-Veg: 300$</li></ul></th>
            </tr>
            <br><br>
            <tr>
                <th><span>Meal :</span><select name="meal" class="round" style="width: 250px; margin-left: 87px;">
                    <option >Select Your Meal</option>
                    <option value="250"<?php if($row['meal']=='250'){ echo "selected";} ?>>Veg</option>
                    <option value="300" <?php if($row['meal']=='300'){ echo "selected";} ?>>Non-Veg</option>
                  </select><br><br></th>
            </tr>
            <tr>
                <th>
                  <span> No. Of Tiffine: </span><input type="number" name="ntiff" placeholder="Number of Tiffine" value="<?php echo $ntiff; ?>">
                </th>
            </tr>
            <br><br>
            <tr>
            <span> No. Of Day : &nbsp; </span>  <th><input type="number" name="nday" placeholder="Number of Days" value="<?php echo $nday; ?>"></th>
            </tr><br><br>
            <tr>
            <!-- <span> Total Amount: </span><th><input type="number" name="total" placeholder="Total Amount" value="<?php echo $total; ?>"></th> -->
            </tr><br><br>
           
            <?php }?>
            
       </div>
       <?php
          $sql1="select `name`, `email`, `mobile`, `gen`, `addr`, `card`, `cardno`, `cvv` from `reg` where email='$user'";
          $q1=mysqli_query($con,$sql1);
          if($row1=mysqli_fetch_assoc($q1)){
            $name=$row1['name'];
            $email=$row1['email'];
            $mobile=$row1['mobile'];
            $gen=$row1['gen'];
            $ad=$row1['addr'];
            $card=$row1['card'];
            $cardno=$row1['cardno'];
            $cvv=$row1['cvv'];
          }
       ?>
        <div class="column2" style="background-color: #FF8CE8A0;"> <center style="font-size: 22px;  background: #FF080CDB; color: white;"><u>Billing</u></center>
            <br>
            <br>
           
            <tr>
                <th>
                <span> Name: </span>  &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" placeholder="Please Enter Your Name" value="<?php echo $name; ?>">
                </th>
                <span> Email: </span>&nbsp;&nbsp;&nbsp;<th><input type="text" name="email" placeholder="Please Enter Your Email" value="<?php echo $email; ?>"></th> </tr><br><br>
                 <tr>
                 <span>Mobile: </span>&nbsp;&nbsp;<th><input type="text" name="mobile" placeholder="Please Enter Your Mobile No." value="<?php echo $mobile; ?>"></th>
                 <span>Address:</span> <th><input type="text" name="addr" placeholder="Please Enter Your Address" value="<?php echo $ad; ?>"></th> </tr><br><br>
                 <tr><th>
                 <span>Gender:</span>&nbsp;&nbsp;&nbsp;<select class="round" name="gen" style="width: 250px;">
                        <option value="">Gender</option>
                        <option value="Male"<?php if($row1['gen']=='Male'){ echo "selected";} ?>>Male</option>
                        <option value="Female"<?php if($row1['gen']=='Female'){ echo "selected";} ?>>Female</option>
                      </select>
                 </th>
                 <th><span>Card:</span>&nbsp;&nbsp;&nbsp;&nbsp;<select class="round" name="card" style="width: 250px;">
                    <option>Select Your Card</option>
                    <option value="Credit Card"<?php if($row1['card']=='Credit Card'){ echo "selected";} ?>>Credit Card</option>
                    <option value="Debit Card"<?php if($row1['card']=='Debit Card'){ echo "selected";} ?>>Debit Card</option>
                  </select></th>
                  </tr><br><br>
                  <tr>
                  <th><span>Card No.:</span><input type="text" name="cardno" placeholder="Please Enter Your Card Detail" value="<?php echo $cardno; ?>"></th>
                  <th><span>CVV : </span>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cvv" placeholder="Please Enter Your CVV No." value="<?php echo $cvv; ?>"></th>
            </tr><br><br><br><br>
            <tr>
                <th><b style="margin-left: 150px;">Payable Amount</b></th>
                <th><input type="text" name="total" value="<?php echo $total; ?>" ></th>
          </tr><br><br><br>
          <input type="submit" name="save" value="Confirm"  style="margin-right: 50px;">
          
          <tr>
            <th><a href="waiting.php" style="color: white; cursor: pointer; padding: 15px; margin-left: 300px; background-color:#24F228FF; border: none; box-shadow: 0 0 10px 2px white; text-decoration: none;">Pay Amount</a></th>

          </tr>
         
          


          </form>
        </div>
      </div>
</body>
</html>
<?php

if(isset($_POST['save'])){
  $n=$_POST['name'];
  $em=$_POST['email'];
  $ad=$_POST['addr'];
  $m=$_POST['meal'];
  $qua=$_POST['ntiff'];
  $day=$_POST['nday'];
  $to=$_POST['total'];
  $sql2="insert into `orders_admin`(`name`, email, `addr`, `meal`, `quan`, `nday`, `total`) VALUES ('$n', '$em', '$ad','$m','$qua','$day','$to')";
  mysqli_query($con, $sql2);
}
?>
