<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <title>Kuresep Masak</title>
    <style>
        body {
            background-image: url('/img/bg---web.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            font-family: 'Arial', sans-serif;

        }

        .card-title:hover {
            color: orange;
        }

        .card-text:hover {
        color: green;
        }

        .card-img-top {
            transition: transform 0.2s;
        }

        .card-img-top:hover {
            transform: scale(1.05);
            /* Membesarkan gambar 1.1x dari ukuran aslinya */
        }

        .bi-emoji-smile-fill {
            color: #FFD700;
            /* Warna kuning */
        }

        .bi-hand-thumbs-up {
            color: #F0C29D;
            /* Warna kulit */
        }

        .custom-section {
            margin-top: -100px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10vh 5%;
        }

        .recipe-text {
            max-width: 45%;
            color: #000;
            /* Warna hitam untuk teks */
            font-family: 'Arial', sans-serif;
            /* Font utama */
        }

        .recipe-text h2 {
            color: red;
            font-size: 24px;
            font-weight: bold;
        }

        .recipe-text h1 {
            color: #000;
            font-size: 48px;
            font-weight: bold;
        }

        .recipe-text p {
            color: #555;
            font-size: 16px;
        }

        .custom-section img {
            max-width: 45%;
            /* Gambar akan menyesuaikan lebar kontainer */
            height: auto;
            /* Pertahankan rasio aspek gambar */
        }

        .login-button {
            margin-top: 20px;
        }

        .login-button a {
            text-decoration: none;
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
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
    </style>
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


    <!-- Bagian Section dengan Gambar dan Teks -->
    <section class="custom-section">
        <div class="recipe-text">
            <h2>Kuresep Masak</h2>
            <h1>Mencari resep masakan yang Lezat dan Mudah dibuat di rumah?</h1>
            <p>Temukan berbagai macam resep yang akan memanjakan lidah Anda. Dari makanan tradisional hingga kuliner
                Modern semua tersedia di sini!</p>
            <div class="login-button">
                <a class="nav-link" href="{{ route('login') }}">Login Sekarang</a>
            </div>
        </div>

        <img src="/img/bakso_standby.png" alt="Bakso Standby">
    </section>

    <!-- Artikel Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4 shadow">
                    <img src="/img/artikel_1_standby.png" class="card-img-top img-fluid" alt="Article Image">
                    <div class="card-body">
                        <h5 class="card-title">Cari dan temukan resep dari Kuresep Masak</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow">
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
                <div class="card mb-4 shadow">
                    <div class="card-body">
                        <h5 class="card-title">Simpan Resep kesukaan dan favorit</h5>
                        <p class="card-text">Melalui fitur Simpan resep, anda dapat menyimpan resep untuk dimasak.</p>
                        <p class="card-text">Dengan Web gratis Kuresep Masak, anda dapat menyimpan dan mengelola resep
                            dengan lebih mudah.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-4 shadow">
                    <!-- <img src="https://via.placeholder.com/800x400" class="card-img-top img-fluid" alt="Article Image"-->
                    <img src="/img/combinasi.jpg" class="card-img-top img-fluid" alt="Article Image">
                    <div class="card-body">
                        <h5 class="card-title">Simpan Resep langsung di Web</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-5">
                <div class="card mb-4 shadow">
                    <img src="/img/Standby Makanan.jpg" class="card-img-top img-fluid" alt="Rawon">
                    <div class="card-body">
                        <h5 class="card-title">Bagikan resepmu di Kuresep Masak</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card mb-4 shadow">
                    <div class="card-body">
                        <h5 class="card-title">Bagikan Resep makanan dari masakanmu</h5>
                        <p class="card-text">Abadikan dan membagikan pengalaman memasak maupun resep dengan
                            menuliskannya di Kuresep Masak.</p>
                        <p class="card-text">Bagikan resepmu dengan Web Kuresep Masak Gratis!.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card mb-4 shadow">
                        <img src="/img/Rebeg Kambing 2.jpg" class="card-img-top" alt="Rebeg Kambing">
                        <div class="card-body">
                            <p class="card-text">Makanan yang berpadukan antra daging kambing yang empuk dan kuah
                                santan yang gurih
                                menambah nikmat nya hidang ini,Mari coba lah resep Makanan Khas Banten ini! <span
                                    class="text-danger">❤️</span></p>
                            <h6 class="card-subtitle mb-2">Rebeg Kambing</h6>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4 my-5">
                    <div class="card mb-4 shadow">
                        <img src="/img/Kerak Telor 2.jpg" class="card-img-top" alt="Kerak Telor">
                        <div class="card-body">
                            <p class="card-text">Makan ini sangat gurih dengan di berikan toping serungdeng.Dengan
                                resep
                                tersebut kami yakin ada menyukai makanan khas dari Dki Jakarta ini! <span
                                    class="">🍳</span></p>
                            <h6 class="card-subtitle mb-2">Kerak Telor</h6>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="card mb-4 shadow">
                        <img src="/img/Combro.jpg" class="card-img-top" alt="Combro">
                        <div class="card-body">
                            <p class="card-text">Hidangan yang terbuat dari singkong yang diisi oleh sambal oncom,
                                berbentuk lonjong, digoreng sampai garing dan bisa jadi kudapan yang mengenyangkan,Resep
                                ini
                                khas dari Jawa Barat! <span class="">❤️</span></p>
                            <h6 class="card-subtitle mb-2">Combro</h6>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4 my-5">
                    <div class="card mb-4 shadow">
                        <img src="/img/Lumpia semarang.jpg" class="card-img-top" alt="Lumpia Semarang">
                        <div class="card-body">
                            <p class="card-text">Kreasikan Momennya dengan Kelezatan Tiada Tanding, Lumpia Semarang
                                Siap Menyulap
                                Setiap Gigitan menjadi Petualangan Rasa yang Menggugah Selera. Nikmati Kombinasi Isi
                                yang Melimpah
                                dari Rebung Segar, Telur, Udang, Daging Pilihan dalam Kulit yang Tipis dan
                                Renyah Menjadi Spesial! <span class="">🌯</span></p>
                            <h6 class="card-subtitle mb-2">Lumpia Semarang</h6>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="card mb-4 shadow">
                        <img src="/img/Onde onde.jpg" class="card-img-top" alt="Onde onde">
                        <div class="card-body">
                            <p class="card-text">Kelezatan yang Meletup, Sensasi Gula Aren yang Menggoda,Onde Onde Siap
                                Membuat Lidah Anda Bergoyang! Nikmati Setiap Gigitannya yang Gurih di Luar, Manis di
                                Dalam.
                                Segera Rasakan Kenikmatannya dan Nikmati Sensasi Khasnya yang Tidak Terlupakan!! <span
                                    class="">🟤</span></p>
                            <h6 class="card-subtitle mb-2">Onde-onde</h6>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4 my-5">
                    <div class="card mb-4 shadow">
                        <img src="/img/Dadar Gulung.jpg" class="card-img-top" alt="Dadar Gulung">
                        <div class="card-body">
                            <p class="card-text">Kesenangan yang Bergulung dalam Setiap Gigitan! 🟢 Dadar Gulung
                                Menggoda
                                dengan Kelembutan Kelapa Parut dan Manisnya Gula Merah. Rasakan Sensasi Nikmatnya yang
                                Membuat
                                Lidah Bergoyang dan Hati Tersenyum. Sajikan Dadar Gulung, Sajikan Kebahagiaan yang Tiada
                                Tara! <span class="">🥥</span></p>
                            <h6 class="card-subtitle mb-2">Dadar Gulung</h6>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="card mb-4 shadow">
                        <img src="/img/Pempek Palembang.jpg" class="card-img-top" alt="Pempek Palembang">
                        <div class="card-body">
                            <p class="card-text">Nikmati Kelezatan Pempek Palembang yang Meletup! Sensasi Ikan yang Menggoda dengan
                                 Kuah Cuko yang Khas, Siap Membuat Lidah Anda Bergoyang! Rasakan Kelembutan Pempeknya yang Gurih di Luar,
                                dan Kenikmatan Cuko yang Pedas Asam. Cicipi dan Nikmati Sensasi  Tidak Terlupakan!! <span class="">🐟</span></p>
                            <h6 class="card-subtitle mb-2">Pempek Palembang</h6>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4 my-5">
                    <div class="card mb-4 shadow">
                        <img src="/img/Es Dawet.jpg" class="card-img-top" alt="Es Dawet">
                        <div class="card-body">
                            <p class="card-text">Kelezatan yang Menyegarkan, Sensasi Manis Gula Aren dan Kelapa yang Menggoda,
                                 Es Dawet Siap Membuat Lidah Anda Menari! Nikmati Setiap Seruputannya yang Segar dan Lembut di Mulut.
                                  Segera Rasakan Kesegarannya dan Nikmati Sensasi Khasnya yang Tidak Terlupakan! <span class="">🥥</span></p>
                            <h6 class="card-subtitle mb-2">Es Dawet</h6>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="card mb-4 shadow">
                        <img src="/img/Es Pisang Ijo.jpg" class="card-img-top" alt="Es Pisang Ijo">
                        <div class="card-body">
                            <p class="card-text">Kelezatan yang Menyegarkan, Sensasi Manis Pisang dan Saus Santan yang Menggoda,
                                 Es Pisang Ijo Siap Membuat Lidah Anda Menari! Nikmati Setiap Gigitannya yang Lembut dan Segar. 
                                 Segera Rasakan Kesegarannya dan Nikmati Sensasi Khasnya yang Tidak Terlupakan!! <span class="">🍌</span></p>
                            <h6 class="card-subtitle mb-2">Es Pisang Ijo</h6>

                        </div>
                    </div>
                </div>


            </div>
            <div class="col-md-4 my-5 mx-auto">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-center">✨ Share Your Foodpic! ✨ </h5>
                        <p class="card-text">Bersiaplah untuk memamerkan keahlian memasakmu! Melalui <strong>Foodpic</strong>, 
                            kamu bisa membagikan beragam kreasi lezat dan pengalaman seru dari resep-resep yang sudah kamu coba di <strong>Kuresep Masak</strong>. 
                            Ayo, tunjukkan hasil masakanmu dan inspirasi yang lain!</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

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

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            $('.toast').toast('show');
        });
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
