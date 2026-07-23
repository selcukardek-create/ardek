<?php
/**
 * Site Yapılandırma Dosyası
 * Selçuk Üniversitesi Tarzı Web Sitesi
 */

// Site Bilgileri
define('SITE_NAME', 'Selçuk Üniversitesi Araştırma Dekanlığı');
define('SITE_SLOGAN', '');
define('SITE_URL', 'https://ardek.selcuk.edu.tr');

// Renkler
define('PRIMARY_COLOR', '#1c458b');
define('SECONDARY_COLOR', '#7acaed');
define('ACCENT_COLOR', '#f8b500');

// Sosyal Medya
$social_links = [
    'facebook' => 'https://facebook.com/selcukuniversitesi',
    'twitter' => 'https://twitter.com/selcukuniversitesi',
    'instagram' => 'https://instagram.com/selcukuniversitesi',
    'youtube' => 'https://youtube.com/selcukuniversitesi',
    'linkedin' => 'https://linkedin.com/school/selcuk-universitesi'
];

// İletişim Bilgileri
$contact_info = [
    'address' => 'Selçuk Üniversitesi Araştırma Dekanlığı, Alaeddin Keykubat Kampüsü, Akademi, Yahya Kemal Beyatlı Cd. No:367 Selçuklu/Konya, Türkiye',
    'phone' => 'Birim telefon numaraları için tıklayınız',
    'email' => 'ardek@selcuk.edu.tr'
];

// Sosyal Medya Linkleri (Footer için)
$footer_social_links = [
    'twitter' => 'https://twitter.com/selcukuniversitesi',
    'instagram' => 'https://instagram.com/selcukuniversitesi',
    'youtube' => 'https://youtube.com/selcukuniversitesi',
    'linkedin' => 'https://linkedin.com/school/selcuk-universitesi',
    'whatsapp' => '#'
];

// Üst Menü Yapısı (Top Navigation)
$top_menus = [
    '360-ardek' => [
        'title' => '360 ARDEK',
        'url' => '#'
    ],
    'bulten' => [
        'title' => 'KASIM AYI BÜLTENİ',
        'url' => '#'
    ]
];

