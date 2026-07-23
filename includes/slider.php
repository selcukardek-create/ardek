<?php
/**
 * Hero Slider Include
 * Sağ tarafta yuvarlak thumbnail navigasyonlu
 */

$slides = [
    [
	    'video' => 'https://yeniwebadmin.selcuk.edu.tr/uploads/sliders/22025/2b3ac616-ef65-4edb-9ed8-96cbfff2c4d6.mp4',
        'thumb' => 'assets/slider/a4.jpg',
        'title' => ''
        
    ],
    [
        'image' => 'assets/slider/a5.jpg',
        'thumb' => 'assets/slider/a5.jpg',
        'title' => ''
    ],
    [
        'image' => 'assets/slider/a0.jpg',
        'thumb' => 'assets/slider/a0.jpg',
        'title' => '</em>'
    ],
    [
        'image' => 'assets/slider/a4.jpg',
        'thumb' => 'assets/slider/a5.jpg',
        'title' => ''
    ]
];
?>

<!-- HERO SLIDER -->
<section class="hero" id="hero">
    <div class="hero-slider">
        <?php foreach ($slides as $index => $slide): ?>
        <div class="hero-slide <?php echo $index === 0 ? 'active' : ''; ?>" data-index="<?php echo $index; ?>">
            <?php if (isset($slide['video'])): ?>
            <video autoplay muted loop playsinline>
                <source src="<?php echo $slide['video']; ?>" type="video/mp4">
            </video>
            <?php else: ?>
            <img src="<?php echo $slide['image']; ?>" alt="Slider <?php echo $index + 1; ?>">
            <?php endif; ?>
            <div class="hero-overlay"></div>
        </div>
        <?php endforeach; ?>
    </div>
    
    <div class="hero-content">
        <?php foreach ($slides as $index => $slide): ?>
        <h1 class="hero-title <?php echo $index === 0 ? 'active' : ''; ?>" data-index="<?php echo $index; ?>">
            <?php echo $slide['title']; ?>
        </h1>
        <?php endforeach; ?>
    </div>
    
    <!-- Bottom Dots Navigation -->
    <div class="hero-nav">
        <?php foreach ($slides as $index => $slide): ?>
        <div class="hero-dot <?php echo $index === 0 ? 'active' : ''; ?>" data-index="<?php echo $index; ?>"></div>
        <?php endforeach; ?>
    </div>
    
    <!-- Right Side Thumbnail Navigation -->
    <div class="hero-thumbs">
        <?php foreach ($slides as $index => $slide): ?>
        <div class="hero-thumb <?php echo $index === 0 ? 'active' : ''; ?>" data-index="<?php echo $index; ?>">
            <img src="<?php echo $slide['thumb']; ?>" alt="Thumbnail <?php echo $index + 1; ?>">
        </div>
        <?php endforeach; ?>
    </div>
    
    <div class="hero-scroll">
        <span>ARDEK İNTERAKTİF</span>
        <i class="fas fa-chevron-down"></i>
    </div>
    
    <!-- Quick Links Overlay -->
    <?php
    $quick_links = [
        [
            'title' => 'Akademik Küme',
            'description' => 'Makale, Proje Grupları',
            'icon' => 'fa-users',
            'color' => '#9dc5ff',
            'url' => '#'
        ],
        [
            'title' => 'Eğitim Talep Sistemi',
            'description' => 'Birimler eğitim tarihleri',
            'icon' => 'fa-users',
            'color' => '#c7b8e7',
            'url' => '#'
        ],
        [
            'title' => 'Proje Ortağı Bulma',
            'description' => 'Ortak ara / İlan ver',
            'icon' => 'fa-flask',
            'color' => '#f7c6d8',
            'url' => '#'
        ],
        [
            'title' => 'Bir Fikrim Var',
            'description' => 'Araştırmanın Gücü, Senin Fikrinde',
            'icon' => 'fa-regular fa-lightbulb',
            'color' => '#9dc5ff',
            'url' => '#'
        ],
        [
            'title' => 'Randevu Talebi',
            'description' => 'Online randevu alın',
            'icon' => 'fa-calendar-check',
            'color' => '#a8e6cf',
            'url' => '#'
        ]
    ];
    ?>
    
    <div class="hero-quick-links">
        <div class="hero-quick-links-header">
            <h3 class="hero-quick-title">
                <i class="fas fa-compass"></i>
                <span>ARDEK İnteraktif</span>
            </h3>
      
        </div>

        <div class="hero-discover-grid">
            <?php foreach ($quick_links as $link): ?>
            <a href="<?php echo $link['url']; ?>" class="discover-card">
                <div class="discover-icon" style="--icon-bg: <?php echo $link['color']; ?>;">
                    <i class="fas <?php echo $link['icon']; ?>"></i>
                </div>
                <div class="discover-texts">
                    <h4><?php echo $link['title']; ?></h4>
                    <p><?php echo $link['description']; ?></p>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
