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
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard Admin</title>
        <link rel="stylesheet" href="../../bootstrap-5.2.2-dist/css/bootstrap.min.css">
        <script src="../../bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container mt-3">
        <h1>Data Mahasiswa</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Input Data Mahasiswa
        </button>
        <table border="1" class="table table-hover my-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>TGL LAHIR</th>
                    <th>NO TELPON</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include "koneksi.php";
                    $SQL = "SELECT * FROM tb_mahasiswa";
                    $result = mysqli_query($conn, $SQL);
                    while($row = mysqli_fetch_assoc($result)) :
                ?>
                <tr>
                    <td><?= $row["id"] ?></td>
                    <td><?= $row["nim"] ?></td>
                    <td><?= $row["nama"] ?></td>
                    <td><?= $row["tgl_lahir"] ?></td>
                    <td><?= $row["no_telepon"] ?></td>
                    <td><?= $row["status"] ?></td>
                </tr>
                <?php 
                endwhile;
                $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-primary" href="index.php">Logout</a>
        <!-- The modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Input Data Mahasiswa</h4>
                        <button type="button" class="btn-close"
                            data-bs-dismiss="modal" aria-label="Close"
                        >
                        </button>
                    </div>
                    <form action="mahasiswa.php" method="post">
                        <div class="modal-body">
                            <div class="my-3">
                                <label for="nim">NIM : </label>
                                <input type="text" class="form-control" name="NIM" id="nim" placeholder="Nim">
                            </div>
                            <div class="my-3">
                                <label for="nama">NAMA : </label>
                                <input type="text" class="form-control" name="NAMA" id="nama" placeholder="Nama">
                            </div>
                            <div class="my-3">
                                <label for="tgl_l">Tanggal Lahir : </label>
                                <input type="date" class="form-control" name="TGL_LAHIR" id="tgl_l">
                            </div>
                            <div class="my-3">
                                <label for="no_tlp">Nomor Telepon : </label>
                                <input type="text" class="form-control" name="NO_TLP" id="no_tlp">
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="STATUS" id="radio1" value="1" checked>
                                <label for="radio1" class="form-check-label">Aktif </label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="STATUS" id="radio2" value="0">
                                <label for="radio2" class="form-check-label">Non Aktif</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Save</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>