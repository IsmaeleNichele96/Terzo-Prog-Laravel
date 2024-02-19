<div class="col-12 col-md-4">
    <div class="card">
        <img src="{{ $product['img'] }}" class="card-img-top myImgSize" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $product['name'] }}</h5>
            <p class="card-text">{{ $product['description'] }} </p>
            <p class="card-text">Euri: {{ $product['price'] }} </p>
            <a href="{{ route('prodottiDet', ['nome' => $product['name']]) }}" class="btn btn-primary">Scopri di
                più</a>
        </div>
    </div>
</div>
