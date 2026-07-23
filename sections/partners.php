<?php
/**
 * İş Birlikleri / Partnerler Section
 */

$partners = [
    ['name' => 'TÜBİTAK', 'logo' => 'https://via.placeholder.com/180x80/f8fafc/1c458b?text=TÜBİTAK'],
    ['name' => 'YÖK', 'logo' => 'https://via.placeholder.com/180x80/f8fafc/1c458b?text=YÖK'],
    ['name' => 'Erasmus+', 'logo' => 'https://via.placeholder.com/180x80/f8fafc/1c458b?text=Erasmus%2B'],
    ['name' => 'MIT', 'logo' => 'https://via.placeholder.com/180x80/f8fafc/1c458b?text=MIT'],
    ['name' => 'Stanford', 'logo' => 'https://via.placeholder.com/180x80/f8fafc/1c458b?text=Stanford'],
    ['name' => 'Oxford', 'logo' => 'https://via.placeholder.com/180x80/f8fafc/1c458b?text=Oxford'],
    ['name' => 'Cambridge', 'logo' => 'https://via.placeholder.com/180x80/f8fafc/1c458b?text=Cambridge'],
    ['name' => 'ETH Zürich', 'logo' => 'https://via.placeholder.com/180x80/f8fafc/1c458b?text=ETH'],
    ['name' => 'Harvard', 'logo' => 'https://via.placeholder.com/180x80/f8fafc/1c458b?text=Harvard'],
    ['name' => 'Berkeley', 'logo' => 'https://via.placeholder.com/180x80/f8fafc/1c458b?text=Berkeley'],
    ['name' => 'Tokyo Uni', 'logo' => 'https://via.placeholder.com/180x80/f8fafc/1c458b?text=Tokyo'],
    ['name' => 'Sorbonne', 'logo' => 'https://via.placeholder.com/180x80/f8fafc/1c458b?text=Sorbonne']
];
?>

<!-- PARTNERLER SECTION -->
<section class="partners section" id="partners">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Global Ağ</span>
            <h2 class="section-title">İş Birlikleri</h2>
            <p class="section-subtitle">Dünya çapında prestijli kurumlarla akademik ortaklıklar</p>
        </div>
        
        <div class="partners-grid">
            <?php foreach ($partners as $partner): ?>
            <div class="partner-logo">
                <img src="<?php echo $partner['logo']; ?>" alt="<?php echo $partner['name']; ?>">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
