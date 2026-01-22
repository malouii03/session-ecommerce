<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController; // <--- Import ng CartController

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. Home Page Route
Route::get('/', function () {
    return view('home');
});

// 2. Products Page Route
Route::get('/products', function () {
    return view('products');
});

// 3. About Us Page Route
Route::get('/about', function () {
    return view('about');
});

// 4. Contact Us Page Route
Route::get('/contact', function () {
    return view('contact');
});

// ==================== SHOPPING CART ROUTES ====================

// Step 3 logic: Dito dadaan yung product details pag clinick yung "Add to Cart"
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');

// Para makita yung hitsura ng Cart (ito yung resources/views/cart.blade.php)
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');

// Para mabura ang item gamit ang ID nito
Route::get('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');