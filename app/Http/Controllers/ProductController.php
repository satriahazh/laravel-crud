<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Product 1', 'price' => 100],
            ['name' => 'Product 2', 'price' => 150],
            ['name' => 'Product 3', 'price' => 200],
        ];

        return view('products.index', ['products' => $products]);
    }
}
