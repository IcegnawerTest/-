<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartController extends Controller
{
    public function __construct() {
        $this->middleware('auth.cart');
    }

    public function index()
    {
        // Логика отображения корзины
        $user = auth()->user();
        $cartItems = Cart::where('user_id', $user->id)->get();

        return view('cart.index', ['cartItems' => $cartItems]);
    }

}
