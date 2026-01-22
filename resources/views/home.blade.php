<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparkle Sprout</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Your CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
            <a href="{{ url('/cart') }}" class="cart-icon">&#128722;</a> <!-- BINAGO KO TO PARA CLICKABLE -->
        </div>
    </header>
   
    <main>
        <section class="hero-section">
            <h1>Sparkle & Sprout</h1>
            <p>A collection of demure, cutesy, and fashion-forward accessories crafted just for you.</p>
            <a href="{{ url('/products') }}" class="btn-shop">Shop Now</a>
        </section>




       
      <section class="featured-products">
    <h2>&#9733; Featured Collection &#9733;</h2>

    <!-- DAGDAG: Para sa success message pag nag-add sa cart -->
    @if(session('success'))
        <div style="background: #d4edda; color: #155724; padding: 10px; margin: 10px 0; border-radius: 5px; text-align: center;">
            {{ session('success') }}
        </div>
    @endif

    <div class="product-grid">

        <!-- Featured Product 1 -->
        <div class="product-item">
            <img
                src=https://i.pinimg.com/736x/be/d8/6e/bed86e7b87196faf350b778537a4e834.jpg
                alt="Dainty Petal Pendant"
                class="product-image"
            >
            <h3>Dainty Petal Pendant</h3>
            <p class="price">₱850</p>
            
            <!-- BAGO: Add to Cart Form -->
            <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="1">
                <input type="hidden" name="product_name" value="Dainty Petal Pendant">
                <input type="hidden" name="product_price" value="850">
                <button type="submit" class="btn-add-cart">Add to Cart</button>
            </form>
        </div>

        <!-- Featured Product 2 -->
        <div class="product-item">
            <img
                src=https://i.pinimg.com/1200x/e5/90/2a/e5902a253ba51c235de9d8582750523c.jpg
                alt="Midnight Necklace"
                class="product-image"
            >
            <h3>Midnight Necklace</h3>
            <p class="price">₱999.00</p>
            
            <!-- BAGO: Add to Cart Form -->
            <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="2">
                <input type="hidden" name="product_name" value="Midnight Necklace">
                <input type="hidden" name="product_price" value="999">
                <button type="submit" class="btn-add-cart">Add to Cart</button>
            </form>
        </div>

        <!-- Featured Product 3 -->
        <div class="product-item">
            <img
                src=https://i.pinimg.com/1200x/a6/18/fc/a618fc5aa495a8e72ed8099d298ea08b.jpg
                alt="Lavender Bloom Locket"
                class="product-image"
            >
            <h3>Lavender Bloom Locket</h3>
            <p class="price">₱1,500</p>
            
            <!-- BAGO: Add to Cart Form -->
            <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="3">
                <input type="hidden" name="product_name" value="Lavender Bloom Locket">
                <input type="hidden" name="product_price" value="1500">
                <button type="submit" class="btn-add-cart">Add to Cart</button>
            </form>
        </div>
    </div>
    <a href="{{ url('/products') }}" class="btn-shop view-all-btn">View All Products</a>
</section>

    </main>


    <footer>
        <p>&copy; 2025 Sparkle Sprout. All rights reserved. | Delicate. Demure. Divine.</p>
    </footer>


</body>
</html>