<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Sparkle Sprout</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Your CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <style>
        .cart-container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
        }
        
        .cart-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .cart-table th {
            background: linear-gradient(135deg, #e0b3ff, #c084fc);
            color: white;
            padding: 15px;
            text-align: left;
        }
        
        .cart-table td {
            padding: 15px;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .btn-remove {
            background: #ff6b6b;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-remove:hover {
            background: #ff5252;
        }
        
        .total-section {
            text-align: right;
            font-size: 24px;
            font-weight: bold;
            margin: 20px 0;
            color: #8b5cf6;
        }
        
        .empty-cart {
            text-align: center;
            padding: 50px;
            color: #999;
        }
        
        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <header class="navbar">
        <a href="{{ url('/') }}" class="logo">Sparkle Sprout</a>
        <nav class="nav-links">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/products') }}">Shop All</a>
            <a href="{{ url('/about') }}">About Us</a>
            <a href="{{ url('/contact') }}">Contact</a>
        </nav>
        <div class="nav-icons">
            <span>&#128100;</span>
            <a href="{{ url('/cart') }}" class="cart-icon">&#128722;</a>
        </div>
    </header>

    <div class="cart-container">
        <h1 style="text-align: center; color: #8b5cf6; margin-bottom: 30px;">Shopping Cart</h1>
        
        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif
        
        @if($cart && count($cart) > 0)
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $grandTotal = 0; @endphp
                    
                    @foreach($cart as $id => $item)
                        <tr>
                            <td><strong>{{ $item['name'] }}</strong></td>
                            <td>₱{{ number_format($item['price'], 2) }}</td>
                            <td>{{ $item['quantity'] }}</td>
                            <td>₱{{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                            <td>
                                <a href="{{ route('cart.remove', $id) }}" class="btn-remove">Remove</a>
                            </td>
                        </tr>
                        @php $grandTotal += $item['price'] * $item['quantity']; @endphp
                    @endforeach
                </tbody>
            </table>
            
            <div class="total-section">
                TOTAL: ₱{{ number_format($grandTotal, 2) }}
            </div>
            
            <div style="text-align: center; margin-top: 30px;">
                <a href="{{ url('/') }}" class="btn-shop">Continue Shopping</a>
                <a href="#" class="btn-shop" style="margin-left: 10px; background: #10b981;">Checkout</a>
            </div>
        @else
            <div class="empty-cart">
                <h2>Your cart is empty 🛒</h2>
                <p>Start shopping and add some items!</p>
                <a href="{{ url('/') }}" class="btn-shop" style="margin-top: 20px; display: inline-block;">Go to Shop</a>
            </div>
        @endif
    </div>

    <footer>
        <p>&copy; 2025 Sparkle Sprout. All rights reserved. | Delicate. Demure. Divine.</p>
    </footer>

</body>
</html>
```