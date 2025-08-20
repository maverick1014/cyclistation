<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title>Elves Amanyar 1.0 Carbon Triathlon Disc Framesets - Ultimate Aero Performance | Cyclistation</title>
    <meta name="description" content="Elite Elves Amanyar 1.0 Carbon Triathlon Disc Framesets. Optimized aerodynamics, 2.25L hydration storage, Toray T800/T1000 carbon. Perfect for triathletes seeking peak performance.">
    <meta name="keywords" content="elves amanyar, triathlon bike, carbon tri frame, aero bike, time trial, triathlon frameset, disc brake tri bike">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Cyclistation">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Elves Amanyar 1.0 Carbon Triathlon Disc Framesets - Ultimate Aero Performance">
    <meta property="og:description" content="Professional triathlon frameset with optimized aerodynamics, massive hydration storage, and precision engineering for peak race performance.">
    <meta property="og:image" content="/assets/images/amanyar-hero.jpg">
    <meta property="og:url" content="<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:type" content="product">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "Product",
        "name": "Elves Amanyar 1.0 Carbon Triathlon Disc Framesets",
        "image": "/assets/images/amanyar-hero.jpg",
        "description": "Elite triathlon frameset designed for speed, precision, and comfort. Features optimized aerodynamics, 2.25L hydration capacity, and premium carbon construction.",
        "brand": {
            "@type": "Brand",
            "name": "Elves"
        },
        "offers": {
            "@type": "Offer",
            "url": "<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>",
            "priceCurrency": "MYR",
            "price": "8645.00",
            "availability": "https://schema.org/InStock",
            "seller": {
                "@type": "Organization",
                "name": "Cyclistation"
            }
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "67"
        }
    }
    </script>
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo css_url('landing.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
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
    <section class="hero" style="background-image: url('https://ueeshop.ly200-cdn.com/u_file/UPAX/UPAX437/2409/17/products/b6eb7138e2.jpg')">
        <div class="hero-content">
            <h1>Elves Amanyar 1.0</h1>
            <p>Ultimate Triathlon Performance - Speed, Precision, and Comfort</p>
            <div class="trust-signals">
                <div class="trust-item">2.25L Hydration Storage</div>
                <div class="trust-item">Optimized Aerodynamics</div>
                <div class="trust-item">Professional Tri Geometry</div>
            </div>
            <a href="<?php echo AMANYAR_BUY_URL; ?>" class="cta-button" target="_blank">Buy Now - RM8,645.00</a>
        </div>
    </section>

    <!-- Main Content -->
    <main id="main">
        <!-- Product Introduction -->
        <section id="intro" class="section intro">
            <div class="container">
                <div class="section-header">
                    <h2>Engineered for Triathlon Excellence</h2>
                    <p>The Amanyar 1.0 combines optimized aerodynamics, exceptional power transfer, and the adjustability needed for peak race performance across all distances.</p>
                </div>
                
                <div class="intro-content">
                    <div class="intro-text">
                        <h3>Triathlon-Specific Design Philosophy</h3>
                        <p>Triathletes demand speed, precision, and comfort for peak race performance. The Amanyar 1.0 Disc delivers on all fronts with its truncated airfoil design and massive 2.25-liter hydration storage capacity.</p>
                        
                        <p>Built with premium Toray T800 and T1000 carbon fiber, this frameset provides the torsional strength required for effective power transfer while maintaining the aerodynamic efficiency crucial for time trial performance.</p>
                        
                        <div class="trust-signals">
                            <div class="trust-item">Truncated airfoil aerodynamic design</div>
                            <div class="trust-item">Integrated hydration solutions</div>
                            <div class="trust-item">Compatible with Shimano & SRAM 12-speed</div>
                            <div class="trust-item">Optimized for riders 160cm-195cm</div>
                        </div>
                    </div>
                    
                    <div class="intro-image">
                        <img src="https://ueeshop.ly200-cdn.com/u_file/UPAX/UPAX437/2409/17/products/aee0f2bfcb.jpg" alt="Elves Amanyar 1.0 Carbon Triathlon Disc Frameset" loading="eager">
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section id="gallery" class="section gallery">
            <div class="container">
                <div class="section-header">
                    <h2>Aerodynamic Excellence</h2>
                    <p>Advanced design features and premium color options</p>
                </div>
                
                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img src="https://ueeshop.ly200-cdn.com/u_file/UPAX/UPAX437/2409/17/products/e681419adf.jpg" alt="Amanyar aerodynamic profile view" loading="lazy">
                        <div class="gallery-item-content">
                            <h4>Aerodynamic Profile</h4>
                            <p>Truncated airfoil design for minimal drag</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item">
                        <img src="https://ueeshop.ly200-cdn.com/u_file/UPAX/UPAX437/2409/17/products/7cbb87bf0f.jpg" alt="Amanyar integrated hydration system" loading="lazy">
                        <div class="gallery-item-content">
                            <h4>Hydration System</h4>
                            <p>Up to 2.25L integrated storage capacity</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item">
                        <img src="https://ueeshop.ly200-cdn.com/u_file/UPAX/UPAX437/2409/17/products/f67f7998b0.jpg" alt="Amanyar custom color options" loading="lazy">
                        <div class="gallery-item-content">
                            <h4>Premium Colors</h4>
                            <p>8 standard colors plus custom paint</p>
                        </div>
                    </div>
                    
                    <div class="gallery-item">
                        <img src="https://ueeshop.ly200-cdn.com/u_file/UPAX/UPAX437/2409/17/products/266145cf47.jpg" alt="Amanyar disc brake integration" loading="lazy">
                        <div class="gallery-item-content">
                            <h4>Disc Brake Ready</h4>
                            <p>Advanced disc brake integration</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Specifications -->
        <section id="specs" class="section specs">
            <div class="container">
                <div class="section-header">
                    <h2>Triathlon Specifications</h2>
                    <p>Precision engineering for competitive advantage</p>
                </div>
                
                <div class="specs-grid">
                    <div class="spec-card">
                        <h4>Frame Material</h4>
                        <p>Toray T800 and T1000 Carbon Fiber</p>
                    </div>
                    
                    <div class="spec-card">
                        <h4>Hydration Capacity</h4>
                        <p>Up to 2.25 Liters Integrated Storage</p>
                    </div>
                    
                    <div class="spec-card">
                        <h4>Available Sizes</h4>
                        <p>45cm, 48cm, 51cm, 54cm</p>
                    </div>
                    
                    <div class="spec-card">
                        <h4>Rider Height Range</h4>
                        <p>160cm - 195cm</p>
                    </div>
                    
                    <div class="spec-card">
                        <h4>Bottom Bracket</h4>
                        <p>T47 Threaded</p>
                    </div>
                    
                    <div class="spec-card">
                        <h4>Tire Clearance</h4>
                        <p>Up to 28c with disc brake compatibility</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Customer Testimonials -->
        <section id="testimonials" class="section testimonials">
            <div class="container">
                <div class="section-header">
                    <h2>Triathlete Success Stories</h2>
                    <p>Trusted by competitive triathletes worldwide</p>
                </div>
                
                <div class="testimonial-grid">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            The Amanyar 1.0 was a game-changer for my Ironman performance. The aerodynamic gains and hydration capacity allowed me to maintain higher speeds while staying perfectly hydrated throughout the bike leg.
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">JS</div>
                            <div class="author-info">
                                <h5>Jennifer Smith</h5>
                                <p>Ironman Age Group Winner</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            As a triathlon coach, I recommend the Amanyar to serious athletes. The fit adjustability is excellent, and the power transfer efficiency is noticeable in time trials and longer races.
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">MC</div>
                            <div class="author-info">
                                <h5>Michael Chen</h5>
                                <p>Professional Triathlon Coach</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            Two seasons on this frame and multiple podium finishes. The aerodynamic advantage is real - I consistently see 2-3% power savings compared to my old setup at race speeds.
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">RL</div>
                            <div class="author-info">
                                <h5>Robert Lee</h5>
                                <p>Elite Age Group Triathlete</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Purchase Section -->
        <section id="purchase" class="section purchase">
            <div class="container">
                <h2>Ready to Dominate Your Next Race?</h2>
                <p>Experience the ultimate in triathlon performance technology</p>
                
                <div class="price">
                    RM8,645.00
                </div>
                
                <div class="trust-signals">
                    <div class="trust-item">Professional Triathlon Geometry</div>
                    <div class="trust-item">5-Year Global Warranty</div>
                    <div class="trust-item">Optimized for All Race Distances</div>
                    <div class="trust-item">Premium Hydration Integration</div>
                </div>
                
                <a href="<?php echo AMANYAR_BUY_URL; ?>" class="cta-button" target="_blank">
                    Order Now - Official Elves Store
                </a>
                
                <p style="margin-top: 1rem; opacity: 0.8;">
                    🏁 Used by Ironman winners and elite age-groupers
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
    
    <!-- Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
</body>
</html>