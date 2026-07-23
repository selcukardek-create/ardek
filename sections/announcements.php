<?php
/**
 * Duyurular Section - Selçuk Üniversitesi Tarzı
 */

$announcements = [
    [
        'day' => '01',
        'month' => 'Aralık',
        'year' => '2024',
        'date' => '01 Aralık 2024',
        'title' => 'Türkçe Dersleri Koordinatörlüğü Öğretim Görevlisi Alımı Nihai Değerlendirme Sonuçları',
        'image' => 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=300&fit=crop'
    ],
    [
        'day' => '01',
        'month' => 'Aralık',
        'year' => '2024',
        'date' => '01 Aralık 2024',
        'title' => 'Meteoroloji Laboratuvarı Öğretim Görevlisi Alımı Nihai Değerlendirme Sonuçları',
        'image' => 'assets/img/akademik.jpg'
    ],
    [
        'day' => '01',
        'month' => 'Aralık',
        'year' => '2024',
        'date' => '01 Aralık 2024',
        'title' => 'Mühendislik Fakültesi Araştırma Görevlisi Alımı Giriş Sınavı Sonuçları',
        'image' => 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=400&h=300&fit=crop'
    ],
    [
        'day' => '28',
        'month' => 'Kasım',
        'year' => '2024',
        'date' => '28 Kasım 2024',
        'title' => 'Yabancı Diller Yüksekokulu Rusça Öğretim Görevlisi Sözlü Sınav Sonuç Duyurusu',
        'image' => 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=400&h=300&fit=crop'
    ]
];
?>

<!-- DUYURULAR SECTION -->
<section class="announcements section" id="duyurular">
    <div class="container">
        <!-- Section Header -->
        <div class="announcements-header">
            <div class="announcements-title-wrapper">
                <h2 class="announcements-title">DUYURULAR</h2>
                <div class="announcements-nav">
                    <button class="announcements-nav-btn">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="announcements-nav-btn">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
            <a href="#" class="announcements-all-btn">
                <i class="fas fa-play"></i>
                TÜM DUYURULAR
            </a>
        </div>
        
        <!-- Announcements Grid -->
        <div class="announcements-grid">
            <?php foreach ($announcements as $item): ?>
            <a href="#" class="announcement-card">
                <div class="announcement-image">
                    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
                    <div class="announcement-date-overlay">
                    <span class="announcement-day"><?php echo $item['day']; ?></span>
                    <span class="announcement-month"><?php echo $item['month']; ?></span>
                    </div>
                </div>
                <div class="announcement-content">
                <p class="announcement-title"><?php echo $item['title']; ?></p>
                    <span class="announcement-date-text"><?php echo $item['date']; ?></span>
                </div>
                <div class="announcement-arrow">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
    
    <!-- Decorative Arrow -->
    <div class="announcements-deco">
        <svg viewBox="0 0 1440 50" preserveAspectRatio="none" style="width: 100%; height: 100%; display: block;">
            <path d="M0,0 L720,50 L1440,0 L1440,50 L0,50 Z" fill="#ffffff"/>
        </svg>
    </div>
</section>
