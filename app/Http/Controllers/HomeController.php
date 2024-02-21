<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $linkToProducts = '<a href="/POS/public/products">Products</a>';
        $linkToUser = '<a href="/POS/public/user/1/name/DivaAji">User</a>';
        $linkToSales = '<a href="/POS/public/sales">Sales</a>';


        return "Selamat Datang di Sistem POS.
        <br> Kunjungi halaman " . $linkToProducts . " untuk melihat daftar produk.
        <br> Kunjungi halaman " . $linkToUser . " untuk melihat User.
        <br> Kunjungi halaman " . $linkToSales . " untuk melihat Sales.";

        
    }
}
