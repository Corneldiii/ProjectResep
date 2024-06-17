@props(['profil'])

{{-- {{ dd($profil) }} --}}
<nav class="navbar navbar-light shadow bg-light mb-3">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('/img/Logo_remove.png') }}" style="width: 35px" alt="">
            <h5 class="mx-3">Kuresep masak</h5>
        </a>

        <!-- Navbar untuk perangkat besar -->
        <div class="d-none d-lg-block flex-grow-1">
            <div class="container-fluid d-flex justify-content-center" style="max-width: 900px;">
                <form class="d-flex w-100" method="GET" action="{{ route('searching') }}">
                    @csrf
                    <input class="form-control me-2 rounded-pill" name="cari" style="flex-grow: 1;" type="search"
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
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex gap-2" href="#" id="offcanvasNavbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="row">
                                <div class="col">

                                    <img src="{{ $profil -> foto_profil }}" alt="" style="width: 40px;"
                                        class="rounded">
                                </div>
                                <div class="col">
                                    <p style="font-size: 0.8rem;">{{ $profil -> username }}</p>
                                    <p style="font-size: 0.6rem;margin-top: -10px">{{ $profil -> no_telp }}</p>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('favorite') }}">Favorite</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tambahmenu') }}">Tambahkan menu kreasimu</a>
                    </li>

                </ul>
                <form class="d-flex w-100" method="GET" action="{{ route('searching') }}">
                    @csrf
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                        name="cari">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#343a40" fill-opacity="1"
                    d="M0,128L48,144C96,160,192,192,288,213.3C384,235,480,245,576,213.3C672,181,768,107,864,106.7C960,107,1056,181,1152,176C1248,171,1344,85,1392,42.7L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </div>
    </div>
</nav>
