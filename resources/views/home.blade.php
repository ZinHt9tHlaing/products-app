<x-layout>
    <h1>{{ $title }}</h1>

    <ul>
        @foreach ($products as $product)
            <li>
                <a href="/products/{{ $product->id }}">
                    {{ $product->name }}
                </a>
                @if ($product->name === 'Macbook')
                    <span>( discount item )</span>
                @endif
            </li>
        @endforeach
    </ul>

</x-layout>
