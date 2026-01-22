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
            <span class="cart-icon">&#128722;</span>
        </div>
    </header>


    <main>
        <section class="page-content about-section">
            <div class="about-wrapper">


                <h1>Our Sparkle Sprout Story</h1>
                <p class="sub-heading">Where Every Piece is a Tiny Beginning.</p>


                <div class="about-card">
                    <h2>The Vision: Delicate & Demure</h2>
                    <p>Sparkle Sprout was born from a love for all things delicate, demure, and magically cutesy. We believe that true fashion doesn't have to shout; it can be a soft, beautiful whisper. Our jewelry is designed to be an everyday joy—a tiny, precious moment of sparkle that complements your natural beauty.</p>
                </div>


                <div class="about-card reversed">
                    <h2>The Aesthetic: Pastel Perfection</h2>
                    <p>Our palette is inspired by the soft colors of a springtime garden: pastel purples, soft pinks, and rose golds. We focus on lightweight, comfortable, and ethically sourced pieces that offer a glance of high fashion while remaining sweetly feminine. Think minimal design with maximum heart.</p>
                </div>


                <div class="about-card">
                    <h2>Our Promise: Quality & Care</h2>
                    <p>Every piece in our collection is carefully inspected and packaged with love. We use high-quality materials to ensure your Sparkle Sprout piece is not just a passing trend, but a cherished treasure for years to come. Thank you for helping our little sprout grow!</p>
                </div>


            </div>
        </section>
    </main>


    <footer>
        <p>&copy; 2025 Sparkle Sprout. All rights reserved. | Delicate. Demure. Divine.</p>
    </footer>


</body>
</html>
