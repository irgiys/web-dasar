<?php 
    if(isset($_POST["NIM"])){
        include "koneksi.php";
        $txt_nim = $_POST["NIM"];
        $txt_nama = $_POST["NAMA"];
        $txt_tgl_lahir = $_POST["TGL_LAHIR"];
        $txt_no_tlp = $_POST["NO_TLP"];
        $txt_status = $_POST["STATUS"];
        $SQL = "INSERT INTO tb_mahasiswa(
                nim,
                nama,
                tgl_lahir,
                no_telepon,
                status)
                VALUES(
                    '$txt_nim',
                    '$txt_nama',
                    '$txt_tgl_lahir',
                    '$txt_no_tlp',
                    '$txt_status'
                )
                ";
        mysqli_query($conn, $SQL);
        $conn->close();
        header("location:mahasiswa.php");
    }
?>