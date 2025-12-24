<?php
require_once __DIR__.'/../src/bootstrap.php';
$lang = $_GET['lang'] ?? 'en';
$dict = require __DIR__.'/../src/Config/'.$lang.'.php';
$current_page = 'tour';
?>
<!DOCTYPE html>
<html lang="<?=htmlspecialchars($lang, ENT_QUOTES, 'UTF-8')?>">
<head>
    <title><?=t('site_title',$dict)?> - <?=t('tour_title',$dict)?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=t('tour_meta_desc',$dict)?>">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,500,700' rel='stylesheet' type='text/css'>  
    <script defer src="assets/plugins/fontawesome/js/all.js"></script>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
    <link rel="stylesheet" href="assets/css/custom-lang.css">
</head> 

<body class="tour-page">    
    <div class="wrapper">
        <?php include __DIR__.'/../src/partials/nav.php'; ?>
        
        <!-- ******FEATURES PROMO****** --> 
        <section id="features-promo" class="features-promo section">
            <div class="bg-mask"></div>
            <div class="container position-relative">
                <div class="row gx-lg-5">
                    <div class="features-intro col-lg-6 col-md-7 col-12 position-relative pl-md-5">
                        <h2 class="title"><?=t('tour_hero_title',$dict)?></h2>
                        <ul class="list-unstyled features-list">
                            <li><i class="fas fa-check"></i><?=t('tour_feature_1',$dict)?></li>
                            <li><i class="fas fa-check"></i><?=t('tour_feature_2',$dict)?></li>
                            <li><i class="fas fa-check"></i><?=t('tour_feature_3',$dict)?></li>
                            <li><i class="fas fa-check"></i><?=t('tour_feature_4',$dict)?></li>
                        </ul>
                    </div>
                    <div class="features-video col-lg-6 col-md-5 col-12 pr-0 pr-md-5">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/QviDwsMLXb0" width="720" height="405" frameborder="0" allowfullscreen></iframe>               
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- ******FEATURES****** --> 
        <section id="features" class="features section">
            <div class="container">
                <!-- Mantenimiento Especializado -->
                <div class="item row gx-5">
                    <div class="content col-md-5 col-12 order-md-5 ml-md-auto">
                        <h3 class="title"><?=t('tour_maintenance_title',$dict)?></h3>
                        <div class="details">
                            <p><?=t('tour_maintenance_desc',$dict)?></p>
                            <h5 style="color: #0047AB; font-weight: bold; margin-top: 20px;"><?=t('tour_what_includes',$dict)?>:</h5>
                            <ul style="line-height: 1.8;">
                                <li><?=t('tour_maint_include_1',$dict)?></li>
                                <li><?=t('tour_maint_include_2',$dict)?></li>
                                <li><?=t('tour_maint_include_3',$dict)?></li>
                                <li><?=t('tour_maint_include_4',$dict)?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="figure col-md-6 col-12 order-md-1">
                        <img class="img-fluid" src="assets/images/features/product-1.png" alt="<?=t('tour_maintenance_title',$dict)?>" />
                    </div>
                </div>
                
                <hr />
                
                <!-- Instalación y Configuración de Redes -->
                <div class="item row gx-5">
                    <div class="content col-md-5 col-12">
                        <h3 class="title"><?=t('tour_network_title',$dict)?></h3>
                        <div class="details">
                            <p><?=t('tour_network_desc',$dict)?></p>
                            <h5 style="color: #0047AB; font-weight: bold; margin-top: 20px;"><?=t('tour_what_includes',$dict)?>:</h5>
                            <ul style="line-height: 1.8;">
                                <li><?=t('tour_net_include_1',$dict)?></li>
                                <li><?=t('tour_net_include_2',$dict)?></li>
                                <li><?=t('tour_net_include_3',$dict)?></li>
                                <li><?=t('tour_net_include_4',$dict)?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="figure col-md-6 col-12 ml-md-auto">
                        <img class="img-fluid" src="assets/images/features/product-2.png" alt="<?=t('tour_network_title',$dict)?>" />
                    </div>
                </div>
                
                <hr />
                
                <!-- Ciberseguridad -->
                <div class="item row gx-5">
                    <div class="col-md-5 col-12 order-md-5 ml-md-auto">
                        <h3 class="title"><?=t('tour_security_title',$dict)?></h3>
                        <div class="details">
                            <p><?=t('tour_security_desc',$dict)?></p>
                            <h5 style="color: #0047AB; font-weight: bold; margin-top: 20px;"><?=t('tour_what_includes',$dict)?>:</h5>
                            <ul style="line-height: 1.8;">
                                <li><?=t('tour_sec_include_1',$dict)?></li>
                                <li><?=t('tour_sec_include_2',$dict)?></li>
                                <li><?=t('tour_sec_include_3',$dict)?></li>
                                <li><?=t('tour_sec_include_4',$dict)?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="figure col-md-6 col-12 order-md-1">
                        <img class="img-fluid" src="assets/images/features/product-3.png" alt="<?=t('tour_security_title',$dict)?>" />
                    </div>
                </div>
                
                <hr />
                
                <!-- Consultoría Personalizada -->
                <div class="item row gx-5">
                    <div class="content col-md-5 col-12">
                        <h3 class="title"><?=t('tour_consulting_title',$dict)?></h3>
                        <div class="details">
                            <p><?=t('tour_consulting_desc',$dict)?></p>
                            <h5 style="color: #0047AB; font-weight: bold; margin-top: 20px;"><?=t('tour_what_includes',$dict)?>:</h5>
                            <ul style="line-height: 1.8;">
                                <li><?=t('tour_cons_include_1',$dict)?></li>
                                <li><?=t('tour_cons_include_2',$dict)?></li>
                                <li><?=t('tour_cons_include_3',$dict)?></li>
                                <li><?=t('tour_cons_include_4',$dict)?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="figure col-md-6 col-12 ml-md-auto">
                        <img class="img-fluid" src="assets/images/features/product-4.png" alt="<?=t('tour_consulting_title',$dict)?>" />
                    </div>
                </div>
                            
            </div>
        </section>
 
        <!-- ******SIGNUP****** --> 
        <?php include __DIR__.'/../src/partials/signup-section.php'; ?>    
    
    
    <?php include __DIR__.'/../src/partials/footer.php'; ?>
    <?php include __DIR__.'/../src/partials/modals.php'; ?>
 
    <script src="assets/plugins/popper.min.js"></script> 
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script src="assets/plugins/vanilla-back-to-top.min.js"></script>   
    <script src="assets/js/main.js"></script> 
    
    <a id="lang-toggle" href="?lang=<?=($lang === 'en') ? 'es' : 'en'?>">
        <i class="fa-solid fa-language"></i>
    </a>
</body>
</html>
