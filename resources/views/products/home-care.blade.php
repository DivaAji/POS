<!-- home-care.blade.php -->
<h1>Home Care Products</h1>

<ul>
    @foreach ($products as $product)
        <li>{{ $product['name'] }} - {{ $product['price'] }}</li>
    @endforeach
</ul>
