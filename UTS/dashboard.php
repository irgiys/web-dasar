<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="w-full bg-primary text-center py-4">
        <h1 class="text-uppercase text-white">dashboard admin</h1>
    </div>
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Active</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                    <a class="nav-link" href="#">Link</a>
                    <a class="nav-link" href="#">Link</a>
                    <a class="nav-link disabled">Disabled</a>
                </div>
                </div>
            </div>
    </nav>
    <div class="container my-2   md:my-5 md:px-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/photo1.jpeg" class="d-block w-100 h-100" alt="photo 1">
                </div>
            <div class="carousel-item">
                <img src="./img/photo2.jpeg" class="d-block w-100 h-100" alt="photo 2">
            </div>
            <div class="carousel-item">
                <img src="./img/photo3.jpeg" class="d-block w-100 h-100" alt="photo 3">
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <h1 class="fs-7">Menu</h1>
                <nav class="nav flex-column nav-pills">
                    <a class="nav-link active " aria-current="page" href="#">Active</a>
                    <a class="nav-link" href="#">Link</a>
                    <a class="nav-link" href="#">Link</a>
                    <a class="nav-link disabled">Disabled</a>
                </nav>
            </div>
            <div class="col-12 col-md-8">
                <h1>Biodata Admin</h1>
                <p>
                    Nama : Irgiyansyah
                </p>
                <p>
                    Nim : 211351068
                </p>
                <p>
                    Hobi : main game, tidur
                </p>
            </div>
        </div>
    </div>
    <script src="../bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
</body>
</html>