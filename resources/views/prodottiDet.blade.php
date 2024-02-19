<x-head>
    <div class="container-fluid myPaddingProdottiDet text-center">
        <div class="row">
            <div class="col-12 col-md-6">
                Ecco il dettaglio di: {{ $product['name2'] }}
                <img src="{{ $product['img'] }}" class="myImgSize" alt="">
            </div>
            <div class="col-12 col-md-6">
                <h5>{{ $product['name2'] }}</h5>
                <h6>{{ $product['price'] }} </h6>
                <p>{{ $product['description'] }} </p>
            </div>
        </div>
    </div>
</x-head>
