<?php
require_once __DIR__.'/../src/bootstrap.php';

$lang = $_GET['lang'] ?? 'en';
$dict = require __DIR__.'/../src/Config/'.$lang.'.php';
$current_page = 'pricing';
?>
<!DOCTYPE html>
<html lang="<?=htmlspecialchars($lang, ENT_QUOTES, 'UTF-8')?>">
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
        <?php include __DIR__.'/../src/partials/nav.php'; ?>
        
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
    
    <?php include __DIR__.'/../src/partials/footer.php'; ?>
    <?php include __DIR__.'/../src/partials/modals.php'; ?>

    <script src="assets/plugins/popper.min.js"></script> 
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script src="assets/plugins/vanilla-back-to-top.min.js"></script>   
    <script src="assets/js/main.js"></script> 
    
    <a id="lang-toggle" href="?lang=<?= $lang === 'en' ? 'es' : 'en' ?>">
        <i class="fa-solid fa-language"></i>
    </a>
</body>
</html>
