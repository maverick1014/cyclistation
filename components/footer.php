<?php
/**
 * Footer Component
 * Reusable footer component with social media links
 */
?>
<!-- Footer -->
<footer class="footer">
    <div class="footer-content">
        <p class="footer-text">&copy; <?php echo date('Y'); ?> Cyclistation. All rights reserved.<?php 
            // Add additional links for index page
            if (basename($_SERVER['PHP_SELF']) == 'index.php') {
                echo ' | <a href="/privacy" style="color: white;">Privacy Policy</a> | <a href="/terms" style="color: white;">Terms of Service</a>';
            }
        ?></p>
    </div>
</footer>