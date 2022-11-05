<?php 
    if($_POST["user"] == "admin" && $_POST["password"] == "admin123"){
        header("location:dashboard.php");
    }else{
        header("location:Login.php");
    }
?>