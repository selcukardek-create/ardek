<?php
/**
 * Sayılarla Selçuk Section - Selçuk Üniversitesi Tarzı
 */

$stats_top = [
    ['icon' => 'fas fa-building-columns', 'number' => '7', 'label' => 'Fakülte'],
    ['icon' => 'fas fa-flask', 'number' => '8', 'label' => 'Enstitü'],
    ['icon' => 'fas fa-chalkboard-teacher', 'number' => '919', 'label' => 'Akademik Personel'],
    ['icon' => 'fas fa-user-graduate', 'number' => '16173', 'label' => 'Toplam Öğrenci']
];

$stats_bottom = [
    ['icon' => 'fas fa-book', 'number' => '700000+', 'label' => 'Bilgi Merkezi Basılı Kitap', 'btn' => 'Bilgi Merkezi'],
    ['icon' => 'fas fa-chart-line', 'number' => '221', 'label' => 'Bilimsel Araştırma Projeleri', 'btn' => 'Proje Merkezi'],
    ['icon' => 'fas fa-globe-europe', 'number' => '511', 'label' => 'Erasmus ve Exchange Anlaşması', 'btn' => 'Girişimcilik Ağı']
];

$rankings_news = [
    [
        'title' => 'Interdisciplinary Science Rankings 2025',
        'partner' => 'SCHMIDT SCIENCE FELLOWS',
        'desc' => 'Disiplinler Arası Bilim Sıralamasında 90. Sırada',
        'content' => 'Selçuk Üniversitesi, disiplinler arası bilim alanında dünya çapında önemli bir başarı elde etti. Bu başarı, üniversitemizin araştırma kalitesi ve akademik mükemmelliğinin bir göstergesidir.',
        'image' => 'https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=400&h=300&fit=crop'
    ],
    [
        'title' => 'Araştırma ve Geliştirme Başarıları',
        'partner' => 'TÜBİTAK',
        'desc' => 'Yılın En Başarılı Araştırma Üniversitesi',
        'content' => 'Üniversitemiz, TÜBİTAK tarafından yılın en başarılı araştırma üniversitesi seçildi. Bu ödül, akademik personelimizin ve öğrencilerimizin bilimsel çalışmalarındaki üstün başarılarını yansıtmaktadır.',
        'image' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=400&h=300&fit=crop'
    ],
    [
        'title' => 'Uluslararası İş Birliği Anlaşmaları',
        'partner' => 'ERASMUS+',
        'desc' => '500+ Üniversite ile İş Birliği',
        'content' => 'Selçuk Üniversitesi, dünya genelinde 500\'den fazla üniversite ile iş birliği anlaşması imzaladı. Bu anlaşmalar öğrenci ve akademik personel değişim programlarını kapsamaktadır.',
        'image' => 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=400&h=300&fit=crop'
    ]
];
?>

<!-- SAYILARLA SELÇUK SECTION -->
<section class="stats section" id="sayilar">
    <div class="container">
        <div class="stats-wrapper">
            <!-- Left - Rankings News -->
            <div class="stats-rankings">
                <div class="ranking-news-wrapper">
                    <?php foreach ($rankings_news as $index => $item): ?>
                    <div class="ranking-news-card <?php echo $index === 0 ? 'active' : ''; ?>">
                        <div class="ranking-image">
                            <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
                        </div>
                    <div class="ranking-header">
                        <div class="ranking-title-area">
                                <span class="ranking-badge"><?php echo $item['title']; ?></span>
                                <span class="ranking-year"><?php echo date('Y'); ?></span>
                            </div>
                        </div>
                        <div class="ranking-partner">
                            <span>In association with</span>
                            <strong><?php echo $item['partner']; ?></strong>
                        </div>
                        <h3 class="ranking-main-text">
                            <?php echo $item['desc']; ?>
                        </h3>
                        <p class="ranking-content">
                            <?php echo $item['content']; ?>
                        </p>
                    </div>
                    <?php endforeach; ?>
                    
                    <!-- Navigation -->
                    <div class="ranking-nav">
                        <button class="ranking-nav-btn ranking-prev"><i class="fas fa-chevron-left"></i></button>
                        <button class="ranking-nav-btn ranking-next"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
            
            <!-- Right - Stats -->
            <div class="stats-content">
                <!-- Header -->
                <div class="stats-header">
                    <div>
                        <h2 class="stats-title">SAYILARLA SELÇUK</h2>
                        <p class="stats-subtitle">Türkiye'nin En Köklü Üniversitesi.</p>
                    </div>
                    <a href="#" class="stats-all-btn">
                        <i class="fas fa-play"></i>
                        TÜM İSTATİSTİKLER
                    </a>
                </div>
                
                <!-- Top Stats -->
                <div class="stats-grid-top">
                    <?php foreach ($stats_top as $stat): ?>
                    <div class="stat-card-top">
                        <div class="stat-icon">
                            <i class="<?php echo $stat['icon']; ?>"></i>
                        </div>
                        <div class="stat-number"><?php echo $stat['number']; ?></div>
                        <div class="stat-label"><?php echo $stat['label']; ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
                
                <!-- Bottom Stats -->
                <div class="stats-grid-bottom">
                    <?php foreach ($stats_bottom as $stat): ?>
                    <div class="stat-card-bottom">
                        <div class="stat-icon-large">
                            <i class="<?php echo $stat['icon']; ?>"></i>
                        </div>
                        <div class="stat-number-large"><?php echo $stat['number']; ?></div>
                        <div class="stat-label-large"><?php echo $stat['label']; ?></div>
                        <a href="#" class="stat-btn"><?php echo $stat['btn']; ?></a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
