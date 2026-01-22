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


    <header class="header">
        <div class="logo">EleganceStride</div>
        <nav class="nav">
            <a href="#" class="nav-item active">Home</a>
            <a href="#" class="nav-item">Shop</a>
            <a href="#" class="nav-item">About</a>
            <a href="#" class="nav-item">Contact</a>
        </nav>
        <div class="actions">
            <a href="#" class="btn-action">Account</a>
            <a href="#" class="btn-action">Cart (0)</a>
        </div>
    </header>


    <main class="main-content">
        <section class="hero-section">
            <div class="hero-text">
                <h1>Step into **Luxury**</h1>
                <p>Curated collection of the world's most elegant and timeless footwear.</p>
                <a href="#" class="btn-primary">Explore Collection</a>
            </div>
            <div class="hero-image">
                <img src="https://via.placeholder.com/500x350/0f0f0f/d4af37?text=Luxury+Shoe+Image" alt="Elegant Dark Shoe">
            </div>
        </section>


        <section class="featured-products">
            <h2>Featured Styles</h2>
            <div class="product-grid">
                <div class="product-card">
                    <img src="https://via.placeholder.com/300x200/1a1a1a/cccccc?text=Stiletto" alt="Stiletto">
                    <h3>The Midnight Heel</h3>
                    <p class="price">$280</p>
                    <a href="#" class="btn-secondary">View Details</a>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/300x200/1a1a1a/cccccc?text=Loafer" alt="Loafer">
                    <h3>The Velvet Loafer</h3>
                    <p class="price">$195</p>
                    <a href="#" class="btn-secondary">View Details</a>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/300x200/1a1a1a/cccccc?text=Sneaker" alt="Sneaker">
                    <h3>The Urban Runner</h3>
                    <p class="price">$150</p>
                    <a href="#" class="btn-secondary">View Details</a>
                </div>
            </div>
        </section>
    </main>


    <footer class="footer">
        <p>&copy; 2025 EleganceStride. All rights reserved. | Crafted with *Style*.</p>
    </footer>


</body>
</html>
