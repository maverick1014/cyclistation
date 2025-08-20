// Landing Page JavaScript - Conversion Optimized

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all landing page functionality
    initNavbar();
    initSmoothScrolling();
    initGallery();
    initCTATracking();
    initAnimations();
    initPriceCalculator();
});

// Navbar functionality
function initNavbar() {
    const navbar = document.querySelector('.navbar');
    const navToggle = document.querySelector('.nav-toggle');
    const navLinks = document.querySelector('.nav-links');
    
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    
    // Mobile menu toggle
    if (navToggle) {
        navToggle.addEventListener('click', function() {
            navLinks.classList.toggle('active');
        });
    }
}

// Smooth scrolling for navigation links
function initSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                
                // Close mobile menu if open
                const navLinks = document.querySelector('.nav-links');
                if (navLinks) {
                    navLinks.classList.remove('active');
                }
            }
        });
    });
}

// Gallery functionality
function initGallery() {
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    galleryItems.forEach(item => {
        item.addEventListener('click', function() {
            const img = this.querySelector('img');
            if (img) {
                openImageModal(img.src, img.alt);
            }
        });
    });
}

// Image modal for gallery
function openImageModal(src, alt) {
    const modal = document.createElement('div');
    modal.className = 'image-modal';
    modal.innerHTML = `
        <div class="modal-backdrop">
            <div class="modal-content">
                <button class="modal-close">&times;</button>
                <img src="${src}" alt="${alt}" class="modal-image">
                <p class="modal-caption">${alt}</p>
            </div>
        </div>
    `;
    
    document.body.appendChild(modal);
    document.body.style.overflow = 'hidden';
    
    // Close modal functionality
    const closeBtn = modal.querySelector('.modal-close');
    const backdrop = modal.querySelector('.modal-backdrop');
    
    function closeModal() {
        document.body.removeChild(modal);
        document.body.style.overflow = 'auto';
    }
    
    closeBtn.addEventListener('click', closeModal);
    backdrop.addEventListener('click', function(e) {
        if (e.target === backdrop) {
            closeModal();
        }
    });
    
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeModal();
        }
    });
}

// CTA button tracking and optimization
function initCTATracking() {
    const ctaButtons = document.querySelectorAll('.cta-button');
    
    ctaButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            // Track CTA clicks for analytics
            trackCTAClick(this.textContent, window.location.pathname);
            
            // Add loading state
            this.classList.add('loading');
            this.innerHTML = '<span>Processing...</span>';
            
            // Simulate processing (remove in production)
            setTimeout(() => {
                this.classList.remove('loading');
                this.innerHTML = this.dataset.originalText || 'Buy Now';
            }, 2000);
        });
        
        // Store original text
        button.dataset.originalText = button.textContent;
    });
}

// Analytics tracking function
function trackCTAClick(buttonText, page) {
    // This would integrate with your analytics service
    console.log('CTA Click:', {
        button: buttonText,
        page: page,
        timestamp: new Date().toISOString()
    });
    
    // Example: Google Analytics 4
    if (typeof gtag !== 'undefined') {
        gtag('event', 'purchase_intent', {
            'event_category': 'CTA',
            'event_label': buttonText,
            'value': 1
        });
    }
}

// Enhanced scroll animations
function initAnimations() {
    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -100px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
            }
        });
    }, observerOptions);
    
    // Add animation classes to elements and observe them
    addAnimationClasses();
    
    // Observe all elements with animation classes
    document.querySelectorAll('.animate-on-scroll, .animate-left, .animate-right, .animate-scale, .animate-stagger').forEach(el => {
        observer.observe(el);
    });
}

