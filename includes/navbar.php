<nav class="navbar">
    <div class="container">
        <div class="nav-wrapper">
            <!-- Logo -->
            <a href="index.php" class="logo">
                <img src="asset/logo/logodopputih.webp" alt="dopagency Logo White" class="logo-white">
                <img src="asset/logo/logodophitam.webp" alt="dopagency Logo Black" class="logo-black">
                <span>Agency</span>
            </a>
            
            <!-- Navigation Menu -->
            <ul class="nav-menu">
                <li><a href="/" class="nav-link <?php echo ($active_page == 'home') ? 'active' : ''; ?>"><?php echo t('nav_home'); ?></a></li>
                <li><a href="/about" class="nav-link <?php echo ($active_page == 'about') ? 'active' : ''; ?>"><?php echo t('nav_about'); ?></a></li>
                <li><a href="/service" class="nav-link <?php echo ($active_page == 'services') ? 'active' : ''; ?>"><?php echo t('nav_services'); ?></a></li>
                <li><a href="/portfolio" class="nav-link <?php echo ($active_page == 'portfolio') ? 'active' : ''; ?>"><?php echo t('nav_portfolio'); ?></a></li>
                <li><a href="/contact" class="nav-link <?php echo ($active_page == 'contact') ? 'active' : ''; ?>"><?php echo t('nav_contact'); ?></a></li>
            </ul>
            
            <!-- Language Switcher -->
            <div class="language-switcher">
                <a href="?lang=id" class="lang-btn <?php echo ($lang == 'id') ? 'active' : ''; ?>">ID</a>
                <a href="?lang=en" class="lang-btn <?php echo ($lang == 'en') ? 'active' : ''; ?>">EN</a>
            </div>
            
            <!-- Mobile Menu Toggle -->
            <button class="mobile-toggle" aria-label="Toggle Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</nav>
