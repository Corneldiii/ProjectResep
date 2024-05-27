<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <title>Kuresep Masak</title>
</head>
    
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-1 mb-5 bg-white rounded">
        <div class="container">
            <a class="navbar-brand" href="{{ route('standby') }}">
                <img src="/img/Logo_remove.png" alt="Logo" style="width: 50px;" class="mr-2">
                Kuresep Masak
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signup') }}">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Section Pembukaan -->
    <section class="pembukaan d-flex justify-content-center align-items-center mt-4 p-3">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/img/gudeg_standby_1.png') }}" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/img/soto_standby_1.png') }}" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/img/seblak_standby_1.png') }}" class="d-block w-100 img-fluid" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </section>

    <!-- Artikel Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <img src="/img/artikel_1_standby.png" class="card-img-top img-fluid" alt="Article Image">
                    <div class="card-body">
                        <h5 class="card-title">Cari dan temukan resep dari Kuresep Masak</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Temukan lebih dari 100 Resep makanan dari pulau Jawa</h5>
                        <p class="card-text">Mulai dari manisnya makan Jogja , Gurihnya makan Jawa tengah, hingga
                            Pedasnya makan Jawa Barat.</p>
                        <p class="card-text">Dengan memiliki jumlah 100 lebih resep masakan Khas pulau jawa mulai dari
                            makanan berat hingga makan ringan khas pulau jawa.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Simpan Resep kesukaan dan favorit</h5>
                        <p class="card-text">Melalui fitur Simpan resep, anda dapat menyimpan resep untuk dimasak.</p>
                        <p class="card-text">Dengan Web gratis Kuresep Masak, anda dapat menyimpan dan mengelola resep
                            dengan lebih mudah.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/800x400" class="card-img-top img-fluid" alt="Article Image">
                    <div class="card-body">
                        <h5 class="card-title">Simpan Resep langsung di Web</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <img src="" class="card-img-top img-fluid" alt="Article Image">
                    <div class="card-body">
                        <h5 class="card-title">Bagikan resepmu di Kuresep Masak</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Bagikan Resep makanan dari masakanmu</h5>
                        <p class="card-text">Abadikan dan membagikan pengalaman memasak maupun resep dengan
                            menuliskannya di Kuresep Masak.</p>
                        <p class="card-text">Bagikan resepmu dengan Web Kuresep Masak Gratis!.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#343a40" fill-opacity="1"
            d="M0,128L48,144C96,160,192,192,288,213.3C384,235,480,245,576,213.3C672,181,768,107,864,106.7C960,107,1056,181,1152,176C1248,171,1344,85,1392,42.7L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
    <footer class="footer mt-auto py-3 bg-dark text-light">
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
                    <p class="footer-text">&copy; 2024 Kuresep Masak. Kreativitas Tanpa Batas di Dapur.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
