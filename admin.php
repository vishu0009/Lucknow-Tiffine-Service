<?php
$us=$_POST['username'];
$pass=$_POST['password'];
include 'conn.php';
$sql="select * from admin where id='$us' and pass='$pass'";
$q=mysqli_query($con,$sql);
if($row=mysqli_fetch_assoc($q)){
   
    $db_us=$row['id'];
    $db_pass=$row['pass'];
    session_start();
    $_SESSION['admin']=$row['id'];
    if($us==$db_us and $pass==$db_pass){
        header("location:adminHome.php?Welecome");
    }else{
        header("location:adminlogin.php?username and password does not matched");
    }
}
?>