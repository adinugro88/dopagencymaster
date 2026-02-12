<?php
session_start();

// Set default language
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'id';
}

// Handle language switch
if (isset($_GET['lang']) && in_array($_GET['lang'], ['id', 'en'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

$lang = $_SESSION['lang'];

// Translation arrays
$translations = [
    'id' => [
        // Navigation
        'nav_home' => 'Beranda',
        'nav_about' => 'Tentang Kami',
        'nav_services' => 'Layanan',
        'nav_portfolio' => 'Portfolio',
        'portfolio_hero_title' => 'Portfolio Kami',
        'portfolio_hero_subtitle' => 'Menampilkan karya terbaik dan inovasi digital kami.',
        'contact_wa' => 'Konsultasi via WhatsApp',
        'nav_contact' => 'Kontak',
        
        // Home Page
        'hero_title' => 'Solusi Digital Terpercaya untuk Bisnis Anda',
        'hero_subtitle' => 'Kami membantu bisnis Anda berkembang dengan layanan digital marketing, web development, dan strategi bisnis yang inovatif',
        'hero_cta' => 'Mulai Sekarang',
        'hero_learn_more' => 'Pelajari Lebih Lanjut',
        
        'services_title' => 'Layanan Kami',
        'services_subtitle' => 'Solusi lengkap untuk kebutuhan digital Anda',
        
        'service_web_title' => 'Web Development',
        'service_web_desc' => 'Membangun website modern, responsif, dan user-friendly',
        
        'service_mobile_title' => 'Mobile Apps',
        'service_mobile_desc' => 'Aplikasi mobile native dan cross-platform',
        
        'service_digital_title' => 'Digital Marketing',
        'service_digital_desc' => 'Strategi pemasaran digital yang efektif dan terukur',
        
        'service_branding_title' => 'Branding & Design',
        'service_branding_desc' => 'Identitas visual yang kuat dan menarik',
        
        'portfolio_title' => 'Portfolio Kami',
        'portfolio_subtitle' => 'Proyek yang telah kami selesaikan',
        'portfolio_view' => 'Lihat Detail',
        
        'testimonial_title' => 'Apa Kata Klien Kami',
        'testimonial_subtitle' => 'Kepercayaan klien adalah prioritas kami',
        
        'cta_title' => 'Siap Membawa Bisnis Anda ke Level Berikutnya?',
        'cta_subtitle' => 'Mari berdiskusi bagaimana kami dapat membantu Anda',
        'cta_button' => 'Hubungi Kami',
        
        // About Page
        'about_hero_title' => 'Tentang dopagency',
        'about_hero_subtitle' => 'Solusi Terintegrasi, Kreatif, dan Berdampak.',
        
        'about_story_title' => 'Tentang dopagency',
        'about_story_desc' => 'dopagency mengkhususkan diri dalam digital marketing, desain kreatif, dan solusi teknologi. Kami menjawab tantangan bisnis dengan strategi inovatif, fungsional, dan berorientasi hasil dalam lanskap digital yang terus berkembang pesat.',
        
        'about_vision_title' => 'Visi Kami',
        'about_vision_desc' => 'Menjadi mitra terpercaya bagi bisnis yang mencari keunggulan digital dan pertumbuhan berkelanjutan melalui solusi marketing dan teknologi inovatif.',
        
        'about_mission_title' => 'Misi Kami',
        'about_mission_1' => 'Menghadirkan solusi digital marketing yang inovatif',
        'about_mission_2' => 'Menyediakan layanan desain kreatif terdepan',
        'about_mission_3' => 'Memberdayakan bisnis dengan strategi berbasis data',
        'about_mission_4' => 'Mengembangkan produk dan kampanye digital yang berdampak',
        'about_mission_5' => 'Membangun kemitraan kolaboratif untuk kesuksesan bersama',
        
        'about_values_title' => 'Nilai Inti Kami',
        'about_value_1' => 'Inovatif',
        'about_value_1_desc' => 'Mengadopsi teknologi terbaru dan tren kreatif untuk tetap unggul.',
        'about_value_2' => 'Kolaboratif',
        'about_value_2_desc' => 'Membangun kemitraan kuat yang berfokus pada klien berdasarkan kepercayaan dan transparansi.',
        'about_value_3' => 'Berkualitas',
        'about_value_3_desc' => 'Komitmen terhadap keunggulan dalam setiap proyek dan hasil kerja.',
        
        'about_cta_title' => 'Siap Mengangkat Brand Anda?',
        'about_cta_desc' => 'Mari berkolaborasi untuk mengangkat brand Anda dan meraih kesuksesan digital yang luar biasa.',
        
        'about_team_title' => 'Tim Kami',
        'about_team_subtitle' => 'Profesional berpengalaman di bidangnya',
        
        'about_stats_title' => 'Pencapaian Kami',
        'stat_projects' => 'Proyek Selesai',
        'stat_clients' => 'Klien Puas',
        'stat_awards' => 'Penghargaan',
        'stat_years' => 'Tahun Pengalaman',
        
        // Services Page
        'services_hero_title' => 'Layanan Kami',
        'services_hero_subtitle' => 'Solusi Digital Lengkap untuk Pertumbuhan Bisnis Anda',
        
        'service_1_title' => 'Pengembangan Website',
        'service_1_icon' => 'fas fa-laptop-code',
        'service_1_desc' => 'Solusi web komprehensif untuk membangun kehadiran online Anda',
        'service_1_sub_1' => 'Website Profil Perusahaan - Showcase profesional untuk brand Anda',
        'service_1_sub_2' => 'Content Management System (CMS) - Website yang mudah dikelola',
        'service_1_sub_3' => 'Portal E-Learning - Platform pendidikan interaktif',
        'service_1_sub_4' => 'Pengembangan Website Custom - Solusi khusus sesuai kebutuhan unik',
        
        'service_2_title' => 'Aplikasi & Sistem',
        'service_2_icon' => 'fas fa-mobile-alt',
        'service_2_desc' => 'Aplikasi mobile dan enterprise untuk operasional yang lancar',
        'service_2_sub_1' => 'Aplikasi Mobile (Android/iOS) - Aplikasi native dan cross-platform',
        'service_2_sub_2' => 'Sistem Manajemen - Streamline proses bisnis Anda',
        'service_2_sub_3' => 'Dashboard & Tracking KPI - Analitik bisnis real-time',
        'service_2_sub_4' => 'Integrasi SAP / ERP - Solusi perencanaan sumber daya enterprise',
        
        'service_3_title' => 'Game Studio',
        'service_3_icon' => 'fas fa-gamepad',
        'service_3_desc' => 'Pengalaman gaming imersif dan media interaktif',
        'service_3_sub_1' => 'Game Designer & Developer - Pengembangan game full-cycle',
        'service_3_sub_2' => 'Roblox Developer - Pengalaman metaverse dan gaming',
        'service_3_sub_3' => '3D Modeler - Aset dan karakter 3D berkualitas tinggi',
        'service_3_sub_4' => 'Media Interaktif - Pengalaman digital yang engaging',
        
        'service_4_title' => 'Desain Kreatif',
        'service_4_icon' => 'fas fa-palette',
        'service_4_desc' => 'Identitas visual dan branding yang menonjol',
        'service_4_sub_1' => 'Logo & Branding Kit - Paket identitas brand lengkap',
        'service_4_sub_2' => 'Desain Merchandise - Material promosi bermerek',
        'service_4_sub_3' => 'Konten Media Sosial - Posting dan visual yang engaging',
        'service_4_sub_4' => 'Kartun & Ilustrasi - Desain karakter custom',
        
        'service_5_title' => 'Animasi & Motion',
        'service_5_icon' => 'fas fa-film',
        'service_5_desc' => 'Storytelling visual dinamis untuk dampak maksimal',
        'service_5_sub_1' => 'Iklan Motion Graphic - Iklan animasi yang menarik perhatian',
        'service_5_sub_2' => 'Aset Animasi 2D / 3D - Konten animasi profesional',
        'service_5_sub_3' => 'Desain Karakter - Karakter animasi yang memorable',
        'service_5_sub_4' => 'Visual Effects (VFX) - Peningkatan visual yang memukau',

        'service_6_title' => 'Fotografi & Video',
        'service_6_icon' => 'fas fa-camera',
        'service_6_desc' => 'Konten visual profesional untuk elevasi brand',
        'service_6_sub_1' => 'Video Profil Perusahaan - Storytelling korporat',
        'service_6_sub_2' => 'Fotografi Produk - Showcase produk berkualitas tinggi',
        'service_6_sub_3' => 'Video Branding - Identitas brand melalui motion',
        'service_6_sub_4' => 'Konten Event - Menangkap momen berkesan',
        
        'process_title' => 'Proses Kerja Kami',
        'process_step_1' => 'Konsultasi',
        'process_step_1_desc' => 'Diskusi awal untuk memahami visi dan kebutuhan bisnis Anda secara mendalam.',
        'process_step_2' => 'Perencanaan',
        'process_step_2_desc' => 'Menyusun strategi kreatif dan teknis yang terperinci serta timeline proyek.',
        'process_step_3' => 'Pengembangan',
        'process_step_3_desc' => 'Proses desain dan coding dengan standar kualitas tinggi oleh tim ahli.',
        'process_step_4' => 'Testing',
        'process_step_4_desc' => 'Uji coba menyeluruh untuk memastikan performa maksimal dan bebas bug.',
        'process_step_5' => 'Peluncuran',
        'process_step_5_desc' => 'Penyerahan produk akhir dan monitoring performa setelah go-live.',
        
        'why_choose_title' => 'Mengapa Memilih Kami',
        'why_1' => 'Tim berpengalaman dan profesional',
        'why_2' => 'Teknologi terkini dan terbaik',
        'why_3' => 'Harga kompetitif dan transparan',
        'why_4' => 'Dukungan dan pemeliharaan berkelanjutan',

        'tech_title' => 'Teknologi Kami',
        'tech_subtitle' => 'Kami menggunakan teknologi terkini untuk memberikan solusi digital terbaik bagi bisnis Anda.',
        'tech_cta' => 'Lihat Portofolio Kami',
        'why_4' => 'Support dan maintenance berkelanjutan',
        
        // Organization Page
        'org_hero_title' => 'Struktur Organisasi',
        'org_hero_subtitle' => 'Tim solid yang berdedikasi untuk kesuksesan Anda',
        
        'org_structure_title' => 'Struktur Tim',
        'org_hierarchy_title' => 'Hierarki Perusahaan',
        
        'org_culture_title' => 'Budaya Perusahaan',
        'org_culture_1' => 'Inovasi',
        'org_culture_1_desc' => 'Selalu mencari cara baru dan lebih baik',
        'org_culture_2' => 'Kolaborasi',
        'org_culture_2_desc' => 'Bekerja sama untuk hasil terbaik',
        'org_culture_3' => 'Integritas',
        'org_culture_3_desc' => 'Jujur dan bertanggung jawab',
        'org_culture_4' => 'Excellence',
        'org_culture_4_desc' => 'Memberikan yang terbaik setiap saat',
        
        'org_values_title' => 'Nilai & Misi',
        'org_vision' => 'Visi',
        'org_vision_desc' => 'Menjadi digital agency terdepan di Indonesia yang membantu bisnis bertransformasi digital.',
        'org_mission' => 'Misi',
        'org_mission_desc' => 'Memberikan solusi digital inovatif dengan kualitas terbaik dan layanan prima kepada setiap klien.',
        
        // Contact Page
        'contact_hero_title' => 'Hubungi Kami',
        'contact_hero_subtitle' => 'Mari diskusikan bagaimana kami dapat membantu bisnis Anda',
        
        'contact_form_title' => 'Kirim Pesan',
        'contact_name' => 'Nama',
        'contact_email' => 'Email',
        'contact_subject' => 'Subjek',
        'contact_message' => 'Pesan',
        'contact_send' => 'Kirim Pesan',
        
        'contact_info_title' => 'Informasi Kontak',
        'contact_address' => 'Alamat',
        'contact_phone' => 'Telepon',
        'contact_email_label' => 'Email',
        
        'contact_social_title' => 'Media Sosial',
        'contact_hours' => 'Jam Operasional',
        'contact_hours_detail' => 'Senin - Jumat: 09.00 - 17.00 WIB',
        
        // Footer
        'footer_about' => 'dopagency adalah digital agency yang menyediakan solusi lengkap untuk kebutuhan bisnis Anda.',
        'footer_quick_links' => 'Link Cepat',
        'footer_services_title' => 'Layanan',
        'footer_contact_title' => 'Kontak',
        'footer_copyright' => '© 2026 dopagency. All rights reserved.',
    ],
    
    'en' => [
        // Navigation
        'nav_home' => 'Home',
        'nav_about' => 'About Us',
        'nav_services' => 'Services',
        'nav_portfolio' => 'Portfolio',
        'nav_contact' => 'Contact',
        
        // Home Page
        'hero_title' => 'Trusted Digital Solutions for Your Business',
        'hero_subtitle' => 'We help your business grow with innovative digital marketing, web development, and business strategy services',
        'hero_cta' => 'Get Started',
        'hero_learn_more' => 'Learn More',
        
        'services_title' => 'Our Services',
        'services_subtitle' => 'Complete solutions for your digital needs',
        
        'service_web_title' => 'Web Development',
        'service_web_desc' => 'Building modern, responsive, and user-friendly websites',
        
        'service_mobile_title' => 'Mobile Apps',
        'service_mobile_desc' => 'Native and cross-platform mobile applications',
        
        'service_digital_title' => 'Digital Marketing',
        'service_digital_desc' => 'Effective and measurable digital marketing strategies',
        
        'service_branding_title' => 'Branding & Design',
        'service_branding_desc' => 'Strong and attractive visual identity',
        
        'portfolio_title' => 'Our Portfolio',
        'portfolio_subtitle' => 'Projects we have completed',
        'portfolio_view' => 'View Details',
        
        'testimonial_title' => 'What Our Clients Say',
        'testimonial_subtitle' => 'Client trust is our priority',
        
        'cta_title' => 'Ready to Take Your Business to the Next Level?',
        'cta_subtitle' => 'Let\'s discuss how we can help you',
        'cta_button' => 'Contact Us',
        'nav_portfolio' => 'Portfolio',
        'portfolio_hero_title' => 'Our Portfolio',
        'portfolio_hero_subtitle' => 'Showcasing our best work and digital innovations.',
        'contact_wa' => 'Consult via WhatsApp',
        
        // About Page
        'about_hero_title' => 'About dopagency',
        'about_hero_subtitle' => 'Integrated, Creative, and Impactful Solutions.',
        
        'about_story_title' => 'About dopagency',
        'about_story_desc' => 'dopagency specializes in digital marketing, creative design, and technology solutions. We address business challenges with innovative, functional, and results-driven strategies in today\'s fast-evolving digital landscape.',
        
        'about_vision_title' => 'Our Vision',
        'about_vision_desc' => 'To become a trusted partner for businesses seeking digital excellence and sustainable growth through innovative marketing and technology solutions.',
        
        'about_mission_title' => 'Our Mission',
        'about_mission_1' => 'Deliver innovative digital marketing solutions',
        'about_mission_2' => 'Provide cutting-edge creative design services',
        'about_mission_3' => 'Empower businesses with data-driven strategies',
        'about_mission_4' => 'Develop impactful digital products and campaigns',
        'about_mission_5' => 'Build collaborative partnerships for mutual success',
        
        'about_values_title' => 'Our Core Values',
        'about_value_1' => 'Innovative',
        'about_value_1_desc' => 'Embracing the latest technology and creative trends to stay ahead of the curve.',
        'about_value_2' => 'Collaborative',
        'about_value_2_desc' => 'Building strong, client-focused partnerships based on trust and transparency.',
        'about_value_3' => 'Quality',
        'about_value_3_desc' => 'Commitment to excellence in every project and deliverable.',
        
        'about_cta_title' => 'Ready to Elevate Your Brand?',
        'about_cta_desc' => 'Let\'s collaborate to elevate your brand and achieve remarkable digital success.',
        
        'about_team_title' => 'Our Team',
        'about_team_subtitle' => 'Experienced professionals in their fields',
        
        'about_stats_title' => 'Our Achievements',
        'stat_projects' => 'Projects Completed',
        'stat_clients' => 'Happy Clients',
        'stat_awards' => 'Awards',
        'stat_years' => 'Years of Experience',
        
        // Services Page
        'services_hero_title' => 'Our Services',
        'services_hero_subtitle' => 'Complete Digital Solutions for Your Business Growth',
        
        'service_1_title' => 'Website Development',
        'service_1_icon' => 'fas fa-laptop-code',
        'service_1_desc' => 'Comprehensive web solutions to establish your online presence',
        'service_1_sub_1' => 'Company Profile Website - Professional showcase for your brand',
        'service_1_sub_2' => 'Content Management System (CMS) - Easy-to-manage websites',
        'service_1_sub_3' => 'E-Learning Portal - Interactive educational platforms',
        'service_1_sub_4' => 'Custom Website Development - Tailored solutions for unique needs',
        
        'service_2_title' => 'App & Systems',
        'service_2_icon' => 'fas fa-mobile-alt',
        'service_2_desc' => 'Mobile and enterprise applications for seamless operations',
        'service_2_sub_1' => 'Mobile Apps (Android/iOS) - Native and cross-platform applications',
        'service_2_sub_2' => 'Management Systems - Streamline your business processes',
        'service_2_sub_3' => 'Dashboard & KPI Tracking - Real-time business analytics',
        'service_2_sub_4' => 'SAP / ERP Integration - Enterprise resource planning solutions',
        
        'service_3_title' => 'Game Studio',
        'service_3_icon' => 'fas fa-gamepad',
        'service_3_desc' => 'Immersive gaming experiences and interactive media',
        'service_3_sub_1' => 'Game Designer & Developer - Full-cycle game development',
        'service_3_sub_2' => 'Roblox Developer - Metaverse and gaming experiences',
        'service_3_sub_3' => '3D Modeler - High-quality 3D assets and characters',
        'service_3_sub_4' => 'Interactive Media - Engaging digital experiences',
        
        'service_4_title' => 'Creative Design',
        'service_4_icon' => 'fas fa-palette',
        'service_4_desc' => 'Visual identity and branding that stands out',
        'service_4_sub_1' => 'Logo & Branding Kit - Complete brand identity package',
        'service_4_sub_2' => 'Merchandise Design - Branded promotional materials',
        'service_4_sub_3' => 'Social Media Content - Engaging posts and visuals',
        'service_4_sub_4' => 'Caricature & Illustrations - Custom character designs',
        
        'service_5_title' => 'Animation & Motion',
        'service_5_icon' => 'fas fa-film',
        'service_5_desc' => 'Dynamic visual storytelling for maximum impact',
        'service_5_sub_1' => 'Motion Graphic Ads - Eye-catching animated advertisements',
        'service_5_sub_2' => '2D / 3D Animation Assets - Professional animated content',
        'service_5_sub_3' => 'Character Design - Memorable animated characters',
        'service_5_sub_4' => 'Visual Effects (VFX) - Stunning visual enhancements',
        
        'service_6_title' => 'Photography & Video',
        'service_6_icon' => 'fas fa-camera',
        'service_6_desc' => 'Professional visual content for brand elevation',
        'service_6_sub_1' => 'Company Profile Videos - Corporate storytelling',
        'service_6_sub_2' => 'Product Photography - High-quality product showcases',
        'service_6_sub_3' => 'Branding Videos - Brand identity through motion',
        'service_6_sub_4' => 'Event Content - Capturing memorable moments',
        
        'process_title' => 'Our Work Process',
        'process_step_1' => 'Consultation',
        'process_step_1_desc' => 'Initial discussion to deeply understand your business vision and needs.',
        'process_step_2' => 'Planning',
        'process_step_2_desc' => 'Developing detailed creative and technical strategies and project timelines.',
        'process_step_3' => 'Development',
        'process_step_3_desc' => 'Design and coding process with high quality standards by our expert team.',
        'process_step_4' => 'Testing',
        'process_step_4_desc' => 'Thorough testing to ensure maximum performance and bug-free results.',
        'process_step_5' => 'Launch',
        'process_step_5_desc' => 'Handover of the final product and performance monitoring after go-live.',
        
        'why_choose_title' => 'Why Choose Us',
        'why_1' => 'Experienced and professional team',
        'why_2' => 'Latest and best technology',
        'why_3' => 'Competitive and transparent pricing',
        'why_4' => 'Ongoing support and maintenance',

        'tech_title' => 'Our Technology Stack',
        'tech_subtitle' => 'We use the latest technologies to deliver the best digital solutions for your business.',
        'tech_cta' => 'View Our Portfolio',
        'why_4' => 'Ongoing support and maintenance',
        
        // Organization Page
        'org_hero_title' => 'Organizational Structure',
        'org_hero_subtitle' => 'A solid team dedicated to your success',
        
        'org_structure_title' => 'Team Structure',
        'org_hierarchy_title' => 'Company Hierarchy',
        
        'org_culture_title' => 'Company Culture',
        'org_culture_1' => 'Innovation',
        'org_culture_1_desc' => 'Always seeking new and better ways',
        'org_culture_2' => 'Collaboration',
        'org_culture_2_desc' => 'Working together for the best results',
        'org_culture_3' => 'Integrity',
        'org_culture_3_desc' => 'Honest and responsible',
        'org_culture_4' => 'Excellence',
        'org_culture_4_desc' => 'Delivering the best at all times',
        
        'org_values_title' => 'Values & Mission',
        'org_vision' => 'Vision',
        'org_vision_desc' => 'To be the leading digital agency in Indonesia helping businesses transform digitally.',
        'org_mission' => 'Mission',
        'org_mission_desc' => 'Providing innovative digital solutions with the best quality and excellent service to every client.',
        
        // Contact Page
        'contact_hero_title' => 'Contact Us',
        'contact_hero_subtitle' => 'Let\'s discuss how we can help your business',
        
        'contact_form_title' => 'Send Message',
        'contact_name' => 'Name',
        'contact_email' => 'Email',
        'contact_subject' => 'Subject',
        'contact_message' => 'Message',
        'contact_send' => 'Send Message',
        
        'contact_info_title' => 'Contact Information',
        'contact_address' => 'Address',
        'contact_phone' => 'Phone',
        'contact_email_label' => 'Email',
        
        'contact_social_title' => 'Social Media',
        'contact_hours' => 'Business Hours',
        'contact_hours_detail' => 'Monday - Friday: 09.00 AM - 05.00 PM',
        
        // Footer
        'footer_about' => 'dopagency is a digital agency that provides complete solutions for your business needs.',
        'footer_quick_links' => 'Quick Links',
        'footer_services_title' => 'Services',
        'footer_contact_title' => 'Contact',
        'footer_copyright' => '© 2026 dopagency. All rights reserved.',
    ]
];

// Helper function to get translation
function t($key) {
    global $translations, $lang;
    return $translations[$lang][$key] ?? $key;
}
?>
