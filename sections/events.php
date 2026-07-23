<?php
/**
 * Etkinlikler Section - Selçuk Üniversitesi Tarzı
 */

$events = [
    [
        'image' => 'https://images.unsplash.com/photo-1514320291840-2e0a9bf2a9ae?w=300&h=400&fit=crop',
        'title' => 'Mozart\'ın Dehası',
        'subtitle' => 'Klasik Müzik Etkinlikleri',
        'location' => 'Dilek Sabancı Devlet Konservatuvarı',
        'date' => '5 Kasım 2025',
        'time' => '19:30'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1485846234645-a62644f84728?w=300&h=400&fit=crop',
        'title' => 'Tarihi Org Eşliğinde Sessiz Sinema Gösterimi',
        'subtitle' => 'Film Gösterimi',
        'location' => 'Sultan Alparslan Kültür Merkez',
        'date' => '26 Ekim 2025',
        'time' => '19:30'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1478720568477-152d9b164e26?w=300&h=400&fit=crop',
        'title' => 'Tarihi Org Eşliğinde Sessiz Sinema Gösterimi',
        'subtitle' => 'Film Gösterimi',
        'location' => 'Sultan Alparslan Kültür Merkez',
        'date' => '22 Ekim 2025',
        'time' => '19:30'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=300&h=400&fit=crop',
        'title' => 'Virtüözler Akşamı Cumhuriyetin Gelecek Solisti',
        'subtitle' => 'Klasik Müzik Etkinlikleri',
        'location' => 'Sultan Alparslan Kültür Merkez',
        'date' => '17 Ekim 2025',
        'time' => '19:30'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=300&h=400&fit=crop',
        'title' => 'Selçuk Üniversitesi Tanıtım Günleri - 2025',
        'subtitle' => 'Diğer',
        'location' => 'Ana Konferans Salonu',
        'date' => '28 Temmuz 2025',
        'time' => '10:00'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=300&h=400&fit=crop',
        'title' => 'Uluslararası Bilim Konferansı',
        'subtitle' => 'Akademik Etkinlik',
        'location' => 'Kongre Merkezi',
        'date' => '15 Aralık 2025',
        'time' => '09:00'
    ]
];
?>

<!-- ETKİNLİKLER SECTION -->
<section class="events section" id="etkinlikler">
    <div class="container">
        <!-- Section Header -->
        <div class="events-header">
            <div class="events-header-left">
                <div class="events-title-wrapper">
                    <h2 class="events-title">ETKİNLİKLER</h2>
                    <div class="events-nav-buttons">
                        <button class="events-nav-btn" id="eventsPrev">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="events-nav-btn" id="eventsNext">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="events-header-right">
                <a href="#" class="events-btn events-btn-outline">
                    <i class="fas fa-play"></i>
                    TÜM ETKİNLİKLER
                </a>
                <a href="#" class="events-btn events-btn-primary">
                    <i class="fas fa-play"></i>
                    ETKİNLİK TAKVİMİ
                </a>
            </div>
        </div>
        
        <!-- Events Slider -->
        <div class="events-slider-wrapper">
            <div class="events-slider" id="eventsSlider">
                <?php foreach ($events as $event): ?>
                <div class="event-card">
                    <div class="event-poster">
                        <img src="<?php echo $event['image']; ?>" alt="<?php echo $event['title']; ?>">
                    </div>
                    <div class="event-info">
                        <h3 class="event-title"><?php echo $event['title']; ?></h3>
                        <p class="event-category"><?php echo $event['subtitle']; ?></p>
                        <div class="event-details">
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <?php echo $event['location']; ?>
                            </span>
                            <span class="event-date">
                                <i class="far fa-calendar"></i>
                                <?php echo $event['date']; ?>
                            </span>
                            <span class="event-time">
                                <i class="far fa-clock"></i>
                                <?php echo $event['time']; ?>
                            </span>
                        </div>
                        <div class="event-location-pin">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
