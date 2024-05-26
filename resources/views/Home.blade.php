<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <title>Kuresep masak</title>
</head>

<body>

    {{-- navbar started --}}
    <nav class="navbar navbar-light bg-light mb-3">
        <div class="container-fluid ">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('storage/img/logo.jpeg') }}" style="width: 35px" alt="">
                <h5 class="mx-3">Kuresep masak</h5>
            </a>

            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid" style="width: 900px">
                    <form class="d-flex">
                        <input class="form-control me-2 rounded-pill " style="width: 750px" type="search"
                            placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success rounded-pill bg-primary text-light" type="submit"
                            style="width: 150px">Search</button>
                    </form>
                </div>
            </nav>

            <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- side menu --}}
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <div>
                        <a class="navbar-brand d-flex align-items-center" href="#">
                            <img src="{{ asset('storage/img/logo.jpeg') }}" style="width: 50px" alt="">
                            <h5 class="mx-3">kuresep masak</h5>
                        </a>
                    </div>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>

                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Favorite</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    {{-- section pembukaan --}}

    <section class="container mt-5">
        <div class="col">
            <div class="row">
                <h1>Rekomendasi resep</h1>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <a href="#" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="{{ asset('/img/soto_standby.png') }}" class="card-img-top" alt="Kategori 1">
                            <div class="card-body">
                                <h5 class="card-title">Makanan Khas Jakarta</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="{{ asset('/img/gudeg_standby.png') }}" class="card-img-top" alt="Kategori 2">
                            <div class="card-body">
                                <h5 class="card-title">Makanan Khas Jogja</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="{{ asset('/img/seblak_standby.png') }}" class="card-img-top" alt="Kategori 3">
                            <div class="card-body">
                                <h5 class="card-title">Makanan Khas Jawa Barat</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="{{ asset('/img/seblak_standby.png') }}" class="card-img-top" alt="Kategori 3">
                            <div class="card-body">
                                <h5 class="card-title">Makanan Khas Jawa Barat</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="{{ asset('/img/seblak_standby.png') }}" class="card-img-top" alt="Kategori 3">
                            <div class="card-body">
                                <h5 class="card-title">Makanan Khas Jawa Barat</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="{{ asset('/img/seblak_standby.png') }}" class="card-img-top" alt="Kategori 3">
                            <div class="card-body">
                                <h5 class="card-title">Makanan Khas Jawa Barat</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Pilihan Menu -->
    <section class="container mt-5 mb-5">
        <h1 class="mb-4">Telusuri Berdasarkan</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="card h-100">
                        <img src="{{ asset('/img/tempe_standby.png') }}" class="card-img-top" alt="Kategori 4">
                        <div class="card-body">
                            <h5 class="card-title">Makanan Khas Jawa Tengah</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="card h-100">
                        <img src="{{ asset('/img/rawon_standby.png') }}" class="card-img-top" alt="Kategori 5">
                        <div class="card-body">
                            <h5 class="card-title">Makanan Khas Jawa Timur</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="card h-100">
                        <img src="{{ asset('/img/rabeg_standby.png') }}" class="card-img-top" alt="Kategori 6">
                        <div class="card-body">
                            <h5 class="card-title">Makanan Khas Banten</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="footer-title">About Kuresep Masak</h5>
                    <p>Kuresep Masak membuat masak sehari-hari makin menyenangkan dan mudah, karena dengan menyediakan
                        lebih dari 100 resep masakan khas pulau jawa pada Web Kami.
                        Kami mendukung koki rumahan di seluruh Indonesia untuk membantu satu sama lain dengan
                        berbagi resep dan tips memasak.</p>
                </div>
                <div class="col-md-4">
                    <h5 class="footer-title">Media Sosial</h5>
                    <div class="footer-links">
                        <a href="#">Instagram</a>
                        <a href="#">Facebook</a>
                        <a href="#">YouTube</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5 class="footer-title">Contact Us</h5>
                    <address>
                        1234 Street Name<br>
                        City, State, 56789<br>
                        Email: info@example.com<br>
                        Phone: (123) 456-7890
                    </address>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col text-center">
                    <p class="text-muted">&copy; 2024 Kuresep Masak. Kreativitas Tanpa Batas di Dapur.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
