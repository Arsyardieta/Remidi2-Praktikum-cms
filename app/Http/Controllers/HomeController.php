<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller

{
    public function index()
    {
        // Data produk dummy
        $products = [
            [
                'name' => 'Pokemon TCG S&V',
                'price' => 10000,
                'image' => 'pokemon.jpg',
                'time_left' => '3 Hari, 08:16:43',
                'user' => 'NitroGame',
                'rating' => 4.6
            ],
            [
                'name' => 'Samsung Galaxy Tab S9',
                'price' => 208000,
                'image' => 'tab.jpg',
                'time_left' => '3 Hari, 08:13:43',
                'user' => 'White Owl',
                'rating' => 4.6
            ],
            // Tambah lainnya
        ];

        return view('home', compact('products'));
    }
}