// Add animation classes to page elements
function addAnimationClasses() {
    // Section headers
    document.querySelectorAll('.section-header').forEach(header => {
        header.classList.add('animate-on-scroll');
    });
    
    // Intro content sections
    document.querySelectorAll('.intro-text').forEach((text, index) => {
        text.classList.add(index % 2 === 0 ? 'animate-left' : 'animate-right');
    });
    
    document.querySelectorAll('.intro-image').forEach((image, index) => {
        image.classList.add(index % 2 === 0 ? 'animate-right' : 'animate-left');
    });
    
    // Gallery and spec cards with staggered animation
    document.querySelectorAll('.gallery-item').forEach((item, index) => {
        item.classList.add('animate-stagger');
        item.classList.add(`delay-${Math.min(600, (index % 6) * 100 + 100)}`);
    });
    
    document.querySelectorAll('.spec-card').forEach((card, index) => {
        card.classList.add('animate-stagger');
        card.classList.add(`delay-${Math.min(600, (index % 6) * 100 + 100)}`);
    });
    
    // Testimonial cards
    document.querySelectorAll('.testimonial-card').forEach((card, index) => {
        card.classList.add('animate-scale');
        card.classList.add(`delay-${Math.min(400, index * 200 + 100)}`);
    });
    
    // Product cards on homepage
    document.querySelectorAll('.product-card').forEach((card, index) => {
        card.classList.add('animate-stagger');
        card.classList.add(`delay-${Math.min(600, index * 100 + 100)}`);
    });
    
    // Purchase sections
    document.querySelectorAll('.purchase .container').forEach(container => {
        container.classList.add('animate-on-scroll');
    });
    
    // Trust signals
    document.querySelectorAll('.trust-signals').forEach(signals => {
        signals.classList.add('animate-on-scroll');
    });
}

// Dynamic price calculator (if needed)
function initPriceCalculator() {
    const priceElements = document.querySelectorAll('.price');
    
    priceElements.forEach(priceEl => {
        const originalPrice = parseFloat(priceEl.dataset.original || 0);
        const discountPrice = parseFloat(priceEl.dataset.discount || 0);
        
        if (originalPrice && discountPrice) {
            const savings = originalPrice - discountPrice;
            const percentage = Math.round((savings / originalPrice) * 100);
            
            // Add savings indicator
            const savingsEl = document.createElement('div');
            savingsEl.className = 'savings-indicator';
            savingsEl.innerHTML = `Save RM${savings.toFixed(2)} (${percentage}% off)`;
            priceEl.parentNode.insertBefore(savingsEl, priceEl.nextSibling);
        }
    });
}

// Form validation (if forms are added later)
function validateForm(form) {
    const inputs = form.querySelectorAll('input[required], textarea[required]');
    let isValid = true;
    
    inputs.forEach(input => {
        if (!input.value.trim()) {
            showFieldError(input, 'This field is required');
            isValid = false;
        } else {
            clearFieldError(input);
        }
    });
    
    return isValid;
}

function showFieldError(field, message) {
    clearFieldError(field);
    field.classList.add('error');
    
    const errorEl = document.createElement('div');
    errorEl.className = 'field-error';
    errorEl.textContent = message;
    
    field.parentNode.insertBefore(errorEl, field.nextSibling);
}

function clearFieldError(field) {
    field.classList.remove('error');
    const errorEl = field.parentNode.querySelector('.field-error');
    if (errorEl) {
        errorEl.remove();
    }
}

// Utility functions
function formatPrice(price) {
    return `RM${price.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')}`;
}

function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Performance optimization
function lazyLoadImages() {
    const images = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
}

// Initialize lazy loading
document.addEventListener('DOMContentLoaded', lazyLoadImages);

// SEO and accessibility improvements
function initAccessibility() {
    // Add skip link functionality
    const skipLink = document.querySelector('.skip-link');
    if (skipLink) {
        skipLink.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.focus();
                target.scrollIntoView();
            }
        });
    }
    
    // Keyboard navigation for gallery
    document.querySelectorAll('.gallery-item').forEach(item => {
        item.setAttribute('tabindex', '0');
        item.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                this.click();
            }
        });
    });
}

// Initialize accessibility features
document.addEventListener('DOMContentLoaded', initAccessibility);

// Export functions for potential external use
window.LandingPage = {
    trackCTAClick,
    formatPrice,
    validateForm,
    openImageModal
};