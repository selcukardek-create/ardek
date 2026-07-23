<?php
$calls = [
    [
        'title' => 'Green Energy for Future',
        'desc' => 'Avrupa Birliği destekli yenilenebilir enerji sistemleri projesi.',
        'tag' => 'Uluslararası',
        'type' => 'intl',
        'days' => 12,
        'added' => '05.12.2025',
        'image' => 'https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?w=200&h=150&fit=crop'
    ],
    [
        'title' => 'Akıllı Tarım Uygulamaları',
        'desc' => 'TÜBİTAK destekli yerli tohum geliştirme ve sulama projesi.',
        'tag' => 'Ulusal',
        'type' => 'national',
        'days' => 18,
        'added' => '07.12.2025',
        'image' => 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?w=200&h=150&fit=crop'
    ],
    [
        'title' => 'Erasmus+ Gençlik Değişimi',
        'desc' => 'Gençlerin dijital yetkinliklerini artırmaya yönelik program.',
        'tag' => 'Uluslararası',
        'type' => 'intl',
        'days' => 9,
        'added' => '09.12.2025',
        'image' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=200&h=150&fit=crop'
    ],
    [
        'title' => 'Kalkınma Ajansı Desteği',
        'desc' => 'Bölgesel kalkınma için küçük işletmelere destek projesi.',
        'tag' => 'Ulusal',
        'type' => 'national',
        'days' => 22,
        'added' => '02.12.2025',
        'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=200&h=150&fit=crop'
    ],
    [
        'title' => 'UFUK Avrupa Kümeler 6',
        'desc' => 'Sürdürülebilir tarım ve gıda sistemleri için araştırma çağrısı.',
        'tag' => 'Uluslararası',
        'type' => 'intl',
        'days' => 14,
        'added' => '11.12.2025',
        'image' => 'https://images.unsplash.com/photo-1560493676-04071c5f467b?w=200&h=150&fit=crop'
    ],
    [
        'title' => 'TEYDEB Sanayi AR-GE',
        'desc' => 'Sanayide yeşil dönüşüm temalı Ar-Ge destek programı.',
        'tag' => 'Ulusal',
        'type' => 'national',
        'days' => 7,
        'added' => '10.12.2025',
        'image' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=200&h=150&fit=crop'
    ],
    [
        'title' => 'TÜSEB Sağlık Projeleri',
        'desc' => 'Sağlık teknolojileri ve biyoteknoloji odaklı proje desteği.',
        'tag' => 'Ulusal',
        'type' => 'national',
        'days' => 19,
        'added' => '01.12.2025',
        'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=200&h=150&fit=crop'
    ],
    [
        'title' => 'Eureka Ortak Proje',
        'desc' => 'Çok taraflı uluslararası Ar-Ge iş birliği çağrısı.',
        'tag' => 'Uluslararası',
        'type' => 'intl',
        'days' => 11,
        'added' => '06.12.2025',
        'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=200&h=150&fit=crop'
    ],
];
?>

<section class="calls section" id="calls">
    <div class="container">
        <div class="calls-header">
            <h2 class="calls-title">AÇIK ÇAĞRILAR</h2>
            <div class="calls-tabs">
                <button class="calls-tab active">Tümü</button>
                <button class="calls-tab">Ulusal</button>
                <button class="calls-tab">Uluslararası</button>
            </div>
        </div>

        <div class="calls-grid">
            <?php foreach ($calls as $call): ?>
            <div class="call-card">
                <div class="call-image">
                    <img src="<?php echo $call['image']; ?>" alt="<?php echo $call['title']; ?>">
                </div>
                <div class="call-content">
                    <span class="call-tag <?php echo $call['type']; ?>">
                        <span class="tag-text"><?php echo $call['tag']; ?></span>
                    </span>
                    <h3 class="call-title"><?php echo $call['title']; ?></h3>
                    <p class="call-desc"><?php echo $call['desc']; ?></p>
                    <div class="call-footer">
                        <div class="call-added"><?php echo $call['added']; ?></div>
                        <div class="call-days"><?php echo $call['days']; ?> gün kaldı</div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

