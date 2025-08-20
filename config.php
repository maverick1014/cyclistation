<?php
/**
 * Cyclistation Website Configuration
 * Centralized configuration for paths and settings
 */

// Website Configuration
define('SITE_NAME', 'Cyclistation');
define('SITE_TAGLINE', 'Premium Elves Carbon Bike Framesets');

// Path Configuration
// Automatically detect environment and set base path
$isProduction = isset($_SERVER['HTTP_HOST']) && !in_array($_SERVER['HTTP_HOST'], ['localhost', '127.0.0.1']);
$isDigitalOcean = isset($_SERVER['HTTP_HOST']) && strpos($_SERVER['HTTP_HOST'], '.ondigitalocean.app') !== false;

if ($isProduction || $isDigitalOcean) {
    define('BASE_PATH', '/');
} else {
    define('BASE_PATH', '/cyclistation/');
}

// Asset Paths
define('CSS_PATH', BASE_PATH . 'assets/css/');
define('JS_PATH', BASE_PATH . 'assets/js/');
define('IMAGES_PATH', BASE_PATH . 'assets/images/');

// Page Paths
define('HOME_PATH', BASE_PATH);
define('MORI_PATH', BASE_PATH . 'mori.php');
define('FALATH_PATH', BASE_PATH . 'falath.php');
define('AMANYAR_PATH', BASE_PATH . 'amanyar.php');
define('VANYAR_PATH', BASE_PATH . 'vanyar.php');
define('AVARI_PATH', BASE_PATH . 'avari.php');
define('NANDOR_PATH', BASE_PATH . 'nandor.php');

// External Purchase Links - Elves Official Website
define('MORI_BUY_URL', 'https://my.elvesbike.com/products/elves-mori-aerox-carbon-aero-gravel-framesets');
define('FALATH_BUY_URL', 'https://my.elvesbike.com/products/elves-falath-exp-carbon-road-disc-framesets-uci-approved?VariantsId=12072');
define('AMANYAR_BUY_URL', 'https://my.elvesbike.com/products/elves-amanyar-10-carbon-triathlon-disc-framesets,tt-carbon-disc-framesets?VariantsId=11906');
define('VANYAR_BUY_URL', 'https://my.elvesbike.com/products/vanyar-carbon-road-frameset?VariantsId=10188');
define('AVARI_BUY_URL', 'https://my.elvesbike.com/products/elves-avari-pro-road-disc-framesets-uci?VariantsId=11610');
define('NANDOR_BUY_URL', 'https://my.elvesbike.com/products/elves-nandor-pro-29er-xc-mtb-hardtail-carbon-frame?VariantsId=10356');

// Helper Functions
function asset_url($path) {
    return BASE_PATH . 'assets/' . ltrim($path, '/');
}

function css_url($filename) {
    return CSS_PATH . $filename;
}

function js_url($filename) {
    return JS_PATH . $filename;
}

function image_url($filename) {
    return IMAGES_PATH . $filename;
}

function page_url($page = '') {
    return BASE_PATH . ltrim($page, '/');
}

// SEO Configuration
define('DEFAULT_META_DESCRIPTION', 'Discover premium Elves carbon bike framesets at Cyclistation. From aero gravel to XC hardtails, find your perfect high-performance frameset with global warranty and expert support.');
define('DEFAULT_META_KEYWORDS', 'elves bikes, carbon framesets, gravel bike, road bike, triathlon bike, mountain bike, cyclistation, premium cycling');

// Company Information
define('COMPANY_NAME', 'Cyclistation');
define('COMPANY_EMAIL', 'info@cyclistation.com');
define('COMPANY_PHONE', '+60-12-345-6789');
define('COMPANY_ADDRESS', 'Kuala Lumpur, Malaysia');

// Analytics
define('GA_MEASUREMENT_ID', 'GA_MEASUREMENT_ID'); // Replace with actual Google Analytics ID

// Environment
define('ENVIRONMENT', 'development'); // 'development' or 'production'
define('DEBUG_MODE', true);

// Current Year for Footer
define('CURRENT_YEAR', date('Y'));

// Server Information
function get_current_url() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    return $protocol . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}

function get_base_url() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    return $protocol . '://' . $_SERVER['HTTP_HOST'] . BASE_PATH;
}
?>