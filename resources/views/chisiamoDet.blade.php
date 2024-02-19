<x-head>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3>Lui è {{ $persona['name'] }}!</h3>
                <img src="{{ $persona['img'] }} " alt="">
            </div>
            <div class="col-12 col-md-6">
                <h5>{{ $persona['name'] }} </h5>
                <h6>{{ $persona['role'] }} </h6>
                <p>{{ $persona['description'] }} </p>
            </div>
        </div>
    </div>
</x-head>
