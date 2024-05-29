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

    <style>
    </style>

</head>

<body>

    {{-- navbar started --}}

    <nav class="navbar navbar-light shadow bg-light mb-3">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('homeadmin') }}">
                <img src="{{ asset('/img/Logo_remove.png') }}" style="width: 35px" alt="">
                <h5 class="mx-3">Kuresep masak</h5>
            </a>

            <!-- Navbar untuk perangkat besar -->
            <div class="d-none d-lg-block flex-grow-1">
                <div class="container-fluid d-flex justify-content-center" style="max-width: 900px;">
                    <form class="d-flex w-100">
                        <input class="form-control me-2 rounded-pill" style="flex-grow: 1;" type="search"
                            placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success rounded-pill bg-primary text-light" type="submit"
                            style="width: 150px;">Search</button>
                    </form>
                </div>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Side menu -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <div>
                        <a class="navbar-brand d-flex align-items-center" href="#">
                            <img src="{{ asset('storage/img/logo.jpeg') }}" style="width: 50px" alt="">
                            <h5 class="mx-3">Kuresep masak</h5>
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
                                <li><a class="dropdown-item" href="{{ route('inputresep') }}">Tambahkan menu
                                        kreasimu</a></li>
                                <li>
                                <li><a class="dropdown-item" href="{{ route('homeadmin') }}">Lihat daftar resep</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('standby') }}">logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>


    {{-- section pembukaan --}}

    <section class="container mt-5 overflow-hidden">
        <div class="row">
            <h1>Daftar Masukan Resep</h1>

        </div>
        <div class="row row-cols-md-3 mt-3 mb-3">
            @foreach ($data as $items)
                {{-- {{ dd($items) }} --}}
                <div class="col-sm mt-4">
                    <a href="#" class="text-decoration-none text-dark">
                        <div class="card overflow-hidden shadow" style="width: 1100px; height: 131px;">
                            <div class="row">
                                <div class="col-sm">
                                    <img src="{{ $items->foto }}" class="card-img-top w-75 h-50">
                                </div>
                                <div class="col-sm d-flex flex-column justify-content-center align-items-center h-50">
                                    <h6 class="card-title ">
                                        {{ $items->nama }}</h6>
                                    <p class="text-sm-left m-2" style="font-size: 0.8rem;">
                                        {{ Str::limit($items->bahan, 150) }}
                                    </p>
                                    <!-- Button trigger modal -->
                                    {{-- <button type="button" class="btn btn-primary d-flex justify-content-center align-items-center" style="height: 20px; width:100px; font-size: 0.8rem;" data-toggle="modal"
                                        data-target="#Modal1">
                                        see more
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="Modal1" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>cekkk</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save
                                                        changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="col-sm d-flex justify-content-center align-items-center h-50 gap-4">
                                    <form action="{{ route('admin_post') }}" method="POST"
                                        class="d-flex justify-content-center align-items-center ">
                                        @csrf
                                        <input type="hidden" name="id_daftar" value="{{ $items->id_daftar }}">
                                        <button type="submit" style="border: none; background: none; padding: 0;"
                                            name="accept">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                                fill="yellow" class="bi bi-check-circle-fill"
                                                style="cursor: pointer;" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </svg>
                                        </button>
                                    </form>
                                    <form action="{{ route('admin_delete') }}" method="POST"
                                        class="d-flex justify-content-center align-items-center">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="id_daftar" value="{{ $items->id_daftar }}">
                                        <button type="submit" style="border: none; background: none; padding: 0;"
                                            name="decline">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                                style="cursor: pointer;" fill="red" class="bi bi-x-circle-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach



        </div>
    </section>

    <!-- Footer -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#343a40" fill-opacity="1"
            d="M0,128L48,144C96,160,192,192,288,213.3C384,235,480,245,576,213.3C672,181,768,107,864,106.7C960,107,1056,181,1152,176C1248,171,1344,85,1392,42.7L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
    <footer class="footer mt-auto py-3 ">
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
