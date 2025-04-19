<x-layout>
    <h1>{{ $title }}</h1>

    <ul>
        @foreach ($products as $product)
            <li>
                <h3>
                    <a href="/products/{{ $product->id }}">
                        {{ $product->name }}
                    </a>
                    @if ($product->is_discount)
                        <span>( discount item )</span>
                    @endif
                </h3>
            </li>
        @endforeach
    </ul>

</x-layout>
