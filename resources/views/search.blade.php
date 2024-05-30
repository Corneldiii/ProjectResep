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

<body>
    <x-navbar />

    {{-- {{ dd($data) }} --}}
    <section class="container mt-5 overflow-hidden">
        <div class="row">
            <h1>Hasil pencarian untuk {{ $cari }}</h1>
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
                                                </button>
                                            @endif
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
                    <h3>Resep belum ada nihh...</h3>
            @endif
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
