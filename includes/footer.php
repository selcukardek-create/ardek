<?php
/**
 * Footer Include
 */
?>

<!-- FOOTER MAP -->
<div class="footer-map">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3142.9421116980966!2d32.512166!3d38.025129!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d08d9e1e8999eb%3A0xb080b28ea57c4dec!2zU2Vsw6d1ayDDnG5pdmVyc2l0ZXNpIEFyYcWfdMSxcm1hIERla2FubMSxxJ_EsQ!5e0!3m2!1str!2sus!4v1765478906814!5m2!1str!2sus" 
        width="100%" 
        height="450" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade"
        title="Selçuk Üniversitesi Araştırma Dekanlığı Konumu">
    </iframe>
</div>

<!-- FOOTER -->
<footer class="footer">
    <div class="footer-main">
        <div class="container">
            <div class="footer-grid">
                <!-- Left Column - Logo & Info -->
                <div class="footer-left">
                    <div class="footer-brand">
                        <a href="index.php" class="footer-logo">
                            <img src="assets/img/selcuk-universitesi-arastirma-dekanligi.png" alt="Selçuk Üniversitesi Araştırma Dekanlığı" class="footer-logo-img">
                        </a>
                    </div>
                    <div class="footer-address">
                        <i class="fas fa-map-marker-alt"></i>
                        <span><?php echo $contact_info['address']; ?></span>
                    </div>
                    <div class="footer-email">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:<?php echo $contact_info['email']; ?>"><?php echo $contact_info['email']; ?></a>
                    </div>
                </div>
                
                <!-- Right Column - Social & Contact -->
                <div class="footer-right">
                    <div class="footer-social">
                        <?php 
                        $social_icons = [
                            'twitter' => 'fa-twitter',
                            'instagram' => 'fa-instagram',
                            'youtube' => 'fa-youtube',
                            'linkedin' => 'fa-linkedin',
                            'whatsapp' => 'fa-whatsapp'
                        ];
                        foreach ($footer_social_links as $platform => $url): 
                        ?>
                        <a href="<?php echo $url; ?>" target="_blank" title="<?php echo ucfirst($platform); ?>" class="footer-social-item footer-social-<?php echo $platform; ?>">
                            <i class="fab <?php echo $social_icons[$platform]; ?>"></i>
                        </a>
                        <?php endforeach; ?>
                    </div>
                    <div class="footer-phone-link">
                        <i class="fas fa-phone"></i>
                        <a href="#"><?php echo $contact_info['phone']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner">
                <p>2024 © Selçuk Üniversitesi Araştırma Dekanlığı</p>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top -->
<button class="scroll-top" id="scrollTop" title="Yukarı Çık">
    <i class="fas fa-chevron-up"></i>
</button>
