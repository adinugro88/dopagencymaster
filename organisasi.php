<?php
$page_title = 'Organization';
$active_page = 'organization';
require_once 'includes/lang.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<!-- Hero Section -->
<section class="hero" style="min-height: 60vh;">
    <div class="container">
        <div class="hero-content">
            <h1><?php echo t('org_hero_title'); ?></h1>
            <p><?php echo t('org_hero_subtitle'); ?></p>
        </div>
    </div>
</section>

<!-- Organizational Structure Section -->
<section class="org-structure">
    <div class="container">
        <div class="section-title">
            <h2><?php echo t('org_structure_title'); ?></h2>
        </div>
        
        <!-- Hierarchy Diagram -->
        <div style="max-width: 800px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 40px;">
                <div class="team-member" style="display: inline-block; max-width: 280px;">
                    <div class="member-avatar">CEO</div>
                    <h4 class="member-name">Chief Executive Officer</h4>
                    <p class="member-role"><?php echo $lang == 'id' ? 'Direktur Utama' : 'CEO'; ?></p>
                </div>
            </div>
            
            <div class="team-grid" style="gap: 24px;">
                <div class="team-member">
                    <div class="member-avatar">CTO</div>
                    <h4 class="member-name">Chief Technology Officer</h4>
                    <p class="member-role"><?php echo $lang == 'id' ? 'Kepala Teknologi' : 'Technology Head'; ?></p>
                </div>
                <div class="team-member">
                    <div class="member-avatar">CMO</div>
                    <h4 class="member-name">Chief Marketing Officer</h4>
                    <p class="member-role"><?php echo $lang == 'id' ? 'Kepala Marketing' : 'Marketing Head'; ?></p>
                </div>
                <div class="team-member">
                    <div class="member-avatar">CDO</div>
                    <h4 class="member-name">Chief Design Officer</h4>
                    <p class="member-role"><?php echo $lang == 'id' ? 'Kepala Desain' : 'Design Head'; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Company Culture Section -->
<section class="culture" style="background: var(--background);">
    <div class="container">
        <div class="section-title">
            <h2><?php echo t('org_culture_title'); ?></h2>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3><?php echo t('org_culture_1'); ?></h3>
                <p><?php echo t('org_culture_1_desc'); ?></p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3><?php echo t('org_culture_2'); ?></h3>
                <p><?php echo t('org_culture_2_desc'); ?></p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3><?php echo t('org_culture_3'); ?></h3>
                <p><?php echo t('org_culture_3_desc'); ?></p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <h3><?php echo t('org_culture_4'); ?></h3>
                <p><?php echo t('org_culture_4_desc'); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Values & Mission Section -->
<section class="values">
    <div class="container">
        <div class="section-title">
            <h2><?php echo t('org_values_title'); ?></h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 40px; max-width: 1000px; margin: 0 auto;">
            <div style="background: white; padding: 40px; border-radius: 16px; box-shadow: var(--shadow-md); border-left: 4px solid var(--primary);">
                <h3 style="font-size: 28px; font-weight: 700; color: var(--primary); margin-bottom: 16px;">
                    <i class="fas fa-eye" style="margin-right: 12px;"></i>
                    <?php echo t('org_vision'); ?>
                </h3>
                <p style="font-size: 16px; color: var(--gray); line-height: 1.8;">
                    <?php echo t('org_vision_desc'); ?>
                </p>
            </div>
            <div style="background: white; padding: 40px; border-radius: 16px; box-shadow: var(--shadow-md); border-left: 4px solid var(--accent);">
                <h3 style="font-size: 28px; font-weight: 700; color: var(--accent); margin-bottom: 16px;">
                    <i class="fas fa-bullseye" style="margin-right: 12px;"></i>
                    <?php echo t('org_mission'); ?>
                </h3>
                <p style="font-size: 16px; color: var(--gray); line-height: 1.8;">
                    <?php echo t('org_mission_desc'); ?>
                </p>
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
