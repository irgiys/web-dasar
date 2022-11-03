<?php
$nama = $_POST["nama"];
$nim = $_POST["nim"];
$tgl_lahir = $_POST["tgl_lahir"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA</title>
</head>
<body>
    <center>
        <h1>Data</h1>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><?= $nim ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><?= $tgl_lahir ?></td>
            </tr>
        </table>
    </center>
</body>
</html>
