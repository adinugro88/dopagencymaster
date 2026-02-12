<?php
$page_title = 'Portfolio';
$active_page = 'portfolio';
require_once 'includes/lang.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>


<section class="hero" style="min-height: 60vh;">
    <div class="container">
        <div class="hero-content">
            <h1><?php echo t('portfolio_hero_title'); ?></h1>
            <p><?php echo t('portfolio_hero_subtitle'); ?></p>
        </div>
    </div>
</section>
<!-- Portfolio Section -->
<section class="portfolio" style="background: white; min-height: 100vh;">
    <div class="container">
        <div class="section-title">
            <h2><?php echo t('portfolio_title'); ?></h2>
            <p><?php echo t('portfolio_subtitle'); ?></p>
        </div>
        <div class="owl-carousel owl-theme portfolio-carousel">
            <?php
            $projects = [
                [
                    'name' => 'ERP Construction', 
                    'image' => 'ERPConstruction.png', 
                    'category' => 'Web Development',
                    'desc' => 'Sistem ERP komprehensif untuk manajemen proyek konstruksi, mencakup modul inventaris, SDM, dan keuangan.',
                    'tech' => 'PHP, Laravel, MySQL'
                ],
                [
                    'name' => 'Barbershop App', 
                    'image' => 'barbershop.jpg', 
                    'category' => 'Mobile App',
                    'desc' => 'Aplikasi booking barbershop dengan fitur real-time schedule dan sistem loyalty point.',
                    'tech' => 'Flutter, Firebase'
                ],
                [
                    'name' => 'Binary Tech', 
                    'image' => 'binary.jpg', 
                    'category' => 'Web Design',
                    'desc' => 'Redesign website korporat untuk perusahaan teknologi dengan pendekatan modern dan futuristik.',
                    'tech' => 'HTML5, CSS3, GSAP'
                ],
                [
                    'name' => 'Cielo Cura', 
                    'image' => 'cielocura.jpg', 
                    'category' => 'E-Commerce',
                    'desc' => 'Platform e-commerce untuk produk kesehatan dan kecantikan dengan integrasi payment gateway.',
                    'tech' => 'WooCommerce, WordPress'
                ],
                [
                    'name' => 'Dandanoma', 
                    'image' => 'dandanoma.jpg', 
                    'category' => 'Branding',
                    'desc' => 'Identitas visual lengkap untuk brand fashion lokal, mulai dari logo hingga panduan media sosial.',
                    'tech' => 'Adobe Illustrator, Photoshop'
                ],
                [
                    'name' => 'Edgemat', 
                    'image' => 'edgemat.png', 
                    'category' => 'Web App',
                    'desc' => 'Platform edukasi matematika interaktif untuk siswa sekolah dasar.',
                    'tech' => 'React, Node.js'
                ],
                [
                    'name' => 'ERP Agency', 
                    'image' => 'erpagency.png', 
                    'category' => 'Enterprise System',
                    'desc' => 'Sistem manajemen terintegrasi untuk agensi digital, mengelola proyek, klien, dan tim.',
                    'tech' => 'Laravel, Vue.js'
                ],
                [
                    'name' => 'ERP System', 
                    'image' => 'erpsystem.png', 
                    'category' => 'Software',
                    'desc' => 'Core ERP framework yang dapat disesuaikan untuk berbagai kebutuhan bisnis skala besar.',
                    'tech' => '.NET Core, SQL Server'
                ],
                [
                    'name' => 'Eyearbook', 
                    'image' => 'eyearbook.png', 
                    'category' => 'Social Media',
                    'desc' => 'Platform buku tahunan digital interaktif dengan fitur sosial dan galeri multimedia.',
                    'tech' => 'React Native, Node.js'
                ],
                [
                    'name' => 'Fluxury', 
                    'image' => 'fluxury.png', 
                    'category' => 'E-Commerce',
                    'desc' => 'Marketplace barang mewah dengan fitur autentikasi produk dan lelang online.',
                    'tech' => 'Magento, PHP'
                ],
                [
                    'name' => 'Frontier', 
                    'image' => 'frontier.jpg', 
                    'category' => 'Corporate',
                    'desc' => 'Website profil perusahaan energi terbarukan dengan desain bersih dan informatif.',
                    'tech' => 'WordPress, Bootstrap'
                ],
                [
                    'name' => 'Garansi', 
                    'image' => 'garansi.png', 
                    'category' => 'Platform',
                    'desc' => 'Sistem klaim garansi elektronik untuk produk elektronik konsumen.',
                    'tech' => 'Laravel, Livewire'
                ],
                [
                    'name' => 'Indo Rekor', 
                    'image' => 'indorekor.png', 
                    'category' => 'Platform',
                    'desc' => 'Platform distribusi musik digital untuk musisi independen Indonesia.',
                    'tech' => 'WordPress, SEO'
                ],
                [
                    'name' => 'InviGuard', 
                    'image' => 'inviguard.jpg', 
                    'category' => 'Security',
                    'desc' => 'Dashboard monitoring keamanan siber real-time dengan visualisasi data ancaman.',
                    'tech' => 'Vue.js, D3.js'
                ],
                [
                    'name' => 'Jam Sembilan', 
                    'image' => 'jamsembilan.jpg', 
                    'category' => 'Lifestyle',
                    'desc' => 'Aplikasi reservasi dan menu digital untuk chain coffee shop modern.',
                    'tech' => 'Flutter, Laravel API'
                ],
                [
                    'name' => 'Kita Basodara', 
                    'image' => 'kitabasodara.png', 
                    'category' => 'Community',
                    'desc' => 'Portal komunitas sosial untuk menghubungkan diaspora daerah perantauan.',
                    'tech' => 'WordPress, BuddyPress'
                ],
                [
                    'name' => 'Lemisamu', 
                    'image' => 'lemisamu.jpg', 
                    'category' => 'Fashion',
                    'desc' => 'Online store untuk brand fashion etnik kontemporer dengan katalog interaktif.',
                    'tech' => 'WordPress, WooCommerce'
                ],
                [
                    'name' => 'Parama', 
                    'image' => 'parama.jpg', 
                    'category' => 'Corporate',
                    'desc' => 'Website konsultan manajemen strategis dengan portofolio case study mendalam.',
                    'tech' => 'WordPress, SEO'
                ],
                [
                    'name' => 'POS System', 
                    'image' => 'pos1.png', 
                    'category' => 'SaaS',
                    'desc' => 'Aplikasi Point of Sales berbasis cloud untuk UMKM ritel dan F&B.',
                    'tech' => 'React, Firebase'
                ],
                [
                    'name' => 'Renee Homewear', 
                    'image' => 'reneehomewear.JPG', 
                    'category' => 'E-Commerce',
                    'desc' => 'Butik online pakaian rumah premium dengan pengalaman belanja yang seamless.',
                    'tech' => 'WooCommerce, Elementor'
                ],
                [
                    'name' => 'TDS Paint', 
                    'image' => 'tdspaint.jpg', 
                    'category' => 'Manufacturing',
                    'desc' => 'Katalog produk digital dan visualizer warna untuk produsen cat industri.',
                    'tech' => 'WordPress, SEO'
                ],
                [
                    'name' => 'Zen Cave', 
                    'image' => 'zencave.jpg', 
                    'category' => 'Hospitality',
                    'desc' => 'Booking engine dan virtual tour untuk resort wellness eksklusif.',
                    'tech' => 'WordPress, A-Frame'
                ],
                [
                    'name' => 'Zen Goods', 
                    'image' => 'zengoods.jpg', 
                    'category' => 'Retail',
                    'desc' => 'Aplikasi belanja barang-barang kebutuhan rumah tangga minimalis.',
                    'tech' => 'WordPress, SEO'
                ],
            ];
            
            $total_projects = count($projects);
            foreach($projects as $index => $project):
            ?>
            <div class="portfolio-item" 
                 data-title="<?php echo $project['name']; ?>" 
                 data-category="<?php echo $project['category']; ?>"
                 data-image="asset/projek/<?php echo $project['image']; ?>"
                 data-desc="<?php echo $project['desc']; ?>"
                 data-tech="<?php echo $project['tech']; ?>">
                <div class="portfolio-image-wrapper">
                    <img src="asset/projek/<?php echo $project['image']; ?>" alt="<?php echo $project['name']; ?>">
                </div>
                <div class="portfolio-card-info">
                    <h4><?php echo $project['name']; ?></h4>
                    <span class="project-count">Project <?php echo $index + 1; ?> of <?php echo $total_projects; ?></span>
                    <p class="portfolio-category"><?php echo $project['category']; ?></p>
                    
                    <div class="portfolio-card-footer">
                        <div class="portfolio-tech">
                            <i class="fas fa-code"></i>
                            <span><?php echo $project['tech']; ?></span>
                        </div>
                        <button class="btn-view-detail" onclick="openProjectModal(this.closest('.portfolio-item'))">
                            <i class="fas fa-plus"></i> View Detail
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Technology Section -->
<section class="tech-section">
    <div class="container">
        <div class="section-title">
            <h2><?php echo t('tech_title'); ?></h2>
            <p><?php echo t('tech_subtitle'); ?></p>
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


<!-- Process Section -->
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

<!-- CTA Section -->
<div class="container">
    <section class="cta-section">
        <h2><?php echo t('cta_title'); ?></h2>
        <p><?php echo t('cta_subtitle'); ?></p>
        <a href="/contact" class="btn btn-primary"><?php echo t('cta_button'); ?></a>
    </section>
</div>

<!-- Project Modal -->
<div id="projectModal" class="modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <div class="modal-body">
            <div class="modal-image">
                <img id="modalImg" src="" alt="Project Image">
            </div>
            <div class="modal-info">
                <span id="modalCategory" class="modal-cat">Category</span>
                <h3 id="modalTitle">Project Title</h3>
                <p id="modalDesc">Project Description goes here.</p>
                <div class="modal-tech">
                    <strong>Technologies:</strong>
                    <span id="modalTech">HTML, CSS</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
