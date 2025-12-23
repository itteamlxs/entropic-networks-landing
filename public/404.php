<?php
http_response_code(404);
require_once __DIR__.'/../src/bootstrap.php';
$lang = $_GET['lang'] ?? 'en';
$dict = require __DIR__.'/../src/Config/'.$lang.'.php';
$current_page = '404';
?>
<!DOCTYPE html>
<html lang="<?=htmlspecialchars($lang, ENT_QUOTES, 'UTF-8')?>">
<head>
    <title>404 - <?=t('site_title',$dict)?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,500,700' rel='stylesheet' type='text/css'>
    <script defer src="assets/plugins/fontawesome/js/all.js"></script>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
    <link rel="stylesheet" href="assets/css/custom-lang.css">
</head> 

<body class="page-404">    
    <div class="wrapper">
        <?php include __DIR__.'/../src/partials/nav.php'; ?>
        
        <!-- ******404 SECTION****** --> 
        <section id="section-404" class="section-404 section">
            <div class="container text-center">
                <h2 class="title title-404">404</h2>
                <p class="intro"><?=t('404_sorry',$dict)?></p>
                <p class="guide"><?=t('404_guide',$dict)?></p>
                <a class="btn btn-cta-primary btn-back-home" href="index.php?lang=<?=htmlspecialchars($lang, ENT_QUOTES, 'UTF-8')?>"><?=t('404_back_home',$dict)?></a>
            </div>
        </section>
            
    </div>
    
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
