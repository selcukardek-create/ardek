<?php
/**
 * Kampüste Yaşam Section - Selçuk Üniversitesi Tarzı
 */

$services = [
    ['icon' => 'fas fa-concierge-bell', 'title' => 'KAMPÜS', 'subtitle' => 'HİZMETLERİ'],
    ['icon' => 'fas fa-wheelchair', 'title' => 'ENGELSİZ', 'subtitle' => 'KAMPÜS'],
    ['icon' => 'fas fa-users', 'title' => 'ÖĞRENCİ', 'subtitle' => 'KULÜPLERİ'],
    ['icon' => 'fas fa-comments', 'title' => 'REHBERLİK', 'subtitle' => 'DANIŞMANLIK'],
    ['icon' => 'fas fa-palette', 'title' => 'KÜLTÜR &', 'subtitle' => 'SANAT'],
    ['icon' => 'fas fa-book-open', 'title' => 'SELÇUK', 'subtitle' => 'KÜTÜPHANE']
];
?>

<!-- KAMPÜSTE YAŞAM SECTION -->
<section class="campus-life section" id="kampus-yasam">
    <!-- Title Card -->
    <div class="campus-life-title-card">
        <h2 class="campus-life-main-title">KAMPÜSTE YAŞAM</h2>
        <p class="campus-life-main-subtitle">Yaşamını Kaliteli Hale Getir.</p>
        <div class="campus-life-flower">
            <img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?w=100&h=150&fit=crop" alt="Flower">
        </div>
    </div>
    
    <div class="container">
        <div class="campus-life-wrapper">
            <!-- Left Content -->
            <div class="campus-life-content">
                <h3 class="campus-life-heading">
                    Doğanın ve Bilimin Buluştuğu<br>
                    <span>Yaşam Alanı!</span>
                </h3>
                <p class="campus-life-desc">
                    Selçuk Üniversitesi kampüsü, Konya'nın eşsiz doğasıyla iç içe, özgür ve dinamik bir yaşam sunar. 
                    Öğrenciler için hem akademik hem de sosyal açıdan zengin olanaklar sunulan bu ortamda, yeşil alanlar, 
                    kültürel etkinlikler ve spor faaliyetleri bir arada bulunur.
                </p>
                <a href="#" class="campus-life-btn"><span>Kampüsleri Gör</span></a>
            </div>
            
            <!-- Right Services Grid -->
            <div class="campus-life-services">
                <?php foreach ($services as $service): ?>
                <a href="#" class="campus-service-card">
                    <div class="campus-service-icon">
                        <i class="<?php echo $service['icon']; ?>"></i>
                    </div>
                    <div class="campus-service-text">
                        <span class="campus-service-title"><?php echo $service['title']; ?></span>
                        <span class="campus-service-subtitle"><?php echo $service['subtitle']; ?></span>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
