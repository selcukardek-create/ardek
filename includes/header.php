<?php
/**
 * Header Include
 * Mega Menü Sistemi ile
 */
?>
<!-- HEADER -->
<header class="header" id="header">
    <div class="header-container">
        <div class="header-inner">
            <!-- Logo Left -->
            <a href="index.php" class="logo">
                <div class="logo-img">
                    <img src="assets/img/selcuk-universitesi-arastirma-dekanligi.png" alt="Selçuk Üniversitesi Araştırma Dekanlığı Logo" class="logo-svg">
                </div>
            </a>
            
            <!-- Right Side - Full Right Aligned -->
            <div class="header-right">
                <!-- Top Row - Top Navigation Menus -->
                <div class="header-top-row">
                    <a href="#" class="header-btn-today">
                        <i class="fa-solid fa-globe"></i>
                        <span>SULabs Portal</span>
                    </a>
                    <a href="#" class="header-btn-today">
                        <i class="fa-solid fa-globe"></i>
                        <span>Hibe Portal</span>
                    </a>
                    
                    <!-- Top Menu Items -->
                    <?php foreach ($top_menus as $key => $top_menu): ?>
                    <a href="<?php echo $top_menu['url']; ?>" class="header-btn top-menu-item">
                        <span><?php echo $top_menu['title']; ?></span>
                    </a>
                    <?php endforeach; ?>
                    
                    <!-- Icon Buttons -->
                    <div class="header-icon-btns">
                                      <a href="#" class="header-icon-btn lang" title="English">
                            EN
                        </a>
                    </div>
                </div>
                
                <!-- Bottom Row - Main Navigation (Mega Menus) -->
                <nav class="header-nav-row">
                    <?php foreach ($mega_menus as $key => $menu): ?>
                    <?php if (!empty($menu['columns'])): ?>
                    <div class="nav-item" data-menu="<?php echo $key; ?>">
                        <a href="#" class="nav-link"><?php echo $menu['title']; ?></a>
                    </div>
                    <?php elseif (isset($menu['subtitle'])): ?>
                    <a href="<?php echo isset($menu['url']) ? $menu['url'] : '#'; ?>" class="nav-link nav-link-simple nav-link-stacked">
                        <span class="nav-link-subtitle"><?php echo $menu['subtitle']; ?></span>
                        <span class="nav-link-title"><?php echo $menu['title']; ?></span>
                    </a>
                    <?php else: ?>
                    <a href="<?php echo isset($menu['url']) ? $menu['url'] : '#'; ?>" class="nav-link nav-link-simple">
                        <?php echo $menu['title']; ?>
                    </a>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    
                    <button class="nav-search" title="Ara">
                        <i class="fas fa-search"></i>
                    </button>
                </nav>
                
                <!-- Mobile Menu Accordion -->
                <div class="mobile-menu-accordion">
                    <?php foreach ($mega_menus as $key => $menu): ?>
                    <?php if (!empty($menu['columns'])): ?>
                    <div class="mobile-menu-item" data-menu-key="<?php echo $key; ?>">
                        <button class="mobile-menu-header">
                            <span class="mobile-menu-title"><?php echo $menu['title']; ?></span>
                            <i class="fas fa-chevron-down mobile-menu-icon"></i>
                        </button>
                        <div class="mobile-menu-content">
                            <?php foreach ($menu['columns'] as $columnTitle => $links): ?>
                            <div class="mobile-menu-section">
                                <h4 class="mobile-menu-section-title"><?php echo $columnTitle; ?></h4>
                                <ul class="mobile-menu-links">
                                    <?php foreach ($links as $link): ?>
                                    <li>
                                        <a href="#" class="mobile-menu-link">
                                            <i class="fas fa-arrow-right"></i>
                                            <span><?php echo $link; ?></span>
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php else: ?>
                    <a href="<?php echo isset($menu['url']) ? $menu['url'] : '#'; ?>" class="mobile-menu-link mobile-menu-link-simple">
                        <span><?php echo $menu['title']; ?></span>
                    </a>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <!-- Mobile Toggle -->
            <button class="mobile-toggle" aria-label="Menüyü Aç">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<!-- MEGA MENUS -->
<div class="mega-menu-wrapper" id="megaMenuWrapper">
    <?php foreach ($mega_menus as $key => $menu): ?>
    <?php if (!empty($menu['columns'])): ?>
    <div class="mega-menu" id="menu-<?php echo $key; ?>" data-menu="<?php echo $key; ?>">
        <div class="mega-menu-container">
            <!-- Title -->
            <h3 class="mega-menu-title"><?php echo $menu['title']; ?></h3>
            
            <!-- Menu Columns -->
            <div class="mega-menu-right">
                <?php if (isset($menu['has_image_grid']) && $menu['has_image_grid']): ?>
                <!-- Image Grid for ARDEK Rehber -->
                <div class="mega-menu-grid">
                    <?php foreach ($menu['columns'] as $columnTitle => $links): ?>
                        <?php foreach ($links as $item): ?>
                            <?php 
                            $itemTitle = is_array($item) ? $item['title'] : $item;
                            $itemImage = is_array($item) ? $item['image'] : 'assets/img/akademik.jpg';
                            ?>
                            <a href="#" class="mega-grid-item">
                                <img src="<?php echo $itemImage; ?>" alt="<?php echo $itemTitle; ?>">
                                <div class="mega-grid-overlay">
                                    <span><?php echo $itemTitle; ?></span>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </div>
                <?php else: ?>
                <div class="mega-menu-columns">
                    <?php foreach ($menu['columns'] as $columnTitle => $links): ?>
                    <div class="mega-menu-column">
                        <?php if (!empty($columnTitle)): ?>
                        <h4 class="mega-column-title"><?php echo $columnTitle; ?></h4>
                        <?php endif; ?>
                        <ul class="mega-menu-links">
                            <?php foreach ($links as $link): ?>
                            <?php 
                            $linkTitle = is_array($link) ? $link['title'] : $link;
                            ?>
                            <li><a href="#">» <?php echo $linkTitle; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endforeach; ?>
</div>
