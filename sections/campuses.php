<?php
/**
 * Kampüsler Section - Selçuk Üniversitesi Tarzı
 */

$campuses = [
    [
        'name' => 'MERKEZ KAMPÜS',
        'subtitle' => 'Güney Kampüs',
        'image' => 'assets/img/kampus.jpg',
        'desc' => 'Konferans odalarının ve 487 kişinin oturmasına müsait bir toplantı salonunun bulunduğu Toplantı Salonu (Albert Long Hall), konferanslarda, konserlerde ve genel toplantılar ile öğrenci ya da öğretim görevlisi toplantılarında kullanılmaktadır.',
        'short_desc' => 'Selçuk Üniversitesi\'nin kalbi olan Merkez Kampüs, akademik ve kültürel etkinliklerin merkezi. Konferans salonları, toplantı odaları ve geniş yeşil alanları ile öğrencilere kapsamlı bir eğitim ortamı sunar.',
        'size' => 'large',
        'buttons' => ['HAKKINDA', 'HİZMET BİNALARI', 'KAMPÜS HİZMETLERİ']
    ],
    [
        'name' => 'TEKNOLOJİ KAMPÜSÜ',
        'subtitle' => 'Kuzey Kampüs',
        'image' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=400&h=500&fit=crop',
        'short_desc' => 'Mühendislik ve Doğa Bilimleri Fakülteleri\'nin ev sahibi. Modern laboratuvarlar, araştırma merkezleri ve teknoloji altyapısı ile geleceğin bilim insanlarını yetiştiriyor.',
        'size' => 'normal'
    ],
    [
        'name' => 'YEŞİL KAMPÜS',
        'subtitle' => 'Kandilli Kampüsü',
        'image' => 'https://images.unsplash.com/photo-1497633762265-9d179a990aa6?w=400&h=300&fit=crop',
        'gradient' => 'linear-gradient(135deg, rgba(39, 174, 96, 0.8) 0%, rgba(46, 204, 113, 0.6) 100%)',
        'short_desc' => 'Sürdürülebilir mimari ve geniş yeşil alanları ile çevre dostu eğitim ortamı. Doğa ile iç içe öğrenme deneyimi sunan modern kampüs.',
        'size' => 'normal'
    ],
    [
        'name' => 'SAĞLIK KAMPÜSÜ',
        'subtitle' => 'Anadolu Hisarı Kampüsü',
        'image' => 'https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=400&h=300&fit=crop',
        'short_desc' => 'Tıp ve Sağlık Bilimleri Fakülteleri\'nin merkezi. Gelişmiş hastane altyapısı ve klinik uygulama alanları ile sağlık sektörüne nitelikli profesyoneller kazandırıyor.',
        'size' => 'normal'
    ],
    [
        'name' => 'KÜLTÜR KAMPÜSÜ',
        'subtitle' => 'Hisar Kampüsü',
        'image' => 'https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?w=400&h=400&fit=crop',
        'gradient' => 'linear-gradient(135deg, rgba(155, 89, 182, 0.8) 0%, rgba(142, 68, 173, 0.6) 100%)',
        'short_desc' => 'Edebiyat, Sanat ve Sosyal Bilimler Fakülteleri\'nin buluşma noktası. Kültürel etkinlikler, sanat galerileri ve zengin kütüphane koleksiyonu ile entelektüel gelişime katkı sağlıyor.',
        'size' => 'normal'
    ]
];
?>

<!-- KAMPÜSLER SECTION -->
<section class="campuses section" id="kampusler">
    <div class="container">
        <!-- Section Header -->
        <div class="campuses-header">
            <h2 class="campuses-title">KAMPÜSLER</h2>
            <p class="campuses-subtitle">Selçuk Üniversitesi'nin kampüslerini Keşfedin.</p>
        </div>
        
        <!-- Campuses Grid -->
        <div class="campuses-grid">
            <?php foreach ($campuses as $index => $campus): ?>
            <div class="campus-card campus-<?php echo $campus['size']; ?>" <?php if ($index === 0): ?>data-featured="true"<?php endif; ?>>
                <div class="campus-image">
                    <img src="<?php echo $campus['image']; ?>" alt="<?php echo $campus['name']; ?>">
                    <?php if (isset($campus['gradient'])): ?>
                    <div class="campus-gradient" style="background: <?php echo $campus['gradient']; ?>"></div>
                    <?php else: ?>
                    <div class="campus-overlay"></div>
                    <?php endif; ?>
                    
                    <?php if ($index > 0): ?>
                    <!-- Küçük kartlarda başlıklar üstte -->
                    <h3 class="campus-name"><?php echo $campus['name']; ?></h3>
                    <?php if (isset($campus['subtitle'])): ?>
                    <p class="campus-subtitle"><?php echo $campus['subtitle']; ?></p>
                    <?php endif; ?>
                    
                    <?php if (isset($campus['short_desc'])): ?>
                    <div class="campus-short-desc">
                        <p><?php echo $campus['short_desc']; ?></p>
                    </div>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>
                
                <div class="campus-content">
                    <?php if ($index === 0): ?>
                    <!-- Büyük kartta başlıklar content içinde -->
                    <h3 class="campus-name"><?php echo $campus['name']; ?></h3>
                    <?php if (isset($campus['subtitle'])): ?>
                    <p class="campus-subtitle"><?php echo $campus['subtitle']; ?></p>
                    <?php endif; ?>
                    <?php endif; ?>
                    
                    <?php if (isset($campus['desc'])): ?>
                    <div class="campus-details">
                        <p class="campus-desc"><?php echo $campus['desc']; ?></p>
                        <div class="campus-buttons">
                            <?php foreach ($campus['buttons'] as $btn): ?>
                            <a href="#" class="campus-btn">
                                <i class="fas fa-play"></i>
                                <?php echo $btn; ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                
                <?php if ($index > 0): ?>
                <!-- Hover buttons for small cards -->
                <div class="campus-hover-buttons">
                    <a href="#" class="campus-hover-btn">
                        <i class="fas fa-play"></i>
                        HAKKINDA
                    </a>
                    <a href="#" class="campus-hover-btn">
                        <i class="fas fa-play"></i>
                        HİZMET BİNALARI
                    </a>
                    <a href="#" class="campus-hover-btn">
                        <i class="fas fa-play"></i>
                        KAMPÜS HİZMETLERİ
                    </a>
                </div>
                <?php endif; ?>
                
                <?php if ($index === 0): ?>
                <div class="campus-pointer"></div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
