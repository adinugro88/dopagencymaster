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
                <li><a href="index.php" class="nav-link <?php echo ($active_page == 'home') ? 'active' : ''; ?>"><?php echo t('nav_home'); ?></a></li>
                <li><a href="about.php" class="nav-link <?php echo ($active_page == 'about') ? 'active' : ''; ?>"><?php echo t('nav_about'); ?></a></li>
                <li><a href="service.php" class="nav-link <?php echo ($active_page == 'services') ? 'active' : ''; ?>"><?php echo t('nav_services'); ?></a></li>
                <li><a href="portfolio.php" class="nav-link <?php echo ($active_page == 'portfolio') ? 'active' : ''; ?>"><?php echo t('nav_portfolio'); ?></a></li>
                <li><a href="produk.php" class="nav-link <?php echo ($active_page == 'produk') ? 'active' : ''; ?>"><?php echo t('nav_produk'); ?></a></li>
                <li><a href="contact.php" class="nav-link <?php echo ($active_page == 'contact') ? 'active' : ''; ?>"><?php echo t('nav_contact'); ?></a></li>
            </ul>
            
            <!-- Language Switcher Dropdown -->
            <div class="language-switcher-dropdown">
                <button class="lang-dropdown-btn" id="langDropdownBtn" aria-label="Change Language">
                    <span class="flag-icon"><?php echo ($lang == 'id') ? '🇮🇩' : '🇬🇧'; ?></span>
                    <span class="lang-code"><?php echo strtoupper($lang); ?></span>
                    <i class="fas fa-chevron-down dropdown-arrow"></i>
                </button>
                <div class="lang-dropdown-menu" id="langDropdownMenu">
                    <a href="?lang=id" class="lang-option <?php echo ($lang == 'id') ? 'active' : ''; ?>">
                        <span class="flag-icon">🇮🇩</span>
                        <span class="lang-name">ID</span>
                    </a>
                    <a href="?lang=en" class="lang-option <?php echo ($lang == 'en') ? 'active' : ''; ?>">
                        <span class="flag-icon">🇬🇧</span>
                        <span class="lang-name">EN</span>
                    </a>
                </div>
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
