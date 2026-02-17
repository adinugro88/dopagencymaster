<?php
$page_title = 'About Us';
$active_page = 'about';
require_once 'includes/lang.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<!-- Hero Section -->
<section class="hero" style="min-height: 60vh;">
    <div class="container">
        <div class="hero-content">
            <h1><?php echo t('about_hero_title'); ?></h1>
            <p><?php echo t('about_hero_subtitle'); ?></p>
        </div>
    </div>
</section>

<!-- About Story Section -->
<section class="about-story">
    <div class="container">
        <div class="section-title">
            <h2><?php echo t('about_story_title'); ?></h2>
            <p><?php echo t('about_story_desc'); ?></p>
        </div>
    </div>
</section>

<!-- Vision & Mission Section -->
<section class="vision-mission" style="background: var(--background);">
    <div class="container">
        <div class="vision-mission-grid">
            <!-- Vision -->
            <div class="vision-mission-card vision">
                <h3>
                    <i class="fas fa-eye" style="margin-right: 12px;"></i>
                    <?php echo t('about_vision_title'); ?>
                </h3>
                <p style="font-size: 16px; color: var(--gray); line-height: 1.8;">
                    <?php echo t('about_vision_desc'); ?>
                </p>
            </div>
            
            <!-- Mission -->
            <div class="vision-mission-card mission">
                <h3>
                    <i class="fas fa-bullseye" style="margin-right: 12px;"></i>
                    <?php echo t('about_mission_title'); ?>
                </h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="margin-bottom: 12px; padding-left: 32px; position: relative; font-size: 16px; color: var(--gray); line-height: 1.8;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0; top: 4px; color: var(--accent); font-size: 18px;"></i>
                        <?php echo t('about_mission_1'); ?>
                    </li>
                    <li style="margin-bottom: 12px; padding-left: 32px; position: relative; font-size: 16px; color: var(--gray); line-height: 1.8;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0; top: 4px; color: var(--accent); font-size: 18px;"></i>
                        <?php echo t('about_mission_2'); ?>
                    </li>
                    <li style="margin-bottom: 12px; padding-left: 32px; position: relative; font-size: 16px; color: var(--gray); line-height: 1.8;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0; top: 4px; color: var(--accent); font-size: 18px;"></i>
                        <?php echo t('about_mission_3'); ?>
                    </li>
                    <li style="margin-bottom: 12px; padding-left: 32px; position: relative; font-size: 16px; color: var(--gray); line-height: 1.8;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0; top: 4px; color: var(--accent); font-size: 18px;"></i>
                        <?php echo t('about_mission_4'); ?>
                    </li>
                    <li style="margin-bottom: 0; padding-left: 32px; position: relative; font-size: 16px; color: var(--gray); line-height: 1.8;">
                        <i class="fas fa-check-circle" style="position: absolute; left: 0; top: 4px; color: var(--accent); font-size: 18px;"></i>
                        <?php echo t('about_mission_5'); ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Core Values Section -->
<section class="core-values">
    <div class="container">
        <div class="section-title">
            <h2><?php echo t('about_values_title'); ?></h2>
        </div>
        <div class="services-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3> <?php echo t('about_value_1'); ?></h3>
                <p><?php echo t('about_value_1_desc'); ?></p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3> <?php echo t('about_value_2'); ?></h3>
                <p><?php echo t('about_value_2_desc'); ?></p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <h3> <?php echo t('about_value_3'); ?></h3>
                <p><?php echo t('about_value_3_desc'); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->

<!-- Team Section -->

<!-- CTA Section -->
<div class="container">
    <section class="cta-section">
        <h2><?php echo t('about_cta_title'); ?></h2>
        <p><?php echo t('about_cta_desc'); ?></p>
        <a href="/contact" class="btn btn-primary"><?php echo t('cta_button'); ?></a>
    </section>
</div>

<?php require_once 'includes/footer.php'; ?>
