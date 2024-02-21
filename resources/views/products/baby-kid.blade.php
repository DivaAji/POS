<!-- baby-kid.blade.php -->
<h1>Baby & Kid Products</h1>

<ul>
    @foreach ($products as $product)
        <li>{{ $product['name'] }} - {{ $product['price'] }}</li>
    @endforeach
</ul>
