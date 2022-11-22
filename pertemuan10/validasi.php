<?php 
include "koneksi.php";
$user = $_POST["USER"];
$pass = $_POST["PASS"];
$SQL = "SELECT username, pass
        FROM tb_user
        WHERE ((username='$user') AND (pass='$pass'))";

// membuat query
$result = mysqli_query($conn, $SQL) OR die("gagal data query : ".mysqli_error($conn));
// menampung hasil query

$row = mysqli_fetch_assoc($result);
if($row["username"] == $user && $row["pass"] == $pass){
    $conn->close();
    echo "sukses";
    header("location:mahasiswa.php");
}else{
    $conn->close();
    echo "gagal login";
    header("location:mahasiswa.php");
}
?>