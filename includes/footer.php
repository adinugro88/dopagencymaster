<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Company Info -->
            <div class="footer-col">
                <div class="footer-logo">
                    <img src="asset/logo/logodopputih.webp" alt="dopagency Logo">
                    <span>Agency</span>
                </div>
                <p class="footer-desc"><?php echo t('footer_about'); ?></p>
                <div class="social-links">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="footer-col">
                <h4><?php echo t('footer_quick_links'); ?></h4>
                <ul class="footer-links">
                    <li><a href="/"><?php echo t('nav_home'); ?></a></li>
                    <li><a href="/about"><?php echo t('nav_about'); ?></a></li>
                    <li><a href="/service"><?php echo t('nav_services'); ?></a></li>
                    <li><a href="/portfolio"><?php echo t('nav_portfolio'); ?></a></li>
                    <li><a href="/contact"><?php echo t('nav_contact'); ?></a></li>
                </ul>
            </div>
            
            <!-- Services -->
            <div class="footer-col">
                <h4><?php echo t('footer_services_title'); ?></h4>
                <ul class="footer-links">
                    <li><a href="/service"><?php echo t('service_web_title'); ?></a></li>
                    <li><a href="/service"><?php echo t('service_mobile_title'); ?></a></li>
                    <li><a href="/service"><?php echo t('service_digital_title'); ?></a></li>
                    <li><a href="/service"><?php echo t('service_branding_title'); ?></a></li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div class="footer-col">
                <h4><?php echo t('footer_contact_title'); ?></h4>
                <ul class="footer-contact">
                    <li><i class="fas fa-map-marker-alt"></i> Jakarta, Indonesia</li>
                    <li><i class="fas fa-phone"></i> +62 812-3456-7890</li>
                    <li><i class="fas fa-envelope"></i> info@dopagency.com</li>
                    <li><i class="fas fa-clock"></i> <?php echo t('contact_hours_detail'); ?></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p><?php echo t('footer_copyright'); ?></p>
        </div>
    </div>
</footer>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Three.js Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<!-- 3D Background Script -->
<script src="js/background-3d.js?v=<?php echo time(); ?>"></script>
<script src="js/main.js?v=<?php echo time(); ?>"></script>
</body>
</html>
