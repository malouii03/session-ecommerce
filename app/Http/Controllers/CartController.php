<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // SIGURADUHIN NA NASA LOOB ITO NG CURLY BRACES NG CLASS
    public function addToCart(Request $request)
    {
        $productId = $request->product_id;
        $productName = $request->product_name;
        $productPrice = $request->product_price;
        
        $cart = session()->get('cart', []);
        
        if(isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                'name' => $productName,
                'price' => $productPrice,
                'quantity' => 1
            ];
        }
        
        session()->put('cart', $cart);
        
        return back()->with('success', 'Naidagdag sa cart!');
    }

    // Dito rin dapat ang showCart at removeFromCart...
}