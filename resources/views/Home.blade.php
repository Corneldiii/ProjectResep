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
        .scroll-container {
            overflow-x: auto;
            white-space: nowrap;
            max-width: 670px;
        }

        .scroll-container a {
            display: inline-block;
        }

        .scroll-container img {
            width: 150px;
            height: auto;
        }

        /* Custom scrollbar styles */
        .scroll-container::-webkit-scrollbar {
            height: 8px;
        }

        .scroll-container::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .scroll-container::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        .scroll-container::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>

<body>

    {{-- navbar started --}}

    <x-navbar />

    {{-- section pembukaan --}}

    <section class="container mt-5 overflow-hidden">
        <div class="row">
            <h1>Rekomendasi resep</h1>
        </div>
        <div class="row row-cols-md-3 mt-3 mb-3">

            {{-- {{ dd($data) }} --}}

            @foreach ($data as $items)

                <x-card-food title="{{ $items->nama }}"
                    description="{{ $items->bahan }}"
                    image="{{ $items->foto  }}" alt="Kategori 4" />
            @endforeach



        </div>
    </section>

    <!-- Pilihan kategori -->
    <section class="container mt-5 mb-5 d-flex flex-column justify-content-center align-items-center">
        <h1 class="mb-4">Telusuri Berdasarkan Kategori</h1>
        <div class="scroll-container w-100 d-flex gap-4 mb-1">
            <a href="#" class="text-decoration-none text-dark">
                <img src="{{ asset('/img/tempe_standby.png') }}" class="card-img-top" alt="Kategori 1">
            </a>
            <a href="#" class="text-decoration-none text-dark">
                <img src="{{ asset('/img/tempe_standby.png') }}" class="card-img-top" alt="Kategori 2">
            </a>
            <a href="#" class="text-decoration-none text-dark">
                <img src="{{ asset('/img/tempe_standby.png') }}" class="card-img-top" alt="Kategori 3">
            </a>
            <a href="#" class="text-decoration-none text-dark">
                <img src="{{ asset('/img/tempe_standby.png') }}" class="card-img-top" alt="Kategori 4">
            </a>
            <a href="#" class="text-decoration-none text-dark">
                <img src="{{ asset('/img/tempe_standby.png') }}" class="card-img-top" alt="Kategori 5">
            </a>
            <a href="#" class="text-decoration-none text-dark">
                <img src="{{ asset('/img/tempe_standby.png') }}" class="card-img-top" alt="Kategori 6">
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer mt-auto py-3">
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
