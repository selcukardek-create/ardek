<?php
/**
 * Ana Sayfa
 * Selçuk Üniversitesi Tarzı Web Sitesi
 */

// Config dosyasını dahil et
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo SITE_SLOGAN; ?>">
    <title><?php echo SITE_NAME; ?> - <?php echo SITE_SLOGAN; ?></title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Source+Sans+3:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>">
</head>
<body>
    
    <?php include 'includes/header.php'; ?>
    
    <?php include 'includes/slider.php'; ?>
    
    <main>
       
        <?php include 'sections/news.php'; ?>
        
        <?php include 'sections/calls.php'; ?>
        
        <?php include 'sections/announcements.php'; ?>       
        
        
        <?php include 'sections/academic.php'; ?>
        
        <?php include 'sections/events.php'; ?>
        
    </main>
    
    <?php include 'includes/footer.php'; ?>
    
    <!-- Main JavaScript -->
    <script src="<?php echo asset('js/main.js'); ?>"></script>
    
</body>
</html>
