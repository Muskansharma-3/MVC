<h1>Products available at Electric Shop</h1>
<div>
    <ul>
    @foreach($products as $k => $product)
            <li>
                <a href="/products/{{ $k }}">{{ $product }} - {{ $prices[$k] }}</a>
            </li>
        @endforeach
    </ul>
</div>