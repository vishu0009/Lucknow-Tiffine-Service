<?php
session_start();
$_SESSION['admin'];
if($_SESSION['admin']==null){
    header("location:adminlogin.php?Plaease login first");
}
?>


<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Dilevery Boy Add </title> 
</head>
<body>
    <div class="container">
        <header>Registration 
            <!-- <a href="dil_boy_login.php" style="border: 1px solid black; padding: 10px; border-radius: 7px; text-decoration: none; margin-left: 500px;">Go to Login</a> -->
        </header>

        <form action="#" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="input-field">
                            <label>Password</label>
                            <input type="password" name="pass" placeholder="Enter your Password" required>
                        </div>
                        <div class="input-field">
                            <label>Confirm Password</label>
                            <input type="password" name="cpass" placeholder="Renter your Password" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="dob" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="mobile" placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gen" required>
                                <option disabled selected>Select gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" name="addr" placeholder="Enter your Location" required>
                        </div>
                        <div class="input-field">
                            <label>Date</label>
                            <input type="date" name="date" placeholder="" required>
                        </div>
                    </div>
                </div>

               <br><br>

                     
                            <input type="submit" name="submit" style="border: none; background-color:blue; color: white; padding: 20px; border-radius: 7px; cursor: pointer;">
                            <i class="uil uil-navigator"></i>
                       
                </div> 
            </div>

        
          
                      
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>

<?php
include 'conn.php';
if(isset($_POST['submit'])){
    $n=$_POST['name'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $mob=$_POST['mobile'];
    $gen=$_POST['gen'];
    $addr=$_POST['addr'];
    $date=$_POST['date'];
   
$sql="insert into `dilevery_boy`(`name`, `pass`, `cpass`, `dob`, `email`, `mob`, `gen`, `adr`, `date`) VALUES ('$n','$pass','$cpass','$dob','$email','$mob','$gen','$addr','$date')";
mysqli_query($con,$sql);
// header("location:index.php");
}

?>
