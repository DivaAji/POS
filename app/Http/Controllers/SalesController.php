<?php

namespace App\Http\Controllers;

class SalesController extends Controller
{
    public function index()
    {
      $transactions = [
            ['id' => 1, 'product_name' => 'Susu 123', 'price' => 50000, 'quantity' => 2, 'total' => 100000],
            ['id' => 2, 'product_name' => 'Indomie', 'price' => 5000, 'quantity' => 10, 'total' => 50000],
            // Tambahkan data transaksi lainnya sesuai kebutuhan
        ];

        return view('sales.index', compact('transactions'));
    }
}
