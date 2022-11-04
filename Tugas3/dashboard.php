<?php 
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Tugas 4 - Bootstrap</title>
        <!--
      NIM   : 211351068
      NAMA  : Irgiyansyah
      KELAS : Malam b
   -->
        <link
            rel="shortcut icon"
            href="../assets/icon/logo-stt-wastu.png"
            type="image/x-icon" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
            crossorigin="anonymous" />
    </head>
    <body class="d-flex flex-column min-vh-100">
        <div
            class="w-full d-flex align-items-center flex-column py-4 bg-primary text-light">
            <h1 class="fs-1 fw-semibold">DASHBOARD ASMIN</h1>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div
                    class="collapse navbar-collapse"
                    id="navbarToggleExternalContent">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#"
                            >Active</a
                        >
                        <a class="nav-link" href="#">Link</a>
                        <a class="nav-link" href="#">Link</a>
                        <a class="nav-link disabled">Disabled</a>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarToggleExternalContent"
                    aria-controls="navbarToggleExternalContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <div class="container mt-5 mb-4">
            <div
                id="carouselExampleIndicators"
                class="carousel slide"
                data-bs-ride="true">
                <div class="carousel-indicators">
                    <button
                        type="button"
                        data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="0"
                        class="active"
                        aria-current="true"
                        aria-label="Slide 1"></button>
                    <button
                        type="button"
                        data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button
                        type="button"
                        data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img
                            src="https://images.unsplash.com/photo-1666543257605-c3266fc6ea25?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=2200&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTY2NzU3NjYzMg&ixlib=rb-4.0.3&q=80&w=8100"
                            class="d-block w-100 img-fluid"
                            alt="photo1" />
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1667150514661-285bac04ddc6?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=3200&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTY2NzU3NjQ4OA&ixlib=rb-4.0.3&q=80&w=8100" class="d-block
                        w-100 img-fluid" alt=photo2" />
                    </div>
                    <div class="carousel-item">
                        <img
                            src="../assets/img/photo32.jpg"
                            class="d-block w-100 img-fluid"
                            alt="photo3" />
                    </div>
                </div>
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span
                        class="carousel-control-prev-icon"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span
                        class="carousel-control-next-icon"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <h2>Some Links</h2>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Maiores, itaque?
                    </p>
                    <ul class="nav flex-column nav-pills">
                        <li class="nav-item">
                            <a
                                class="nav-link active bg-primary"
                                aria-current="page"
                                href="#"
                                >Active</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-8 pt-md-0 pt-4">
                    <h1>Biodata admin</h1>
                    <p>Some text...</p>
                    <p>
                        Nama : Irgiyansyah
                     </p>
                     <p>NIM : 211351068</p>
                     <p>Hobi : Tidur, main game</p>
                </div>
            </div>
        </div>
        <footer
            class="text-white d-flex justify-content-center py-4 mt-3 bg-dark font-semibold">
            Coded by Irgiyansyah
        </footer>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
    </body>
</html>
