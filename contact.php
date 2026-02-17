<?php
$page_title = 'Contact';
$active_page = 'contact';
require_once 'includes/lang.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<!-- Hero Section -->
<section class="hero" style="min-height: 60vh;">
    <div class="container">
        <div class="hero-content">
            <h1><?php echo t('contact_hero_title'); ?></h1>
            <p><?php echo t('contact_hero_subtitle'); ?></p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Form -->
            
            <!-- Contact Info -->
            <div class="contact-info">
                <h3 style="font-size: 28px; font-weight: 700; margin-bottom: 32px; color: var(--dark);">
                    <?php echo t('contact_info_title'); ?>
                </h3>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-content">
                        <h4><?php echo t('contact_address'); ?></h4>
                        <p>Jl. Sudirman No. 123<br>Jakarta 12190, Indonesia</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="info-content">
                        <h4><?php echo t('contact_phone'); ?></h4>
                        <p>+62 812-3456-7890<br>+62 21-1234-5678</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-content">
                        <h4><?php echo t('contact_email_label'); ?></h4>
                        <p>info@dopagency.com<br>hello@dopagency.com</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="info-content">
                        <h4><?php echo t('contact_hours'); ?></h4>
                        <p><?php echo t('contact_hours_detail'); ?></p>
                    </div>
                </div>
                
                <div style="margin-top: 40px;">
                    <h4 style="font-weight: 600; margin-bottom: 16px; color: var(--dark);">
                        <?php echo t('contact_social_title'); ?>
                    </h4>
                    <div class="social-links">
                        <a href="https://www.instagram.com/dopagencydigital/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php require_once 'includes/footer.php'; ?>
