<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contoh Tampilan Web</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">

</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Kuresep Masak</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">About Kuresep Masak </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Rekomendais Resep dari Kuresep</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sign Up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  {{-- section pembukaan --}}

  <section class="pembukaan d-flex justify-content-center align-items-center mt-4 p-3">
  <div id="carouselExampleIndicators" class="carousel slide mt-5 container" data-bs-ride="carousel">
    <!-- Carousel Indicators -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <!-- Carousel Inner -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('/img/soto_standby.png') }}" class="d-block w-100" alt="Soto">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('/img/seblak_standby.png') }}" class="d-block w-100" alt="Seblak">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('/img/gudeg_standby.png') }}" class="d-block w-100" alt="Gudeg">
      </div>
    </div>
  </div>
</section>



  <!-- Artikel  1 -->
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h2>Judul Artikel</h2>
        <p>Isi artikel Anda disini...</p>
      </div>
      <div class="col-md-4">
        <!-- Sidebar atau ruang untuk elemen lainnya -->
      </div>
    </div>
  </div>

  <!-- Artikel  1 -->
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h2>Judul Artikel</h2>
        <p>Isi artikel Anda disini...</p>
      </div>
      <div class="col-md-4">
        <!-- Sidebar atau ruang untuk elemen lainnya -->
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (diperlukan untuk fitur seperti collapse dan toggle navbar) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>