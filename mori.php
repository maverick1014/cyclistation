<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title>Elves Mori Aerox Carbon Aero Gravel Framesets - Speed Without Limits | Cyclistation</title>
    <meta name="description" content="Experience race-winning speed with the Elves Mori Aerox Carbon Aero Gravel Framesets. Premium Toray T800-T1000 carbon fiber, 45c tire clearance, UDH compatible. 5-year warranty. Order now!">
    <meta name="keywords" content="elves mori, carbon gravel bike, aero gravel frameset, cycling, bike frame, carbon fiber, gravel racing">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Cyclistation">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Elves Mori Aerox Carbon Aero Gravel Framesets - Speed Without Limits">
    <meta property="og:description" content="Premium carbon aero gravel frameset designed for race-winning performance. 45c tire clearance, Japanese carbon fiber, 5-year warranty.">
    <meta property="og:image" content="/assets/images/mori-hero.jpg">
    <meta property="og:url" content="<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:type" content="product">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Elves Mori Aerox Carbon Aero Gravel Framesets">
    <meta name="twitter:description" content="Premium carbon aero gravel frameset designed for race-winning performance.">
    <meta name="twitter:image" content="/assets/images/mori-hero.jpg">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "Product",
        "name": "Elves Mori Aerox Carbon Aero Gravel Framesets",
        "image": "/assets/images/mori-hero.jpg",
        "description": "Premium Toray Japanese carbon fibre T800-T1000 aero gravel frameset designed for race-winning speed and versatility.",
        "brand": {
            "@type": "Brand",
            "name": "Elves"
        },
        "offers": {
            "@type": "Offer",
            "url": "<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>",
            "priceCurrency": "MYR",
            "price": "4531.80",
            "priceValidUntil": "2025-12-31",
            "availability": "https://schema.org/InStock",
            "seller": {
                "@type": "Organization",
                "name": "Cyclistation"
            }
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.8",
            "reviewCount": "127"
        }
    }
    </script>
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo css_url('landing.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Additional CSS for modal -->
    <style>
        .image-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 10000;
        }
        
        .modal-backdrop {
            background: rgba(0,0,0,0.9);
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }
        
        .modal-content {
            position: relative;
            max-width: 90vw;
            max-height: 90vh;
        }
        
        .modal-close {
            position: absolute;
            top: -3rem;
            right: 0;
            background: none;
            border: none;
            color: white;
            font-size: 2rem;
            cursor: pointer;
        }
        
        .modal-image {
            max-width: 100%;
            max-height: 80vh;
            object-fit: contain;
        }
        
        .modal-caption {
            color: white;
            text-align: center;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <!-- Skip to main content for accessibility -->
    <a href="#main" class="skip-link sr-only">Skip to main content</a>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="<?php echo HOME_PATH; ?>" class="logo">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNhHZM7HEPSpyEASO2Et02A_c-uQTeNRSicA&s" alt="Cyclistation Logo" class="logo-image">
                <span class="logo-text"><?php echo SITE_NAME; ?></span>
            </a>
            <ul class="nav-links">
                <li><a href="<?php echo HOME_PATH; ?>">Home</a></li>
                <li><a href="#intro">About</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#specs">Specs</a></li>
                <li><a href="#testimonials">Reviews</a></li>
                <li><a href="#purchase">Buy Now</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" style="background-image: url('https://ueeshop.ly200-cdn.com/u_file/UPAX/UPAX437/2412/26/products/dc0aefbed0.jpg')">
        <div class="hero-content">
            <h1>Elves Mori Aerox</h1>
            <p>Speed Without Limits - Aero Gravel Bike Designed to Race</p>
            <div class="trust-signals">
                <div class="trust-item">5-Year Global Warranty</div>
                <div class="trust-item">Premium Japanese Carbon</div>
                <div class="trust-item">UDH Compatible</div>
            </div>
            <a href="<?php echo MORI_BUY_URL; ?>" class="cta-button" target="_blank">Buy Now - RM4,531.80</a>
        </div>
    </section>

    <!-- Main Content -->
    <main id="main">
        <!-- Product Introduction -->
        <section id="intro" class="section intro">
            <div class="container">
                <div class="section-header">
                    <h2>Gravel Re-Invented for Ultimate Performance</h2>
                    <p>The Elves Mori Aerox represents the pinnacle of aero gravel engineering, combining race-winning aerodynamics with uncompromising versatility.</p>
                </div>
                
                <div class="intro-content">
                    <div class="intro-text">
                        <h3>Built for Speed, Designed for Adventure</h3>
                        <p>Crafted from premium Toray Japanese carbon fibre T800-T1000, the Mori Aerox delivers exceptional stiffness-to-weight ratio while maintaining the compliance needed for long-distance comfort.</p>
                        
                        <p>With generous tire clearance accommodating up to 45c on 700c wheels and 50c on 650b wheels, this frameset adapts to any terrain while maintaining its aerodynamic advantage.</p>
                        
                        <div class="trust-signals">
                            <div class="trust-item">Compatible with 10/11/12/13 speed groupsets</div>
                            <div class="trust-item">Integrated mounting points for accessories</div>
                            <div class="trust-item">UDH (Universal Derailleur Hanger) ready</div>
                        </div>
                    </div>
                    
                    <div class="intro-image">
                        <img src="https://ueeshop.ly200-cdn.com/u_file/UPAX/UPAX437/2412/26/products/4e26852110.jpg" alt="Elves Mori Aerox Carbon Aero Gravel Frameset" loading="eager">
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section id="gallery" class="section gallery">
            <div class="container">
                <div class="section-header">
                    <h2>Multiple Color Variations Available</h2>
                    <p>Choose from 8 stunning color combinations to match your style</p>
                </div>
                
                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img src="https://ueeshop.ly200-cdn.com/u_file/UPAX/UPAX437/2412/26/products/f8adbb3065.jpg" alt="Mori in Black & Chameleon finish" loading="lazy">
                        <div class="gallery-item-content">
                            <h4>Black & Chameleon</h4>
                            <p>Classic elegance meets modern aesthetics</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item">
                        <img src="https://ueeshop.ly200-cdn.com/u_file/UPAX/UPAX437/2412/26/products/8431f50e4b.jpg" alt="Mori in Cement Gray & Lemon Yellow finish" loading="lazy">
                        <div class="gallery-item-content">
                            <h4>Cement Gray & Lemon Yellow</h4>
                            <p>Bold contrast for maximum visibility</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item">
                        <img src="https://ueeshop.ly200-cdn.com/u_file/UPAX/UPAX437/2412/26/products/11d171b9fd.jpg" alt="Mori in Blazing Orange & Wistaria finish" loading="lazy">
                        <div class="gallery-item-content">
                            <h4>Blazing Orange & Wistaria</h4>
                            <p>Vibrant colors for standout performance</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item">
                        <img src="https://ueeshop.ly200-cdn.com/u_file/UPAX/UPAX437/2412/26/products/aebff16357.jpg" alt="Mori custom color options" loading="lazy">
                        <div class="gallery-item-content">
                            <h4>Custom Paint Available</h4>
                            <p>Create your unique color combination</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Specifications -->
        <section id="specs" class="section specs">
            <div class="container">
                <div class="section-header">
                    <h2>Technical Specifications</h2>
                    <p>Precision engineering meets cutting-edge technology</p>
                </div>
                
                <div class="specs-grid">
                    <div class="spec-card">
                        <h4>Frame Material</h4>
                        <p>Premium Toray Japanese Carbon Fibre T800-T1000</p>
                    </div>
                    
                    <div class="spec-card">
                        <h4>Tire Clearance</h4>
                        <p>45c (700c wheels)<br>50c (650b wheels)</p>
                    </div>
                    
                    <div class="spec-card">
                        <h4>Available Sizes</h4>
                        <p>46cm, 49cm, 52cm, 54cm, 56cm</p>
                    </div>
                    
                    <div class="spec-card">
                        <h4>Bottom Bracket</h4>
                        <p>T47-24 (Shimano 24MM)<br>T47-DUB (SRAM 28.99MM)<br>T47-30 (30MM Axle)</p>
                    </div>
                    
                    <div class="spec-card">
                        <h4>Drivetrain Compatibility</h4>
                        <p>Mechanical/Electronic<br>10/11/12/13 Speed Groupsets</p>
                    </div>
                    
                    <div class="spec-card">
                        <h4>Special Features</h4>
                        <p>UDH Compatible<br>Integrated Mounting Points<br>Bag & Rack Ready</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Customer Testimonials -->
        <section id="testimonials" class="section testimonials">
            <div class="container">
                <div class="section-header">
                    <h2>What Our Customers Say</h2>
                    <p>Join thousands of satisfied riders worldwide</p>
                </div>
                
                <div class="testimonial-grid">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            The Mori Aerox completely transformed my gravel racing experience. The aerodynamic advantage is noticeable even at moderate speeds, and the ride quality is exceptional for such a stiff frame.
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">MR</div>
                            <div class="author-info">
                                <h5>Marcus Rodriguez</h5>
                                <p>Competitive Gravel Racer</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            I've built three different bikes on Elves frames, and the Mori is by far my favorite. The attention to detail and build quality is outstanding. The 5-year warranty gives great peace of mind.
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">SL</div>
                            <div class="author-info">
                                <h5>Sarah Liu</h5>
                                <p>Bike Enthusiast & Mechanic</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            Perfect for my mixed-terrain adventures. I can tackle smooth roads at high speeds and then hit the gravel trails with confidence. The tire clearance handles everything I throw at it.
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">JK</div>
                            <div class="author-info">
                                <h5>James Kumar</h5>
                                <p>Adventure Cyclist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Purchase Section -->
        <section id="purchase" class="section purchase">
            <div class="container">
                <h2>Ready to Experience Speed Without Limits?</h2>
                <p>Join the ranks of elite gravel racers with the Elves Mori Aerox</p>
                
                <div class="price" data-original="5005.00" data-discount="4531.80">
                    <span class="price-original">RM5,005.00</span>
                    RM4,531.80
                </div>
                
                <div class="trust-signals">
                    <div class="trust-item">Free Shipping Nationwide</div>
                    <div class="trust-item">5-Year Global Warranty</div>
                    <div class="trust-item">30-Day Money Back Guarantee</div>
                    <div class="trust-item">Expert Assembly Available</div>
                </div>
                
                <a href="<?php echo MORI_BUY_URL; ?>" class="cta-button" target="_blank">
                    Order Now - Official Elves Store
                </a>
                
                <p style="margin-top: 1rem; opacity: 0.8;">
                    ⚡ Limited stock available - Order today to secure your frameset
                </p>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="social-links">
                <a href="#" class="social-link facebook" target="_blank" aria-label="Follow us on Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-link instagram" target="_blank" aria-label="Follow us on Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
            <p class="footer-text">&copy; <?php echo date('Y'); ?> Cyclistation. All rights reserved. | 
            <a href="/privacy" style="color: white;">Privacy Policy</a> | 
            <a href="/terms" style="color: white;">Terms of Service</a></p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="<?php echo js_url('landing.js'); ?>"></script>
    
    <!-- Analytics (replace with your actual tracking ID) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
</body>
</html>