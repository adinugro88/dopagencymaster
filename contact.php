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
                <h3 style="font-size: 28px; font-weight: 700; margin-bottom: 32px; color: var(--dark);">
                    Hubungi Kami
                </h3>
                
                <form id="whatsappForm" style="display: flex; flex-direction: column; gap: 20px; align-items: flex-start;">
                    <div style="width: 100%; max-width: 500px;">
                        <label for="nama" style="display: block; margin-bottom: 8px; font-weight: 500; color: var(--dark);">
                            Nama Lengkap
                        </label>
                        <input 
                            type="text" 
                            id="nama" 
                            name="nama" 
                            placeholder="Masukkan nama Anda"
                            required
                            style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; box-sizing: border-box;"
                        >
                    </div>

                    <div style="width: 100%; max-width: 500px;">
                        <label for="service" style="display: block; margin-bottom: 8px; font-weight: 500;">
                            Layanan yang Diinginkan
                        </label>
                        <select 
                            id="service" 
                            name="service" 
                            required
                            style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; box-sizing: border-box; background-color: white;"
                        >
                            <option value="">-- Pilih Layanan --</option>
                            <option value="Web Design">Web Design</option>
                            <option value="Mobile App">Mobile App</option>
                            <option value="Fotografi">Fotografi & Studio Photo</option>
                            <option value="Branding">Branding & Logo Design</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>

                    <div style="width: 100%; max-width: 500px;">
                        <label for="pertanyaan" style="display: block; margin-bottom: 8px; font-weight: 500; color: var(--dark);">
                            Pertanyaan / Pesan
                        </label>
                        <textarea 
                            id="pertanyaan" 
                            name="pertanyaan" 
                            rows="5" 
                            placeholder="Tuliskan pertanyaan atau pesan Anda di sini..."
                            required
                            style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; box-sizing: border-box; font-family: Arial, sans-serif; resize: vertical;"
                        ></textarea>
                    </div>

                    <button 
                        type="submit" 
                        style="padding: 12px 28px; width: 50%; max-width: 250px; background-color: #25D366; color: white; border: none; border-radius: 6px; font-size: 16px; font-weight: 600; cursor: pointer; transition: background-color 0.3s; display: flex; align-items: center; justify-content: center; gap: 8px;"
                        onmouseover="this.style.backgroundColor='#20BA5A';"
                        onmouseout="this.style.backgroundColor='#25D366';"
                    >
                        <i class="fas fa-paper-plane"></i> Kirim Pesan
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
                        <p>Rawa Buntu Utara Blok H2 No.7 Tangerang Selatan</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="info-content">
                        <h4><?php echo t('contact_phone'); ?></h4>
                        <p>+62 8950 4596 920</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-content">
                        <h4><?php echo t('contact_email_label'); ?></h4>
                        <p>info@dopagency.com<br>rizki.md@dopagency.com</p>
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

<script>
document.getElementById('whatsappForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Ambil nilai dari form
    const nama = document.getElementById('nama').value;
    const service = document.getElementById('service').value;
    const pertanyaan = document.getElementById('pertanyaan').value;
    
    // Validasi form
    if (!nama || !service || !pertanyaan) {
        alert('Mohon lengkapi semua field terlebih dahulu');
        return;
    }
    
    // Format pesan untuk WhatsApp
    const message = `*Informasi Kontak Baru*%0A%0A*Nama:* ${encodeURIComponent(nama)}%0A*Layanan:* ${encodeURIComponent(service)}%0A*Pertanyaan/Pesan:* ${encodeURIComponent(pertanyaan)}`;
    
    // Nomor WhatsApp (tanpa + di depan)
    const phoneNumber = '628950459692';
    
    // URL WhatsApp API
    const whatsappUrl = `https://wa.me/${phoneNumber}?text=${message}`;
    
    // Buka WhatsApp
    window.open(whatsappUrl, '_blank');
    
    // Reset form
    this.reset();
});
</script>

<?php require_once 'includes/footer.php'; ?>