// Mega Menü Yapısı (Alt Navigation)
$mega_menus = [
    'hakkimizda' => [
        'title' => 'HAKKIMIZDA',
        'columns' => [
            '' => [
                'Misyon & Vizyon',
                'Araştırma Takımı',
                'Araştırma Stratejisi',
                'Organizasyon Şeması',
                'ARDEK Yönergesi'
            ]
        ],
        'slider_images' => [
            ['image' => 'assets/img/akademik.jpg', 'title' => 'HAKKIMIZDA'],
            ['image' => 'assets/img/kampus.jpg', 'title' => 'Araştırma Takımı']
        ]
    ],
    'ardek-ofisi' => [
        'title' => 'ARDEK OFİSİ',
        'columns' => [
            'Uluslararası Proje Destek Birimi' => [
                'AB Programları',
                'Ufuk Avrupa Programı (Horizon Europe)',
                'Erasmus+ Programı',
                'Diğer AB Programları ve Fonları',
                'İkili İşbirliği Proje Fırsatları',
                'Çok Taraflı Programlar – Uluslararası Üyelikler',
                'Eureka Programı',
                'TÜBİTAK Uluslararası İşbirliklerine Katılımı Özendirmeye Yönelik Destek ve Ödül Programları',
                'Uluslarararası Destek Sağlayan Diğer Kuruluşlar'
            ],
            'Ulusal Proje Destek Birimi' => [
                'TÜSEB',
                'Ulusal Ajans Projeleri ve Diğerleri',
                'Bilimsel Araştırma Projeleri (BAP)',
                'TÜBİTAK Araştırma Destek Programları (ARDEB) Fonları',
                'Sanayi ARGE (TEYDEB)',
                'TEYDEB-SAYEM (Sanayide Yeşil Dönüşüm Çağrıları)',
                'TÜBİTAK Bilim İnsanı Destekleme Programı Fonları (BİDEP)',
                'TÜBİTAK Bilim ve Toplum Başkanlığı (BİTO)'
            ],
            'Öğrenci Projeleri Destek Birimi' => [
                'TÜBİTAK',
                'TEKNOFEST',
                'Türkiye Sağlık Enstitüleri Başkanlığı (TÜSEB)',
                'ERASMUS+',
                'Gençlik Projeleri'
            ],
            'Diğer Birimler' => [
                'Büyük Veri Birimi',
                'Dil Destek Birimi',
                'Yayın Destek Birimi',
                'Yayın Süreç Yönetimi',
                'Yayıncı Kuruluşlar',
                'Faydalı Linkler',
                'Burs, Teşvik ve Ödüller Birimi'
            ]
        ],
        'slider_images' => [
            ['image' => 'assets/img/akademik.jpg', 'title' => 'ARDEK Ofisi'],
            ['image' => 'assets/img/kampus.jpg', 'title' => 'Proje Yönetimi']
        ]
    ],
    'ilgili-birimler' => [
        'title' => 'İLGİLİ BİRİMLER',
        'columns' => [
            'Destek Birimleri' => [
                'Bilgi İşlem Daire Başkanlığı',
                'Öğrenci İşleri Daire Başkanlığı',
                'Personel Daire Başkanlığı',
                'Yapı İşleri ve Teknik Daire Başkanlığı',
                'Sağlık, Kültür ve Spor Daire Başkanlığı',
                'Strateji Geliştirme Daire Başkanlığı',
                'Kütüphane Dökümasyon Daire Başkanlığı',
                'İdari ve Mali İşler Daire Başkanlığı'
            ],
            'Araştırma Birimleri' => [
                'Bilimsel Araştırma Projeleri Koordinatörlüğü',
                'Lisansüstü Eğitim Enstitüleri',
                'Araştırma Merkezleri Koordinatörlüğü'
            ],
            'Yayım Birimleri' => [
                'Dış İlişkiler Koordinatörlüğü',
                'Sürekli Eğitim Uygulama ve Araştırma Merkezi',
                'Uzaktan Eğitim Uygulama ve Araştırma Merkezi',
                'Kurumsal İletişim Koordinatörlüğü',
                'Teknokent A.Ş.',
                'TTO A.Ş.'
            ]
        ],
        'slider_images' => [
            ['image' => 'assets/img/kampus.jpg', 'title' => 'İlgili Birimler'],
            ['image' => 'assets/img/akademik.jpg', 'title' => 'Destek Birimleri']
        ]
    ],
    'etik-kurullar' => [
        'title' => 'ETİK KURULLAR',
        'columns' => [
            '' => [
                'Etik Kurallar',
                'Fakülte Etik Kurullar'
            ]
        ],
        'slider_images' => [
            ['image' => 'assets/img/akademik.jpg', 'title' => 'Etik Kurullar']
        ]
    ],
    'ardek-rehber' => [
        'title' => 'ARDEK REHBER',
        'has_image_grid' => true,
        'columns' => [
            '' => [
                ['title' => 'ARDEK 2024-2025 Faaliyet Raporu', 'image' => 'assets/img/akademik.jpg'],
                ['title' => 'Araştırma Üniversitesi Performans Kriterleri Uygulama Rehberi', 'image' => 'assets/img/akademik.jpg'],
                ['title' => 'TÜBİTAK Proje Yazım Rehberi: Sık Yapılan Hatalar ve Öneriler', 'image' => 'assets/img/akademik.jpg'],
                ['title' => 'Selçuk Üniversitesi Uluslararasılaşma Stratejik Eylem Planı', 'image' => 'assets/img/akademik.jpg'],
                ['title' => 'Küresel Ölçekte Üniversitelerin Ar-Ge Stratejileri', 'image' => 'assets/img/akademik.jpg'],
                ['title' => 'Yapay Zeka Etiği', 'image' => 'assets/img/akademik.jpg'],
                ['title' => 'TÜBİTAK 2209/A ve 2209/B Sıkça Sorulan Sorular', 'image' => 'assets/img/akademik.jpg'],
                ['title' => 'Proje Destek Programları Tablosu', 'image' => 'assets/img/akademik.jpg'],
                ['title' => 'SÜ Araştırma Potansiyelinin Geliştirilmesine Yönelik Değerlendirme Raporu', 'image' => 'assets/img/akademik.jpg'],
                ['title' => 'BAP Makale Destekleme Süreci', 'image' => 'assets/img/akademik.jpg'],
                ['title' => 'Uluslararası Proje Yazma Eğitimi', 'image' => 'assets/img/akademik.jpg'],
                ['title' => 'Ulusal ve uluslararası Sıralama Parametreleri ve Metodolojileri', 'image' => 'assets/img/akademik.jpg'],
                ['title' => 'Araştırma Performansı Destek Projesi Hakkında Sık Sorulan Sorular', 'image' => 'assets/img/akademik.jpg'],
                ['title' => 'Selçuk Üniversitesi Öğretim Görevlisi Lisansüstü Eğitim Ve Akademik Etkilik Raporu', 'image' => 'assets/img/akademik.jpg']
            ]
        ],
        'slider_images' => [
            ['image' => 'assets/img/akademik.jpg', 'title' => 'ARDEK REHBER']
        ]
    ],
    'ardek-interaktif' => [
        'title' => 'ARDEK İNTERAKTİF!',
        'url' => '#',
        'columns' => []
    ],
    'iga' => [
        'title' => 'İGA',
        'subtitle' => 'İŞ GELİŞTİRME AKADEMİSİ',
        'url' => '#',
        'columns' => []
    ],
    'iletisim' => [
        'title' => 'İLETİŞİM',
        'url' => '#',
        'columns' => []
    ]
];

// Helper function for assets path
function asset($path) {
    return 'assets/' . $path;
}
?>
