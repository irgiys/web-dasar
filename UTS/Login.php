<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-sm">
        <div class="row px-4">
            <div class="col-12 bg-primary text-center text-white  py-5 my-5  rounded-4 border border-2 border-dark">
                <h1>UTS Pemrograman Web</h1>
                <h1>Nama : Irgiyansyah</h1>
                <h1>Nim : 211351068</h1>
            </div>
            <div class="col-12 d-flex bg-info mb-5 py-5 px-5 ">
                <img src="img/logo-stt.png" width="150" height="150">
                <form class="ml-md w-sm" action="validasi.php" method="POST">
                        <h1 class="fs-3">FORM LOGIN</h1>
                        <div class="my-3">
                            <input type="text" class="form-control" placeholder="User" name="user" />
                            </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
    <script src="../bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
</body>
</html>