<?php
$serverName = "localhost"; 
$username = "root";
$password = "";
$db_name = "kampus_db";
$conn = new mysqli($serverName, $username, $password, $db_name);
if($conn->connect_error){
    die("koneksi gagal: ". $conn->connect_error);
}
?>