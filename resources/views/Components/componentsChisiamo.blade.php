<div class="col-12 col-md-4">
    <div class="card">
        <img src="{{ $persona['img'] }}" class="card-img-top myImgSize" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $persona['name'] }}</h5>
            <p class="card-text">{{ $persona['role'] }} </p>
            <p class="card-text">{{ $persona['description'] }} </p>
            <a href="{{ route('chisiamoDet', ['name' => $persona['name']]) }}" class="btn btn-primary">Scopri di
                più</a>
        </div>
    </div>
</div>
