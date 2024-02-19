<x-head>

    <div class="container">
        <div class="row pt-5">
            @foreach ($products as $product)
                <x-prodCards :product="$product"> </x-prodCards>
            @endforeach
        </div>
    </div>

</x-head>
