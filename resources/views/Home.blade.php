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
        body {
            background-image: url('/img/bg-web.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

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

        /* Mulai dari sini */
        .modal-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
        }

        .modal-content {
            border-radius: 0.75rem;
        }

        .modal-body {
            padding: 2rem;
        }

        .modal-body img {
            border-radius: 0.75rem;
            margin-bottom: 1rem;
            max-width: 100%;
        }

        .modal-body p {
            margin-bottom: 1rem;
        }

        .modal-body ul,
        .modal-body ol {
            padding-left: 20px;
        }

        .modal-body li {
            margin-bottom: 0.5rem;
        }

        /* Sampe sini */
    </style>
</head>

<body>

    {{-- navbar started --}}
    {{-- {{ dd($profil) }} --}}

    <x-navbar :profil="$profil" />

    @if (session('message'))
        <div class="toast" style="position: fixed; top: 20px; right: 20px; z-index: 1050;">
            <div class="toast-header">
                <strong class="mr-auto">Pesan</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                {{ session('message') }}
            </div>
        </div>
    @endif


    {{-- section pembukaan --}}

    <section class="container mt-5 overflow-hidden">
        <div class="row">
            <h1>Rekomendasi resep</h1>
        </div>
        <div class="row row-cols-md-3 mt-3 mb-3">


            @foreach ($data as $items)
                {{-- {{ dd($items) }} --}}
                {{-- {{ dd($items) }} --}}
                <div class="col-sm mt-4">
                    <a href="#" class="text-decoration-none text-dark">
                        <div class="card h-100 overflow-hidden shadow">
                            <div class="row">

                                {{-- mulai dari sini --}}
                                <div class="col-8">
                                    <h6 class="card-title d-flex justify-content-center align-items-center">
                                        {{ $items->nama }}</h6>
                                    <p class="text-sm-left m-2" style="font-size: 0.8rem;">
                                        {{ Str::limit($items->bahan, 50) }}</p>
                                    <a href="#" class="text-decoration-none text-dark" data-bs-toggle="modal"
                                        data-bs-target="#resepModal" data-nama="{{ $items->nama }}"
                                        data-asal="{{ $items->asal }}" data-bahan="{{ $items->bahan }}"
                                        data-langkah="{{ $items->langkah }}" data-foto="{{ $items->foto }}">
                                        <p class="text-sm-left m-2" style="font-size: 0.8rem;">selengkapnya>></p>
                                    </a>
                                </div>

                                <!-- Modal Rekomendasi Resep-->
                                <div class="modal fade" id="resepModal" tabindex="-1" aria-labelledby="resepModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="resepModalLabel">Detail Resep</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 id="modalNama" class="text-center mb-3"></h5>
                                                <img id="modalFoto" src="" class="img-fluid mb-3"
                                                    alt="Foto Resep">
                                                <p><strong>Asal:</strong> <span id="modalAsal"></span></p>
                                                <p><strong>Bahan:</strong></p>
                                                <div id="modalBahan"></div>
                                                <p><strong>Langkah:</strong></p>
                                                <div id="modalLangkah"></div>
                                            </div>
                                        </div>
                                    </div>
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="white" class="bi bi-bookmark" viewBox="0 0 16 16">
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="white" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
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

        </div>
    </section>

    <!-- Pilihan kategori -->
    <section class="container mt-5 mb-5 d-flex flex-column justify-content-center align-items-center">
        <h1 class="mb-4">Telusuri Berdasarkan Kategori</h1>
        <div class="scroll-container w-100 d-flex gap-4 mb-1">
            <form method="post" action="{{ route('search') }}">
                @csrf
                <input type="hidden" name="provinsi" value="Jakarta">
                <button type="submit" style="border: none; background: none; padding: 0;">
                    <img src="{{ asset('/img/Kategori/KG_jakarta.png') }}" class="card-img-top"
                        alt="Kategori Jakarta">
                </button>
            </form>
            <form method="post" action="{{ route('search') }}">
                @csrf
                <input type="hidden" name="provinsi" value="jawa barat">
                <button type="submit" style="border: none; background: none; padding: 0;">
                    <img src="{{ asset('/img/Kategori/KG_jabar.png') }}" class="card-img-top"
                        alt="Kategori Jawa Barat">
                </button>
            </form>
            <form method="post" action="{{ route('search') }}">
                @csrf
                <input type="hidden" name="provinsi" value="jawa tengah">
                <button type="submit" style="border: none; background: none; padding: 0;">
                    <img src="{{ asset('/img/Kategori/KG_jateng.png') }}" class="card-img-top"
                        alt="Kategori Jawa Tengah">
                </button>
            </form>
            <form method="post" action="{{ route('search') }}">
                @csrf
                <input type="hidden" name="provinsi" value="banten">
                <button type="submit" style="border: none; background: none; padding: 0;">
                    <img src="{{ asset('/img/Kategori/KG_banten.png') }}" class="card-img-top"
                        alt="Kategori Banten">
                </button>
            </form>
            <form method="post" action="{{ route('search') }}">
                @csrf
                <input type="hidden" name="provinsi" value="jawa timur">
                <button type="submit" style="border: none; background: none; padding: 0;">
                    <img src="{{ asset('/img/Kategori/KG_jatim.png') }}" class="card-img-top"
                        alt="Kategori Jawa Timur">
                </button>
            </form>
            <form method="post" action="{{ route('search') }}">
                @csrf
                <input type="hidden" name="provinsi" value="Yogyakarta">
                <button type="submit" style="border: none; background: none; padding: 0;">
                    <img src="{{ asset('/img/Kategori/KG_jogja.png') }}" class="card-img-top"
                        alt="Kategori Yogyakarta">
                </button>
            </form>
        </div>
    </section>

    <section class="container mt-5 overflow-hidden">
        <div class="row">
            <h1>Banyak disukai</h1>
        </div>
        <div class="row row-cols-md-3 mt-3 mb-3">
            @foreach ($mostSaved as $items)
                {{-- {{ dd($items) }} --}}
                <div class="col-sm mt-4">
                    <a href="#" class="text-decoration-none text-dark">
                        <div class="card h-100 overflow-hidden shadow">
                            <div class="row">

                                {{-- Disini --}}
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

                                {{-- Modal Bayak Disukai --}}
                                {{-- <div class="modal fade" id="resepModal" tabindex="-1"
                                    aria-labelledby="resepModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="resepModalLabel">Detail Resep</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 id="modalNama" class="text-center mb-3"></h5>
                                                <img id="modalFoto" src="" class="img-fluid mb-3"
                                                    alt="Foto Resep">
                                                <p><strong>Asal:</strong> <span id="modalAsal"></span></p>
                                                <p><strong>Bahan:</strong></p>
                                                <div id="modalBahan"></div>
                                                <p><strong>Langkah:</strong></p>
                                                <div id="modalLangkah"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}


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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="white" class="bi bi-bookmark" viewBox="0 0 16 16">
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="white" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
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
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                            </svg>
                            Instagram
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                            </svg>
                            Facebook
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                <path
                                    d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                            </svg>
                            YouTube
                        </a>

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
    {{-- <!-- Option 1: Bootstrap Bundle with Popper -->
    
    {{-- Mulai dari sini --}}
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const resepModal = document.getElementById('resepModal');
            resepModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;

                // Ambil data dari atribut data-*
                const nama = button.getAttribute('data-nama');
                const asal = button.getAttribute('data-asal');
                const bahan = button.getAttribute('data-bahan');
                const langkah = button.getAttribute('data-langkah');
                const foto = button.getAttribute('data-foto');

                // Debugging logs
                console.log('Nama:', nama);
                console.log('Asal:', asal);
                console.log('Bahan:', bahan);
                console.log('Langkah:', langkah);
                console.log('Foto:', foto);

                // Temukan elemen modal
                const modalFoto = document.getElementById('modalFoto');
                const modalNama = document.getElementById('modalNama');
                const modalAsal = document.getElementById('modalAsal');
                const modalBahan = document.getElementById('modalBahan');
                const modalLangkah = document.getElementById('modalLangkah');

                // Fungsi untuk memformat teks bahan menjadi daftar
                function formatBahan(bahan) {
                    return bahan.split('-').filter(item => item.trim() !== '').map(item =>
                        `<li>${item.trim()}</li>`).join('');
                }

                // Fungsi untuk memformat teks langkah menjadi daftar
                function formatLangkah(langkah) {
                    return langkah.split(/\d+\./).filter(item => item.trim() !== '').map((item, index) =>
                        `<li>${item.trim()}</li>`).join('');
                }

                // Isi modal dengan data
                modalFoto.src = foto;
                modalNama.textContent = nama;
                modalAsal.textContent = asal;
                modalBahan.innerHTML = `<ul>${formatBahan(bahan)}</ul>`;
                modalLangkah.innerHTML = `<ol>${formatLangkah(langkah)}</ol>`;
            });
        });
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
