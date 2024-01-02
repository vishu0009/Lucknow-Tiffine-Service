<?php
session_start();
session_unset();
session_destroy();
header("location: dil_boy_login.php");

?>