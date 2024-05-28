<nav class="navbar navbar-light shadow bg-light mb-3">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('/img/Logo_remove.png') }}" style="width: 35px" alt="">
            <h5 class="mx-3">Kuresep masak</h5>
            <p>cek</p>
        </a>

        <!-- Navbar untuk perangkat besar -->
        <div class="d-none d-lg-block flex-grow-1">
            <div class="container-fluid d-flex justify-content-center" style="max-width: 900px;">
                <form class="d-flex w-100">
                    <input class="form-control me-2 rounded-pill" style="flex-grow: 1;" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success rounded-pill bg-primary text-light" type="submit" style="width: 150px;">Search</button>
                </form>
            </div>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
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
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                        <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('inputresep') }}">Tambahkan menu kreasimu</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">logout</a></li>
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
