<?php
/**
 * Haberler Section - Selçuk Üniversitesi Tarzı
 * Birebir orijinal tasarım
 */

$featured_news = [
	[
		'image' => 'assets/img/huseyin-yilmaz.png',
		'day' => '24',
		'month' => 'Kasım',
		'category' => 'AKADEMİK',
		'title' => 'Rektör Prof. Dr. Hüseyin Yılmaz: "Selçuk Üniversitesi Bölgenin Lokomotifi Olmaya Devam Edecek"',
		'excerpt' => 'Selçuk Üniversitesi Rektörü Prof. Dr. Hüseyin Yılmaz, üniversitenin 2024-2025 akademik yılı açılışında önemli açıklamalarda bulundu...'
	],
    [
        'image' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=800&h=600&fit=crop',
        'day' => '22',
        'month' => 'Kasım',
        'category' => 'BİLİM',
        'title' => 'Mühendislik Fakültesi Yapay Zeka Araştırma Merkezi Açıldı',
        'excerpt' => 'Türkiye\'nin en kapsamlı yapay zeka araştırma merkezi Selçuk Üniversitesi\'nde hizmete girdi...'
    ]
];

$news_grid = [
    [
        'image' => 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=400&h=300&fit=crop',
        'title' => 'Selçuk Üniversitesi GETEM\'den Gönüllü Okuyuculuk Sertifika Töreni',
        'date' => '6 Kasım 2025',
        'category' => 'AKADEMİK'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?w=400&h=300&fit=crop',
        'title' => 'SENSES Projesi: Sürdürülebilir Gelecek İçin Uluslararası İşbirliği',
        'date' => '30 Ekim 2025',
        'category' => 'BİLİM'
    ],
    [
        'image' => 'assets/img/lisans.jpg',
        'title' => 'Selçuk Üniversitesi Kariyer Merkezi\'nde Geleceğin Ritmi',
        'date' => '24 Ekim 2025',
        'category' => 'KAMPÜS'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=400&h=300&fit=crop',
        'title' => 'Adalet Ağaoğlu Araştırma Odası Açıldı',
        'date' => '24 Ekim 2025',
        'category' => 'BİLİM'
    ]
];

$category_colors = [
    'AKADEMİK' => '#e74c3c',
    'BİLİM' => '#3498db',
    'KAMPÜS' => '#27ae60',
    'ETKİNLİK' => '#9b59b6'
];
?>

<!-- HABERLER SECTION -->
<section class="news section" id="haberler">
    <div class="container">
        <!-- Section Header -->
        <div class="news-section-header">
            <div class="news-section-title-wrapper">
                <h2 class="news-section-title">HABERLER</h2>
                <p class="news-section-subtitle">Son Gelişmeler ve Yenilikçi Çözümlerden Haberdar Olun</p>
            </div>
            <a href="#" class="news-all-btn">
                <i class="fas fa-play"></i>
                TÜM HABERLER
            </a>
        </div>
        
        <!-- News Content -->
        <div class="news-content-wrapper">
            <!-- Featured Slider (Left) -->
            <div class="news-featured-slider">
                <div class="news-slider-container">
                    <?php foreach ($featured_news as $index => $item): ?>
                    <div class="news-slide <?php echo $index === 0 ? 'active' : ''; ?>">
                        <div class="news-slide-image">
                            <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
                        </div>
                        <div class="news-slide-content">
                            <div class="news-slide-date">
                                <span class="news-date-day"><?php echo $item['day']; ?></span>
                                <span class="news-date-month"><?php echo $item['month']; ?></span>
                            </div>
                            <span class="news-slide-category" style="background: <?php echo $category_colors[$item['category']] ?? '#1c458b'; ?>">
                                <?php echo $item['category']; ?>
                            </span>
                            <h3 class="news-slide-title"><?php echo $item['title']; ?></h3>
                            <p class="news-slide-excerpt"><?php echo $item['excerpt']; ?></p>
                            <a href="#" class="news-slide-link">
                                <i class="fas fa-play"></i>
                                DEVAMI...
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                
                <!-- Slider Navigation -->
                <button class="news-slider-nav news-slider-prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="news-slider-nav news-slider-next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
            
            <!-- News Grid (Right) -->
            <div class="news-grid-wrapper">
                <?php foreach ($news_grid as $item): ?>
                <article class="news-grid-card">
                    <div class="news-grid-image">
                        <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
                    </div>
                    <div class="news-grid-content">
                        <h4 class="news-grid-title"><?php echo $item['title']; ?></h4>
                        <div class="news-grid-meta">
                            <span class="news-grid-date">
                                <i class="far fa-calendar-alt"></i>
                                <?php echo $item['date']; ?>
                            </span>
                            <span class="news-grid-category" style="background: <?php echo $category_colors[$item['category']] ?? '#1c458b'; ?>">
                                <i class="fas fa-tag"></i>
                                <?php echo $item['category']; ?>
                            </span>
                        </div>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
