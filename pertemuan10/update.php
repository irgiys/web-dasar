<?php 
    include "koneksi.php";
    $txt_id = $_POST["ID_EDIT"];
    $txt_nim = $_POST["NIM"];
    $txt_nama = $_POST["NAMA"];
    $txt_tgl_lahir = $_POST["TGL_LAHIR"];
    $txt_no_tlp = $_POST["NO_TLP"];
    $txt_status = $_POST["STATUS"];
    $SQL = "UPDATE tb_mahasiswa SET
            nim = '$txt_nim',
            nama = '$txt_nama',
            tgl_lahir = '$txt_tgl_lahir',
            no_telepon = '$txt_no_tlp',
            status = '$txt_status'
            WHERE id = '$txt_id;'
    ";
    if(mysqli_query($conn,$SQL)){
        $conn->close();
        header("location:mahasiswa.php");
    }else{
        $conn->close();
        echo "Error updating : " . mysqli_error($conn);
    }
?>