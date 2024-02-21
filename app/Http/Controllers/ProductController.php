<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
      return view('products.index');
    }

    public function foodBeverage()
{
    $products = [
        ['name' => 'Indomie', 'price' => 5.000],
        ['name' => 'Kopi', 'price' => 20.000],
    ];
    return view('products.food-beverage', compact('products'));
}

public function beautyHealth()
{
    $products = [
        ['name' => 'Bedak Wajah', 'price' => 20.000],
        ['name' => 'Sabun Mandi', 'price' => 5.000],
    ];
    return view('products.beauty-health', compact('products'));
}

public function homeCare()
{
    $products = [
        ['name' => 'Kanebo', 'price' => 20.000],
        ['name' => 'Spray Kaca', 'price' => 10.000],
    ];
    return view('products.home-care', compact('products'));
}

public function babyKid()
{
    $products = [
        ['name' => 'Susu 123', 'price' => 50.000],
        ['name' => 'Bubur Bayi', 'price' => 20.000],
    ];
    return view('products.baby-kid', compact('products'));
}
}
