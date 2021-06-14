<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function index()
    {
        $product = Product::where('favourite_product', 'yes')->get();
        $data = $product;
        return view('index', ['product' => $data]);
    }
}