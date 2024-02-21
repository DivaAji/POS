<!-- beauty-health.blade.php -->
<h1>Beauty & Health Products</h1>

<ul>
    @foreach ($products as $product)
        <li>{{ $product['name'] }} - {{ $product['price'] }}</li>
    @endforeach
</ul>
