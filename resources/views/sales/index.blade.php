<!-- resources/views/transactions/index.blade.php -->

<h1>Transaction History</h1>

<table>
    <thead>
        <tr>
            <th>Transaction ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($transactions as $transaction)
            <tr>
                <td>{{ $transaction['id'] }}</td>
                <td>{{ $transaction['product_name'] }}</td>
                <td>{{ $transaction['price'] }}</td>
                <td>{{ $transaction['quantity'] }}</td>
                <td>{{ $transaction['total'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
