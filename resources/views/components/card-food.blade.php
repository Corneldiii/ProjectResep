<div class="col-sm mt-4">
    <a href="#" class="text-decoration-none text-dark">
        <div class="card h-100 overflow-hidden shadow">
            <div class="row">
                <div class="col-8">
                    <h6 class="card-title d-flex justify-content-center align-items-center">{{ $title }}</h6>
                    <p class="text-sm-left m-2" style="font-size: 0.8rem;">
                        {{ Str::limit($description, 80) }}
                    </p>
                </div>
                <div class="col-4">
                    <img src="{{ asset($image) }}" class="card-img-top" alt="{{ $alt }}">
                </div>
            </div>
        </div>
    </a>
</div>
