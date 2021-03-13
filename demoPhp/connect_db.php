<?php
 $host = "127.0.0.1";
 $user = "root";
 $password = "";
 $database = "demo_db";
 $con = mysqli_connect($host , $user, $password, $database);
 if(mysqli_connect_errno()){
       echo"Connect fail".mysqli_connect_errno();
       exit;
 }
 
?>
