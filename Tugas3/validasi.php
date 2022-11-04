<?php 
   if($_POST["name"] == "admin" && $_POST["password"] == "admin123"){
      header("location:dashboard.php");
   }else{
      header("location:coba.html");
   }
?>