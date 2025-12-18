<?php
require_once __DIR__.'/../src/bootstrap.php';

$lang = $_GET['lang'] ?? 'en';
$dict = require __DIR__.'/../src/Config/'.$lang.'.php';
?>
<!DOCTYPE html>
<html lang="<?=htmlspecialchars($lang)?>">
<head>
    <title><?=t('pricing_title',$dict)?> - <?=t('site_title',$dict)?></title>
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
    <style>
        .price-plan .price-cols .item {
            margin-bottom: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .price-plan .price-cols .item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .price-plan .price-cols .item .heading {
            background: #444;
            color: #fff;
            padding: 20px;
            border-radius: 4px 4px 0 0;
            position: relative;
        }
        .price-plan .price-cols .item.featured {
            border: 0px solid #3498db;
        }
        .price-plan .price-cols .item.featured .heading {
            background: #003380;
        }
        .price-plan .price-cols .item .heading .label-custom {
            background: #27ae60;
            color: #fff;
            padding: 4px 10px;
            border-radius: 3px;
            font-size: 11px;
            font-weight: 600;
            margin-left: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .price-plan .price-cols .item .content {
            background: #fff;
            padding: 30px 20px;
            border: 1px solid #e6e6e6;
            border-top: none;
            border-radius: 0 0 4px 4px;
        }
        .price-plan .feature-list li {
            padding: 8px 0;
            border-bottom: 1px solid #f5f5f5;
        }
        .price-plan .feature-list li:last-child {
            border-bottom: none;
        }
        .price-plan .feature-list i {
            margin-right: 10px;
            width: 20px;
        }
        @media (max-width: 991px) {
            .price-plan .price-cols .item {
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body class="pricing-page">    
    <div class="wrapper">
        <header id="header" class="header">  
            <div class="container">            
                <h1 class="logo">
                    <a href="index.php">
                        <span class="logo-title"><?=t('site_title',$dict)?></span>
                    </a>
                </h1>
                <nav class="main-nav navbar navbar-expand-md navbar-dark" role="navigation">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>           
                    <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="index.php"><?=t('nav_home',$dict)?></a></li>
                            <li class="nav-item"><a class="nav-link" href="tour.php"><?=t('nav_tour',$dict)?></a></li>
                            <li class="nav-item"><a class="nav-link active" href="pricing.php"><?=t('nav_pricing',$dict)?></a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php"><?=t('nav_about',$dict)?></a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"><?=t('nav_blog',$dict)?> <i class="fas fa-angle-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="blog.php"><?=t('blog_home',$dict)?></a>
                                    <a class="dropdown-item" href="blog-single.php"><?=t('blog_single',$dict)?></a>
                                    <a class="dropdown-item" href="404.php">404 Page</a>
                                </div>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact.php"><?=t('nav_contact',$dict)?></a></li>                            
                            <li class="nav-item"><a class="nav-link login-trigger" data-bs-toggle="modal" data-bs-target="#login-modal"><?=t('login',$dict)?></a></li>
                            <li class="nav-item nav-item-cta last"><a class="nav-link btn btn-cta btn-cta-primary" data-bs-toggle="modal" data-bs-target="#signup-modal"><?=t('get_started',$dict)?></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        
        <section id="price-plan" class="price-plan section">
            <div class="container text-center">
                <h2 class="title"><?=t('pricing_title',$dict)?></h2>
                <p class="intro"><?=t('pricing_intro',$dict)?></p>
                <div class="price-cols row">
                    
                    <!-- Plan Básico -->
                    <div class="item col-md-4 col-12">
                        <h3 class="heading"><?=t('plan_basic_name',$dict)?></h3>
                        <div class="content">
                            <p class="price-figure"><span class="currency">€</span><span class="number">90</span><span class="unit">/<?=t('month',$dict)?></span></p>
                            <p class="text-muted"><?=t('plan_basic_devices',$dict)?></p>
                            
                            <h5 class="mt-4 mb-3"><?=t('included',$dict)?></h5>
                            <ul class="list-unstyled feature-list text-start">
                                <li><i class="fas fa-check text-success"></i> 4 <?=t('plan_visits',$dict)?></li>
                                <li><i class="fas fa-check text-success"></i> 20h <?=t('plan_remote',$dict)?></li>
                                <li><i class="fas fa-check text-success"></i> <?=t('plan_basic_sla',$dict)?></li>
                                <li><i class="fas fa-check text-success"></i> <?=t('plan_basic_hours',$dict)?></li>
                                <li><i class="fas fa-check text-success"></i> <?=t('plan_basic_channels',$dict)?></li>
                            </ul>
                            
                            <h5 class="mt-4 mb-3"><?=t('not_included',$dict)?></h5>
                            <ul class="list-unstyled feature-list text-start">
                                <li><i class="fas fa-times text-danger"></i> <?=t('plan_no_preventive',$dict)?></li>
                                <li><i class="fas fa-times text-danger"></i> <?=t('plan_no_monitoring',$dict)?></li>
                                <li><i class="fas fa-times text-danger"></i> <?=t('plan_no_reports',$dict)?></li>
                                <li><i class="fas fa-times text-danger"></i> <?=t('plan_no_reinstall',$dict)?></li>
                                <li><i class="fas fa-times text-danger"></i> <?=t('plan_no_migration',$dict)?></li>
                            </ul>
                            
                            <a class="btn btn-cta btn-cta-primary mt-3 w-100" href="#" data-bs-toggle="modal" data-bs-target="#signup-modal"><?=t('signup_btn',$dict)?></a>
                        </div>
                    </div>
                    
                    <!-- Plan Empresarial -->
                    <div class="item featured col-md-4 col-12">
                        <h3 class="heading"><?=t('plan_business_name',$dict)?><span class="label-custom"><?=t('popular',$dict)?></span></h3>
                        <div class="content">
                            <p class="price-figure"><span class="currency">€</span><span class="number">200</span><span class="unit">/<?=t('month',$dict)?></span></p>
                            <p class="text-muted"><?=t('plan_business_devices',$dict)?></p>
                            
                            <h5 class="mt-4 mb-3"><?=t('included',$dict)?></h5>
                            <ul class="list-unstyled feature-list text-start">
                                <li><i class="fas fa-check text-success"></i> 8 <?=t('plan_visits',$dict)?></li>
                                <li><i class="fas fa-check text-success"></i> 40h <?=t('plan_remote',$dict)?></li>
                                <li><i class="fas fa-check text-success"></i> <?=t('plan_business_sla',$dict)?></li>
                                <li><i class="fas fa-check text-success"></i> <?=t('plan_business_hours',$dict)?></li>
                                <li><i class="fas fa-check text-success"></i> <?=t('plan_business_channels',$dict)?></li>
                                <li><i class="fas fa-check text-success"></i> <?=t('plan_preventive_quarterly',$dict)?></li>
                                <li><i class="fas fa-check text-success"></i> <?=t('plan_monthly_reports',$dict)?></li>
                                <li><i class="fas fa-check text-success"></i> <strong>1 <?=t('plan_reinstall_free',$dict)?></strong></li>
                                <li><i class="fas fa-check text-success"></i> <strong>1 <?=t('plan_migration_free',$dict)?></strong></li>
                            </ul>
                            
                            <h5 class="mt-4 mb-3"><?=t('not_included',$dict)?></h5>
                            <ul class="list-unstyled feature-list text-start">
                                <li><i class="fas fa-times text-danger"></i> <?=t('plan_no_monitoring',$dict)?></li>
                                <li><i class="fas fa-times text-danger"></i> <?=t('plan_no_audit',$dict)?></li>
                                <li><i class="fas fa-times text-danger"></i> <?=t('plan_no_account_manager',$dict)?></li>
                                <li><i class="fas fa-times text-danger"></i> <?=t('plan_no_server_config',$dict)?></li>
                            </ul>
                            
                            <a class="btn btn-cta btn-cta-primary mt-3 w-100" href="#" data-bs-toggle="modal" data-bs-target="#signup-modal"><?=t('signup_btn',$dict)?></a>
                        </div>
                    </div>
                    
                    <!-- Plan Corporativo -->
                    <div class="item col-md-4 col-12">
                        <h3 class="heading"><?=t('plan_corporate_name',$dict)?></h3>
                        <div class="content">
                            <p class="price-figure"><span class="currency">€</span><span class="number">450</span><span class="unit">/<?=t('month',$dict)?></span></p>
                            <p class="text-muted"><?=t('plan_corporate_devices',$dict)?></p>
                            
                            <h5 class="mt-4 mb-3"><?=t('included',$dict)?></h5>
                            <ul class="list-unstyled feature-list text-start">
                                <li><i class="fas fa-check text-success"></i> 12 <?=t('plan_visits',$dict)?></li>
                                <li><i class="fas fa-check text-success"></i> <?=t('plan_remote_unlimited',$dict)?></li>
                                <li><i class="fas fa-check text-success"></i> <?=t('plan_corporate_sla',$dict)?></li>
                                <li><i class="fas fa-check text-success"></i> <?=t('plan_corporate_hours',$dict)?></li>
                                <li><i class="fas fa-check text-success"></i> <?=t('plan_corporate_channels',$dict)?></li>
                                <li><i class="fas fa-check text-success"></i> <?=t('plan_preventive_monthly',$dict)?></li>
                                <li><i class="fas fa-check text-success"></i> <?=t('plan_monitoring_247',$dict)?></li>
                                <li><i class="fas fa-check text-success"></i> <?=t('plan_audit_biannual',$dict)?></li>
                                <li><i class="fas fa-check text-success"></i> <?=t('plan_weekly_reports',$dict)?></li>
                                <li><i class="fas fa-check text-success"></i> <strong><?=t('plan_reinstall_unlimited',$dict)?></strong></li>
                                <li><i class="fas fa-check text-success"></i> <strong><?=t('plan_migration_unlimited',$dict)?></strong></li>
                                <li><i class="fas fa-check text-success"></i> <strong>4h/<?=t('month',$dict)?> <?=t('plan_server_config',$dict)?></strong></li>
                                <li><i class="fas fa-check text-success"></i> <strong><?=t('plan_travel_50km',$dict)?></strong></li>
                                <li><i class="fas fa-check text-success"></i> <?=t('plan_account_manager',$dict)?></li>
                            </ul>
                            
                            <a class="btn btn-cta btn-cta-primary mt-3 w-100" href="#" data-bs-toggle="modal" data-bs-target="#signup-modal"><?=t('signup_btn',$dict)?></a>
                        </div>
                    </div>
                                 
                </div>
                <p class="text-muted mt-4"><small><?=t('sla_note',$dict)?></small></p>
            </div>
        </section>
        
        <section id="signup" class="signup">
            <div class="container text-center">
                <h2 class="title"><?=t('signup2_title',$dict)?></h2>
                <p class="summary"><?=t('signup2_sub',$dict)?></p>
                <form class="signup-form" method="post" action="#">
                    <div class="form-group">
                        <label class="sr-only" for="semail2"><?=t('your_email',$dict)?></label>
                        <input type="email" id="semail2" name="semail2" class="form-control" placeholder="<?=t('email_placeholder',$dict)?>" required>
                    </div>
                    <button type="submit" class="btn btn-cta btn-cta-primary"><?=t('signup_btn',$dict)?></button>
                </form>
            </div>
        </section>
            
    </div>
    
    <footer class="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-lg-5 col-md-7 col-12 about">
                        <div class="footer-col-inner">
                            <h3 class="title"><?=t('footer_title',$dict)?></h3>
                            <p><?=t('footer_desc',$dict)?></p>
                            <p><a class="more" href="#"><?=t('learn_more',$dict)?> <i class="fas fa-long-arrow-alt-right"></i></a></p>
                        </div>
                    </div>
                    <div class="footer-col col-lg-3 col-md-4 col-12 mr-lg-auto links">
                        <div class="footer-col-inner">
                            <h3 class="title"><?=t('links',$dict)?></h3>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fas fa-caret-right"></i>Knowledge Base</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>Jobs</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>Press</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>Terms of services</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-col col-lg-3 col-12 contact">
                        <div class="footer-col-inner">
                            <h3 class="title"><?=t('get_in_touch',$dict)?></h3>
                            <div class="row">
                                <p class="tel col-lg-12 col-md-4 col-12"><i class="fas fa-phone"></i><?=t('phone',$dict)?></p>
                                <p class="email col-lg-12 col-md-4 col-12"><i class="fas fa-envelope"></i><a href="#"><?=t('email',$dict)?></a></p>
                                <p class="email col-lg-12 col-md-4 col-12"><i class="fas fa-comment"></i><a href="#"><?=t('live_chat',$dict)?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-bar">
            <div class="container">
                <div class="row">
                    <small class="copyright col-md-6 col-12">Template Copyright <a href="http://themes.3rdwavemedia.com/" target="_blank">@ 3rd Wave Media</a></small>
                    <div class="social-container col-md-6 col-12">
                        <ul class="social list-inline">
                            <li class="last list-inline-item"><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/plugins/popper.min.js"></script> 
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script src="assets/plugins/vanilla-back-to-top.min.js"></script>   
    <script src="assets/js/main.js"></script> 
    
    <a id="lang-toggle" href="?lang=<?= $lang === 'en' ? 'es' : 'en' ?>">
        <i class="fa-solid fa-language"></i>
    </a>
</body>
</html>
