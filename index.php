<?php
$page_title = 'Home';
$active_page = 'home';
require_once 'includes/lang.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-split">
            <div class="hero-content">
                <h1><?php echo t('hero_title'); ?></h1>
                <p><?php echo t('hero_subtitle'); ?></p>
                <div class="hero-buttons">
                    <a href="/contact" class="btn btn-primary"><?php echo t('hero_cta'); ?></a>
                    <a href="/about" class="btn btn-outline"><?php echo t('hero_learn_more'); ?></a>
                </div>
            </div>
            <div class="hero-image">
                <img src="asset/herosection/heroindex.webp" alt="dopagency digital solutions">
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services" style="background: var(--background);">
    <div class="container">
        <div class="section-title">
            <h2><?php echo t('services_title'); ?></h2>
            <p><?php echo t('services_subtitle'); ?></p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3><?php echo t('service_web_title'); ?></h3>
                <p><?php echo t('service_web_desc'); ?></p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3><?php echo t('service_mobile_title'); ?></h3>
                <p><?php echo t('service_mobile_desc'); ?></p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3><?php echo t('service_digital_title'); ?></h3>
                <p><?php echo t('service_digital_desc'); ?></p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-palette"></i>
                </div>
                <h3><?php echo t('service_branding_title'); ?></h3>
                <p><?php echo t('service_branding_desc'); ?></p>
            </div>
        </div>
    </div>
</section>
<!-- Technology Section -->
<section class="tech-section">
    <div class="container">
        <div class="section-title">
            <h2><?php echo t('tech_title'); ?></h2>
            <p><?php echo t('tech_subtitle'); ?></p>
            <div style="margin-top: 50px; animation: fadeInUp 0.8s 0.6s ease-out backwards;">
            <a href="/portfolio" class="btn btn-primary">
                <?php echo t('tech_cta'); ?>
            </a>
        </div>
        </div>
        <div class="tech-grid">
            <div class="tech-card">
                <i class="fab fa-laravel tech-icon tech-laravel"></i>
                <h4>Laravel</h4>
            </div>
            <div class="tech-card">
                <i class="fab fa-wordpress tech-icon tech-wordpress"></i>
                <h4>WordPress</h4>
            </div>
            <div class="tech-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Flutter_logo.svg/500px-Flutter_logo.svg.png" class="tech-img" alt="Flutter">
                <h4>Flutter</h4>
            </div>
            <div class="tech-card">
                <i class="fab fa-figma tech-icon tech-figma"></i>
                <h4>Figma</h4>
            </div>
            <div class="tech-card">
                <i class="fas fa-database tech-icon tech-postgres"></i>
                <h4>PostgreSQL</h4>
            </div>
            <div class="tech-card">
                <i class="fas fa-chart-line tech-icon tech-google"></i>
                <h4>GA Analytic</h4>
            </div>
            <div class="tech-card">
                <i class="fab fa-vuejs tech-icon tech-vue"></i>
                <h4>Vue JS</h4>
            </div>
            <div class="tech-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCzApCSKjUkRHwMhoL8XxWYEWouit_OE5X6A&s" class="tech-img roblox-tilt" alt="Roblox">
                <h4>Roblox</h4>
            </div>
            <div class="tech-card">
                <i class="fas fa-robot tech-icon tech-godot"></i>
                <h4>Godot</h4>
            </div>
            <div class="tech-card">
                <i class="fas fa-database tech-icon tech-mysql"></i>
                <h4>MySQL</h4>
            </div>
            <div class="tech-card">
                <i class="fab fa-node-js tech-icon tech-nodejs"></i>
                <h4>Node.js</h4>
            </div>
            <div class="tech-card">
                <i class="fab fa-react tech-icon tech-react"></i>
                <h4>React</h4>
            </div>
            <div class="tech-card">
                <i class="fab fa-php tech-icon tech-php"></i>
                <h4>PHP</h4>
            </div>
            <div class="tech-card">
                <i class="fab fa-python tech-icon tech-python"></i>
                <h4>Python</h4>
            </div>
        </div>
        
    </div>
</section>


<!-- Testimonials Section -->
<section class="testimonials" style="background: var(--background);">
    <div class="container">
        <div class="section-title">
            <h2><?php echo t('testimonial_title'); ?></h2>
            <p><?php echo t('testimonial_subtitle'); ?></p>
        </div>
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <p class="testimonial-text"><?php echo $lang == 'id' ? '"Kerja sama dengan dopagency sangat memuaskan. Tim yang profesional dan hasil yang luar biasa!"' : '"Working with dopagency was incredibly satisfying. Professional team and outstanding results!"'; ?></p>
                <div class="testimonial-author">
                    <div class="author-avatar">A</div>
                    <div class="author-info">
                        <h5>Ahmad Kusuma</h5>
                        <p>CEO, TechStart Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <p class="testimonial-text"><?php echo $lang == 'id' ? '"Website yang dibangun sangat responsif dan sesuai dengan kebutuhan bisnis kami. Highly recommended!"' : '"The website built is very responsive and meets our business needs. Highly recommended!"'; ?></p>
                <div class="testimonial-author">
                    <div class="author-avatar">S</div>
                    <div class="author-info">
                        <h5>Siti Rahmawati</h5>
                        <p><?php echo $lang == 'id' ? 'Founder, Fashionista Store' : 'Founder, Fashionista Store'; ?></p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <p class="testimonial-text"><?php echo $lang == 'id' ? '"Proses development yang transparan dan komunikasi yang baik membuat project berjalan lancar."' : '"Transparent development process and good communication made the project run smoothly."'; ?></p>
                <div class="testimonial-author">
                    <div class="author-avatar">B</div>
                    <div class="author-info">
                        <h5>Budi Santoso</h5>
                        <p><?php echo $lang == 'id' ? 'Marketing Director, Global Corp' : 'Marketing Director, Global Corp'; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<div class="container">
    <section class="cta-section">
        <h2><?php echo t('cta_title'); ?></h2>
        <p><?php echo t('cta_subtitle'); ?></p>
        <a href="/contact" class="btn btn-primary"><?php echo t('cta_button'); ?></a>
    </section>
</div>

<?php require_once 'includes/footer.php'; ?>
