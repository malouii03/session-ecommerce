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
        <section class="page-content contact-section">


            <h1>Contact Our Garden</h1>
            <p class="sub-heading">We love hearing from you! Send us your questions, feedback, or just say hello.</p>


            <div class="contact-card">
                <div class="contact-grid">


                    <div class="contact-info">
                        <h2>Reach Out</h2>
                        <p><strong>Email Us:</strong> <a href="mailto:hello@sparklesprout.com">hello@sparklesprout.com</a></p>
                        <p><strong>Call/Text:</strong> +63 123456789 (Mon-Fri, 9AM–5PM PHT)</p>
                        <p><strong>Follow Us:</strong> @SparkleSproutJewels on all platforms!</p>


                        <h2 style="margin-top: 1.5rem;">Pop-up Events</h2>
                        <p>We host monthly pop-ups. Subscribe to our newsletter for the latest dates!</p>
                    </div>


                    <div class="contact-form-container">
                        <h2>Send a Message</h2>


                        <form id="contactForm" class="contact-form">
                            @csrf


                            <input type="text" name="name" placeholder="Your Full Name" required>
                            <input type="email" name="email" placeholder="Your Email Address" required>
                            <select name="subject" required>
                                <option value="">I'm inquiring about...</option>
                                <option value="order">An existing order</option>
                                <option value="product">Product details</option>
                                <option value="collaboration">Collaboration</option>
                                <option value="other">Other</option>
                            </select>
                            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                            <button type="submit" class="btn-shop">Send Your Note</button>
                        </form>


                        <div id="successMessage" class="contact-success">
                            <h2>✨ Thank You!</h2>
                            <p>Your message has been successfully sent. We will get back to you within 24 hours.</p>
                            <p>&mdash; The Sparkle Sprout Team</p>
                        </div>
                    </div>


                </div>
            </div>


        </section>
    </main>


    <footer>
        <p>&copy; 2025 Sparkle Sprout. All rights reserved. | Delicate. Demure. Divine.</p>
    </footer>


    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
           
            const form = document.getElementById('contactForm');
            const success = document.getElementById('successMessage');


            form.style.display = 'none';
            success.style.display = 'block';


            form.reset();
        });
    </script>


</body>
</html>