<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Resep Masakan dari Kuresep Masak</title>
</head>
<style>
    body {
        background-image: url('/img/bg-web.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #000;
            /* Warna scrollbar */
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
</style>

<body>
    <x-navbar :profil="$profil" />

    {{-- {{ dd($data) }} --}}
    <section class="container mt-5 overflow-hidden">
        <div class="row">
            <h1>Hasil resep yang kamu simpen nihh</h1>
        </div>
        <div class="row row-cols-md-3 mt-3 mb-3">


            @if (count($data) > 0)
                @foreach ($data as $items)
                    {{-- {{ dd($items) }} --}}
                    <div class="col-sm mt-4">
                        <a href="#" class="text-decoration-none text-dark">
                            <div class="card h-100 overflow-hidden shadow">
                                <div class="row">

                                    <div class="col-8">
                                        <h6 class="card-title d-flex justify-content-center align-items-center">
                                            {{ $items->nama }}</h6>
                                        <p class="text-sm-left m-2" style="font-size: 0.8rem;">
                                            {{ Str::limit($items->bahan, 50) }}
                                        </p>
                                        <a href="">
                                            <p class="text-sm-left m-2" style="font-size: 0.8rem;">selengkapnya>></p>
                                        </a>
                                    </div>


                                    <div class="col-4">
                                        <img src="{{ $items->foto }}" class="card-img-top">
                                        <form action="{{ route('favpost') }}" method="POST"
                                            class="position-absolute top-0 end-0 m-1">
                                            @csrf
                                            @if ($items->status == 0)
                                                <input type="hidden" name="id_resep" value="{{ $items->id_resep }}">
                                                <button type="submit"
                                                    style="border: none; background: none; padding: 0; cursor: pointer;"
                                                    name="fav">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="white" class="bi bi-bookmark"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z" />
                                                    </svg>
                                                    <p class="text-light" style="font-size: 0.6rem;">
                                                        {{ $items->jumlah_simpan }}</p>
                                                </button>
                                            @endif
                                        </form>
                                        <form action="{{ route('deletefav') }}" method="POST"
                                            class="position-absolute top-0 end-0 m-1">
                                            @csrf
                                            @method('delete')
                                            @if ($items->status == 1)
                                                <input type="hidden" name="id_resep" value="{{ $items->id_resep }}">
                                                <button type="submit"
                                                    style="border: none; background: none; padding: 0; cursor: pointer;"
                                                    name="fav">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="white" class="bi bi-bookmark-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2" />
                                                    </svg>
                                                    <p class="text-light" style="font-size: 0.6rem;">
                                                        {{ $items->jumlah_simpan }}</p>

                                                </button>
                                            @endif
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <h3>Belum ada yang kamu simpan nihh...</h3>
            @endif
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    
</body>

</html>
