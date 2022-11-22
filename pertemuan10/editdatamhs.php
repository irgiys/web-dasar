<?php 
    include "koneksi.php";
    $id_edit = $_GET["ID_EDIT"];
    $query = "SELECT * FROM tb_mahasiswa WHERE id=$id_edit";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <script src="../../bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    <style>
        .container{
            width:80%;
            box-shadow: 0 3px 20px rgba(0,0,0,0,5);
            padding: 40px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="alert alert-primary text-container mt-3">Edit Data Mahasiswa</h1>
    <form action="update.php" method="post">
        <div class="modal-body">
            <div class="my-3">
                <label>ID : <?= $row["id"] ?></label>
                <input type="hidden" name="ID_EDIT" value=<?= $row["id"] ?>>
            </div>
            <div class="my-3">
                <label for="nim">NIM : </label>
                <input value=<?= $row["nim"] ?> type="text" class="form-control" name="NIM" id="nim" placeholder="Nim">
            </div>
            <div class="my-3">
                <label for="nama">NAMA : </label>
                <input value=<?= $row["nama"] ?> type="text" class="form-control" name="NAMA" id="nama" placeholder="Nama">
            </div>
            <div class="my-3">
                <label for="tgl_l">Tanggal Lahir : </label>
                <input value=<?= $row["tgl_lahir"] ?> type="date" class="form-control" name="TGL_LAHIR" id="tgl_l">
            </div>
            <div class="my-3">
                <label for="no_tlp">Nomor Telepon : </label>
                <input value=<?= $row["no_telepon"] ?> type="text" class="form-control" name="NO_TLP" id="no_tlp" name="ID_EDIT">
            </div>
            <?php 
                if($row["status"] == 1) :
            ?>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="STATUS" id="radio1" value="1" checked>
                <label for="radio1" class="form-check-label">Aktif </label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="STATUS" id="radio2" value="0">
                <label for="radio2" class="form-check-label">Non Aktif</label>
            </div>
            <?php endif ?>
            <?php 
                if($row["status"] != 1) :
            ?>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="STATUS" id="radio1" value="1" >
                <label for="radio1" class="form-check-label">Aktif </label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="STATUS" id="radio2" value="0" checked>
                <label for="radio2" class="form-check-label">Non Aktif</label>
            </div>
            <?php endif ?>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Save</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
    </form>
</div>
</body>
</html>