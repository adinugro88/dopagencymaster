<?php
$page_title = 'Services';
$active_page = 'services';
require_once 'includes/lang.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<!-- Hero Section -->
<section class="hero" style="min-height: 60vh;">
    <div class="container">
        <div class="hero-content">
            <h1><?php echo t('services_hero_title'); ?></h1>
            <p><?php echo t('services_hero_subtitle'); ?></p>
        </div>
    </div>
</section>

<!-- Services Detail Section -->
<section class="services-detail">
    <div class="container">
        <div class="services-grid services-grid-detail">
            <?php for ($i = 1; $i <= 6; $i++): ?>
            <div class="service-card service-card-detail">
                <div class="service-icon">
                    <i class="<?php echo t('service_'.$i.'_icon'); ?>"></i>
                </div>
                <h3><?php echo t('service_'.$i.'_title'); ?></h3>
                <p class="service-desc"><?php echo t('service_'.$i.'_desc'); ?></p>
                <ul class="service-sub-list">
                    <?php for ($j = 1; $j <= 4; $j++): ?>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <span><?php echo t('service_'.$i.'_sub_'.$j); ?></span>
                    </li>
                    <?php endfor; ?>
                </ul>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="process" style="background: var(--background);">
    <div class="container">
        <div class="section-title">
            <h2><?php echo t('process_title'); ?></h2>
        </div>
        <div class="process-container">
            <div class="process-vertical">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                <div class="process-step-vertical">
                    <div class="step-marker">
                        <div class="step-number"><?php echo $i; ?></div>
                        <div class="step-line"></div>
                    </div>
                    <div class="step-content">
                        <h4><?php echo t('process_step_'.$i); ?></h4>
                        <p class="step-desc"><?php echo t('process_step_'.$i.'_desc'); ?></p>
                    </div>
                </div>
                <?php endfor; ?>
                
                <!-- WA Contact Button -->
                <div style="margin-top: 40px; animation: fadeInUp 0.8s 0.6s ease-out backwards;">
                    <a href="https://wa.me/YOUR_PHONE_NUMBER_HERE" class="btn btn-primary" style="background: #25D366; color: white; border: none;">
                        <i class="fab fa-whatsapp" style="font-size: 20px;"></i>
                        <?php echo t('contact_wa'); ?>
                    </a>
                </div>
            </div>
            <div class="process-image-wrapper">
                <div class="process-image-placeholder">
                    <img src="asset/herosection/heroindex.webp" alt="Process Demonstration">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose">
    <div class="container">
        <div class="section-title">
            <h2><?php echo t('why_choose_title'); ?></h2>
        </div>
        <div class="services-grid" style="max-width: 900px; margin: 0 auto;">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3><?php echo t('why_1'); ?></h3>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3><?php echo t('why_2'); ?></h3>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <h3><?php echo t('why_3'); ?></h3>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3><?php echo t('why_4'); ?></h3>
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


<!-- CTA Section -->
<div class="container">
    <section class="cta-section">
        <h2><?php echo t('cta_title'); ?></h2>
        <p><?php echo t('cta_subtitle'); ?></p>
        <a href="/contact" class="btn btn-primary"><?php echo t('cta_button'); ?></a>
    </section>
</div>

<?php require_once 'includes/footer.php'; ?>
