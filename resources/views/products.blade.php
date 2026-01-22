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
            <a href="{{ url('/cart') }}" class="cart-icon">&#128722;</a> <!-- BINAGO: Clickable na -->
        </div>
    </header>
   
    <main>
        <section class="shop-header">
            <h1>Our Full Collection: Jewels & Accessories</h1>
            <p>Discover our full collection of ethically sourced, demure, and chic accessories, featuring 20 different pieces.</p>
        </section>

        <!-- SUCCESS MESSAGE -->
        @if(session('success'))
            <div style="background: #d4edda; color: #155724; padding: 15px; margin: 20px auto; border-radius: 5px; text-align: center; max-width: 800px;">
                {{ session('success') }}
            </div>
        @endif

        <section class="all-products-grid">
            @php
          $products = [


    // Necklaces (5)
    [
        'id' => 1,
        'name' => 'Dainty Petal Pendant',
        'desc' => 'A delicate chain featuring a single, shimmering petal charm.',
        'price' => 850,
        'type' => 'necklace',
        'color' => 'e0c3fc',
        'img' => 'dainty-petal-pendant.jpg'
    ],
    [
        'id' => 2,
        'name' => 'Whispering Leaves Choker',
        'desc' => 'A close-fitting choker adorned with tiny silver leaf elements.',
        'price' => 1100,
        'type' => 'necklace',
        'color' => 'fcc3e0',
        'img' => 'whispering-leaves-choker.jpg'
    ],
    [
        'id' => 3,
        'name' => 'Moonbeam Layering Chain',
        'desc' => 'Long, fine chain perfect for layering, with a subtle moonstone drop.',
        'price' => 980,
        'type' => 'necklace',
        'color' => 'e0c3fc',
        'img' => 'moonbeam-layering-chain.jpg'
    ],
    [
        'id' => 4,
        'name' => 'Lavender Bloom Locket',
        'desc' => 'A small heart locket, engraved with a lavender sprig pattern.',
        'price' => 1500,
        'type' => 'necklace',
        'color' => 'fcc3e0',
        'img' => 'lavender-bloom-locket.jpg'
    ],
    [
        'id' => 5,
        'name' => 'Enchanting Crown',
        'desc' => 'Simple, elegant solitaire necklace with a clear, sparkling gem.',
        'price' => 750,
        'type' => 'necklace',
        'color' => 'e0c3fc',
        'img' => 'enchanting-crown.jpg'
    ],




    // Rings (5)
    [
        'id' => 6,
        'name' => 'Fairy Dust Stacking Ring',
        'desc' => 'Thin band speckled with tiny cubic zirconia, perfect for stacking.',
        'price' => 620,
        'type' => 'ring',
        'color' => 'fcc3e0',
        'img' => 'fairy-dust-stacking-ring.jpg'
    ],
    [
        'id' => 7,
        'name' => 'Tiny Twig Band',
        'desc' => 'Ring with a texture resembling a delicate, new spring twig.',
        'price' => 780,
        'type' => 'ring',
        'color' => 'e0c3fc',
        'img' => 'tiny-twig-band.jpg'
    ],
    [
        'id' => 8,
        'name' => 'Moon and Star Ring',
        'desc' => 'A ring with a subtle pointed design, like a moon and star.',
        'price' => 1200,
        'type' => 'ring',
        'color' => 'fcc3e0',
        'img' => 'moon-and-star-ring.jpg'
    ],
    [
        'id' => 9,
        'name' => 'Amethyst Droplet Ring',
        'desc' => 'Features a small, polished amethyst stone set in a simple band.',
        'price' => 1450,
        'type' => 'ring',
        'color' => 'e0c3fc',
        'img' => 'amethyst-droplet-ring.jpg'
    ],
    [
        'id' => 10,
        'name' => 'Woven Promise Ring',
        'desc' => 'A delicate band with a subtle woven texture symbolizing connection.',
        'price' => 990,
        'type' => 'ring',
        'color' => 'fcc3e0',
        'img' => 'woven-promise-ring.jpg'
    ],




    // Bracelets (4)
    [
        'id' => 11,
        'name' => 'Tulip Charm Bracelet',
        'desc' => 'Fine chain bracelet with three tiny four-leaf clover charms.',
        'price' => 950,
        'type' => 'bracelet',
        'color' => 'e0c3fc',
        'img' => 'tulip-charm-bracelet.jpg'
    ],
    [
        'id' => 12,
        'name' => 'Initial Beaded Chain',
        'desc' => 'A stretch bracelet with pastel colored seed beads and a tiny charm.',
        'price' => 880,
        'type' => 'bracelet',
        'color' => 'fcc3e0',
        'img' => 'initial-beaded-chain.jpg'
    ],
    [
        'id' => 13,
        'name' => 'Celestial Charm',
        'desc' => 'A minimal, open cuff bracelet that wraps gently around the wrist.',
        'price' => 1300,
        'type' => 'bracelet',
        'color' => 'e0c3fc',
        'img' => 'celestial-charm.jpg'
    ],
    [
        'id' => 14,
        'name' => 'Minimal Zodiac',
        'desc' => 'A thin bangle embedded with tiny, muted pastel gemstones.',
        'price' => 1600,
        'type' => 'bracelet',
        'color' => 'fcc3e0',
        'img' => 'minimal-zodiac.jpg'
    ],




    // Anklets (3)
    [
        'id' => 15,
        'name' => 'Butterfly Anklet',
        'desc' => 'A beachy, feminine anklet with tiny ocean charms.',
        'price' => 550,
        'type' => 'anklet',
        'color' => 'e0c3fc',
        'img' => 'butterfly-anklet.jpg'
    ],
    [
        'id' => 16,
        'name' => 'Moon Midnight',
        'desc' => 'A simple, classic chain for a barely-there, elegant look.',
        'price' => 680,
        'type' => 'anklet',
        'color' => 'fcc3e0',
        'img' => 'moon-midnight.jpg'
    ],
    [
        'id' => 17,
        'name' => 'Triple Stella Anklet',
        'desc' => 'Features micro-crystals that catch the light with every step.',
        'price' => 790,
        'type' => 'anklet',
        'color' => 'e0c3fc',
        'img' => 'triple-stella-anklet.jpg'
    ],




    // Earrings (3)
    [
        'id' => 18,
        'name' => 'Tulip Earring',
        'desc' => 'Small, intricately carved studs shaped like budding roses.',
        'price' => 450,
        'type' => 'earrings',
        'color' => 'fcc3e0',
        'img' => 'tulip-earring.jpg'
    ],
    [
        'id' => 19,
        'name' => 'Genshin Impact Earrings Set',
        'desc' => 'Short, fluffy tassel earrings in a soft cloud-grey color.',
        'price' => 720,
        'type' => 'earrings',
        'color' => 'e0c3fc',
        'img' => 'genshin-impact-earrings-set.jpg'
    ],
    [
        'id' => 20,
        'name' => 'Glimmering Cherry on Top',
        'desc' => 'Tiny, thick hoops studded with small, glittering jewels.',
        'price' => 650,
        'type' => 'earrings',
        'color' => 'fcc3e0',
        'img' => 'glimmering-cherry-on-top.jpg'
    ],


];


            @endphp


            @foreach($products as $product)
                <div class="product-item {{ $product['type'] }}">
                    <img
                        src="{{ asset('images/products/' . $product['img']) }}"
                        alt="{{ $product['name'] }}"
                        class="product-image"
                    >

                    <div class="product-info">
                        <h3>{{ $product['name'] }}</h3>
                        <p class="description">{{ $product['desc'] }}</p>
                        <p class="price">₱{{ number_format($product['price'], 2) }}</p>
                       
                        <div class="product-actions">
                            <button class="btn-buy">Buy Now</button>
                            
                            <!-- ADD TO CART FORM -->
                            <form action="{{ route('cart.add') }}" method="POST" style="display: inline;">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                                <input type="hidden" name="product_name" value="{{ $product['name'] }}">
                                <input type="hidden" name="product_price" value="{{ $product['price'] }}">
                                <button type="submit" class="btn-cart">&#128722; Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
    </main>


    <footer>
        <p>&copy; 2025 Sparkle Sprout. All rights reserved. | Delicate. Demure. Divine.</p>
    </footer>


</body>
</html>