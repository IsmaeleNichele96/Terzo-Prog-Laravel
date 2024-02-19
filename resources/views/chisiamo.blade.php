<x-head>

    <div class="container">
        <div class="row pt-5">
            @foreach ($persone as $persona)
                <x-componentsChisiamo :persona="$persona"> </x-componentsChisiamo>
            @endforeach
        </div>
    </div>

</x-head>
