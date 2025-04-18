<x-layout>
    <h1>{{ $title }}</h1>

    <div>
        <h3>
            Product name - {{ $product->name }}
        </h3>
        <p>
            Product price - {{ $product->price }}
        </p>
        <hr>
    </div>
</x-layout>
