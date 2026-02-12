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
            <div class="contact-form">
                <h3 style="font-size: 28px; font-weight: 700; margin-bottom: 24px; color: var(--dark);">
                    <?php echo t('contact_form_title'); ?>
                </h3>
                <form>
                    <div class="form-group">
                        <label for="name"><?php echo t('contact_name'); ?></label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email"><?php echo t('contact_email'); ?></label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject"><?php echo t('contact_subject'); ?></label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message"><?php echo t('contact_message'); ?></label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-gradient" style="width: 100%;">
                        <i class="fas fa-paper-plane"></i>
                        <?php echo t('contact_send'); ?>
                    </button>
                </form>
            </div>
            
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
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Maps Section (Optional) -->
<section class="map" style="margin-top: 60px;">
    <div class="container">
        <div style="border-radius: 16px; overflow: hidden; box-shadow: var(--shadow-md); height: 400px; background: var(--light-gray); display: flex; align-items: center; justify-content: center;">
            <p style="color: var(--gray); font-size: 18px;">
                <i class="fas fa-map-marked-alt" style="font-size: 48px; margin-bottom: 16px; display: block; color: var(--primary);"></i>
                <?php echo $lang == 'id' ? 'Google Maps dapat ditambahkan di sini' : 'Google Maps can be added here'; ?>
            </p>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
