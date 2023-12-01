<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    function index(){
        $products = Product::all();
        return view("index", ["products" =>$products]);
    }

    function products() {
        $context = ['products' => Product::latest()->get()];
        return view('products', $context);
    }

    public function detail(Product $product) {
        return view('detail', ['product' => $product]);
    }

}
