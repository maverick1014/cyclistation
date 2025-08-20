<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title><?php echo SITE_NAME; ?> - <?php echo SITE_TAGLINE; ?> | Official Dealer</title>
    <meta name="description" content="Discover premium Elves carbon bike framesets at Cyclistation. From aero gravel to XC hardtails, find your perfect high-performance frameset with global warranty and expert support.">
    <meta name="keywords" content="elves bikes, carbon framesets, gravel bike, road bike, triathlon bike, mountain bike, cyclistation, premium cycling">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Cyclistation">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Cyclistation - Premium Elves Carbon Bike Framesets">
    <meta property="og:description" content="Official dealer of premium Elves carbon bike framesets. Discover race-winning performance across all cycling disciplines.">
    <meta property="og:image" content="/assets/images/cyclistation-hero.jpg">
    <meta property="og:url" content="<?php echo $_SERVER['HTTP_HOST']; ?>">
    <meta property="og:type" content="website">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Cyclistation",
        "description": "Premium Elves carbon bike framesets dealer",
        "url": "<?php echo 'https://' . $_SERVER['HTTP_HOST']; ?>",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "<?php echo 'https://' . $_SERVER['HTTP_HOST']; ?>/search?q={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST']; ?>">
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo css_url('landing.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .product-card {
            background: var(--bg-white);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }
        
        .product-image {
            width: 100%;
            height: 250px;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        
        .product-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: var(--accent-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
        }
        
        .product-content {
            padding: 2rem;
        }
        
        .product-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }
        
        .product-category {
            color: var(--secondary-color);
            font-weight: 500;
            margin-bottom: 1rem;
            text-transform: uppercase;
            font-size: 0.9rem;
        }
        
        .product-description {
            color: var(--text-light);
            margin-bottom: 1.5rem;
            line-height: 1.5;
        }
        
        .product-features {
            list-style: none;
            margin-bottom: 2rem;
        }
        
        .product-features li {
            color: var(--text-light);
            margin-bottom: 0.5rem;
            padding-left: 1.5rem;
            position: relative;
        }
        
        .product-features li:before {
            content: "✓";
            color: var(--success-color);
            font-weight: bold;
            position: absolute;
            left: 0;
        }
        
        .product-price {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .price-current {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--accent-color);
        }
        
        .price-original {
            font-size: 1.1rem;
            color: var(--text-light);
            text-decoration: line-through;
            margin-left: 1rem;
        }
        
        .product-cta {
            background: var(--secondary-color);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: var(--border-radius);
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            width: 100%;
            text-align: center;
            transition: var(--transition);
        }
        
        .product-cta:hover {
            background: #2980b9;
            transform: translateY(-2px);
        }
        
        .hero-home {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://ueeshop.ly200-cdn.com/u_file/UPAX/UPAX437/2409/17/photo/AMANYAR72.jpg?x-oss-process=image/format,webp/quality,q_100/resize,m_lfit,h_0,w_1920');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            text-align: center;
            padding: 8rem 0;
        }
        
        .hero-home h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
        }
        
        .hero-home p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        @media (max-width: 768px) {
            .product-grid {
                grid-template-columns: 1fr;
            }
            
            .hero-home h1 {
                font-size: 2.5rem;
            }
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
                <li><a href="#home">Home</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-home">
        <div class="container">
            <h1>Premium Elves Carbon Framesets</h1>
            <p>Discover race-winning performance across all cycling disciplines</p>
            <div class="trust-signals">
                <div class="trust-item">Official Elves Dealer</div>
                <div class="trust-item">5-Year Global Warranty</div>
                <div class="trust-item">Expert Support</div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main id="main">
        <!-- Products Section -->
        <section id="products" class="section">
            <div class="container">
                <div class="section-header">
                    <h2>Our Premium Collection</h2>
                    <p>Choose from our carefully curated selection of high-performance Elves carbon framesets</p>
                </div>

                <div class="product-grid">
                    <!-- Mori Aerox -->
                    <div class="product-card">
                        <div class="product-image" style="background-image: url('https://ueeshop.ly200-cdn.com/u_file/UPAX/UPAX437/2412/26/products/dc0aefbed0.jpg')">
                            <div class="product-badge">BESTSELLER</div>
                        </div>
                        <div class="product-content">
                            <div class="product-category">Aero Gravel</div>
                            <h3 class="product-title">Elves Mori Aerox</h3>
                            <p class="product-description">Speed Without Limits - Premium aero gravel frameset designed for race-winning performance with versatile terrain capability.</p>
                            
                            <ul class="product-features">
                                <li>Toray T800-T1000 carbon fiber</li>
                                <li>45c/50c tire clearance</li>
                                <li>UDH compatible</li>
                                <li>Integrated mounting points</li>
                            </ul>
                            
                            <div class="product-price">
                                <span class="price-current">RM4,531.80</span>
                                <span class="price-original">RM5,005.00</span>
                            </div>
                            
                            <a href="<?php echo MORI_PATH; ?>" class="product-cta">View Details & Buy</a>
                        </div>
                    </div>

                    <!-- Falath EXP -->
                    <div class="product-card">
                        <div class="product-image" style="background-image: url('https://ueeshop.ly200-cdn.com/u_file/UPAX/UPAX437/2504/09/products/4.jpg')">
                            <div class="product-badge">UCI APPROVED</div>
                        </div>
                        <div class="product-content">
                            <div class="product-category">Aero Road</div>
                            <h3 class="product-title">Elves Falath EXP</h3>
                            <p class="product-description">2025 UCI-approved aero road racing frameset with advanced ITAC aerodynamics for serious competitive cyclists.</p>
                            
                            <ul class="product-features">
                                <li>Japanese Toray T800 & T1000 carbon</li>
                                <li>ITAC aerodynamic design</li>
                                <li>UCI approved for racing</li>
                                <li>Full internal cable routing</li>
                            </ul>
                            
                            <div class="product-price">
                                <span class="price-current">RM5,460.00</span>
                            </div>
                            
                            <a href="<?php echo FALATH_PATH; ?>" class="product-cta">View Details & Buy</a>
                        </div>
                    </div>

                    <!-- Amanyar -->
                    <div class="product-card">
                        <div class="product-image" style="background-image: url('https://ueeshop.ly200-cdn.com/u_file/UPAX/UPAX437/2409/17/products/b6eb7138e2.jpg')">
                            <div class="product-badge">TRIATHLON</div>
                        </div>
                        <div class="product-content">
                            <div class="product-category">Triathlon/TT</div>
                            <h3 class="product-title">Elves Amanyar 1.0</h3>
                            <p class="product-description">Ultimate triathlon performance with optimized aerodynamics and massive 2.25L hydration storage capacity.</p>
                            
                            <ul class="product-features">
                                <li>2.25L hydration storage</li>
                                <li>Truncated airfoil design</li>
                                <li>Toray T800/T1000 carbon</li>
                                <li>Compatible with 12-speed groupsets</li>
                            </ul>
                            
                            <div class="product-price">
                                <span class="price-current">RM8,645.00</span>
                            </div>
                            
                            <a href="<?php echo AMANYAR_PATH; ?>" class="product-cta">View Details & Buy</a>
                        </div>
                    </div>

                    <!-- Vanyar -->
                    <div class="product-card">
                        <div class="product-image" style="background-image: url('https://ueeshop.ly200-cdn.com/u_file/UPAX/UPAX437/2204/18/products/Elegant-BlueChameleonNavy-Blue-3cee.jpg')">
                            <div class="product-badge">LIGHTWEIGHT</div>
                        </div>
                        <div class="product-content">
                            <div class="product-category">Road Disc</div>
                            <h3 class="product-title">Elves Vanyar</h3>
                            <p class="product-description">Ultra-lightweight 760g carbon road frameset with stunning chameleon paint options and premium performance.</p>
                            
                            <ul class="product-features">
                                <li>Ultra-light 760g frame</li>
                                <li>100+ color options</li>
                                <li>Chameleon paint finishes</li>
                                <li>Disc brake compatible</li>
                            </ul>
                            
                            <div class="product-price">
                                <span class="price-current">RM4,750.20</span>
                                <span class="price-original">RM5,915.00</span>
                            </div>
                            
                            <a href="<?php echo VANYAR_PATH; ?>" class="product-cta">View Details & Buy</a>
                        </div>
                    </div>

                    <!-- Avari -->
                    <div class="product-card">
                        <div class="product-image" style="background-image: url('https://ueeshop.ly200-cdn.com/u_file/UPAX/UPAX437/2404/17/products/605e13c647.jpg')">
                            <div class="product-badge">PERFECT FIT</div>
                        </div>
                        <div class="product-content">
                            <div class="product-category">Road Disc</div>
                            <h3 class="product-title">Elves Avari Pro</h3>
                            <p class="product-description">UCI-approved road frameset with higher stack geometry, perfect for riders 145-188cm tall with superior comfort.</p>
                            
                            <ul class="product-features">
                                <li>Higher stack geometry</li>
                                <li>Fits riders 145-188cm</li>
                                <li>Japanese Toray T800 carbon</li>
                                <li>EN 14766 certified</li>
                            </ul>
                            
                            <div class="product-price">
                                <span class="price-current">RM5,005.00</span>
                            </div>
                            
                            <a href="<?php echo AVARI_PATH; ?>" class="product-cta">View Details & Buy</a>
                        </div>
                    </div>

                    <!-- Nandor -->
                    <div class="product-card">
                        <div class="product-image" style="background-image: url('https://ueeshop.ly200-cdn.com/u_file/UPAX/UPAX437/2210/03/photo/Blk-RedChameleonCarbonGray-edfa.jpg')">
                            <div class="product-badge">XC RACING</div>
                        </div>
                        <div class="product-content">
                            <div class="product-category">29er Hardtail</div>
                            <h3 class="product-title">Elves Nandor Pro</h3>
                            <p class="product-description">Third generation 29er XC hardtail with race-ready geometry, available in 900g superlight configuration.</p>
                            
                            <ul class="product-features">
                                <li>900g superlight option</li>
                                <li>T1000/T800/M40 carbon</li>
                                <li>Innovative "X" headtube</li>
                                <li>29er hardtail design</li>
                            </ul>
                            
                            <div class="product-price">
                                <span class="price-current">RM3,867.50</span>
                                <span class="price-original">RM5,005.00</span>
                            </div>
                            
                            <a href="<?php echo NANDOR_PATH; ?>" class="product-cta">View Details & Buy</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="section" style="background: var(--bg-light);">
            <div class="container">
                <div class="section-header">
                    <h2>Why Choose Cyclistation?</h2>
                    <p>Your trusted partner for premium cycling performance</p>
                </div>
                
                <div class="intro-content">
                    <div class="intro-text">
                        <h3>Official Elves Dealer</h3>
                        <p>As an authorized dealer, we provide genuine Elves products with full manufacturer warranty and expert support. Every frameset comes with comprehensive documentation and professional guidance.</p>
                        
                        <div class="trust-signals">
                            <div class="trust-item">5-year global warranty on all frames</div>
                            <div class="trust-item">Expert technical support</div>
                            <div class="trust-item">Genuine products guaranteed</div>
                            <div class="trust-item">Professional assembly available</div>
                        </div>
                    </div>
                    
                    <div class="intro-image">
                        <div style="width: 100%; height: 300px; background: var(--bg-gradient); border-radius: var(--border-radius); display: flex; align-items: center; justify-content: center; color: white; font-size: 1.2rem; text-align: center;">
                            <div>
                                <div style="margin-bottom: 1rem;">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNhHZM7HEPSpyEASO2Et02A_c-uQTeNRSicA&s" alt="Cyclistation Logo" style="width: 80px; height: 80px; border-radius: 50%; background: white; padding: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                                </div>
                                <div>Professional Bicycle<br>Workshop & Service</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="section">
            <div class="container">
                <div class="section-header">
                    <h2>Get in Touch</h2>
                    <p>Ready to find your perfect frameset? We're here to help.</p>
                </div>
                
                <div class="trust-signals">
                    <div class="trust-item">Expert Consultation Available</div>
                    <div class="trust-item">Custom Build Services</div>
                    <div class="trust-item">Nationwide Shipping</div>
                </div>
                
                <div style="text-align: center; margin-top: 2rem;">
                    <button id="contactBtn" class="cta-button">Contact Our Experts</button>
                </div>
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