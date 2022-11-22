<?php 
    include "koneksi.php";
    $id_del = $_GET["ID_DEL"];
    $query = "DELETE FROM tb_mahasiswa WHERE id=$id_del";
    mysqli_query($conn, $query);
    $conn->close();
    header("location:mahasiswa.php")
?>