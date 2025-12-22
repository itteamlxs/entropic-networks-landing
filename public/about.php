<?php
require_once __DIR__.'/../src/bootstrap.php';
$lang = $_GET['lang'] ?? 'en';
$dict = require __DIR__.'/../src/Config/'.$lang.'.php';
$current_page = 'about';
?>
<!DOCTYPE html>
<html lang="<?=htmlspecialchars($lang, ENT_QUOTES, 'UTF-8')?>">
<head>
    <title><?=t('site_title',$dict)?> - <?=t('about_title',$dict)?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=t('about_meta_desc',$dict)?>">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,500,700' rel='stylesheet' type='text/css'>    
    <script defer src="assets/plugins/fontawesome/js/all.js"></script>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">       
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
    <link rel="stylesheet" href="assets/css/custom-lang.css">
</head> 

<body class="about-page">    
    <div class="wrapper">
        <?php include __DIR__.'/../src/partials/nav.php'; ?>
        
        <!-- ******ABOUT PROMO****** -->
        <section id="about-promo" class="about-promo section" style="background: linear-gradient(135deg, #0047AB 0%, #003380 50%, #002855 100%); position: relative; min-height: 400px;">
            <div style="position: absolute; left: 0; top: 0; width: 100%; height: 100%; background: url('assets/images/background/network-pattern.png') repeat; opacity: 0.1;"></div>
            <div class="container position-relative" style="z-index: 10; padding: 80px 0;">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h1 class="title" style="color: #fff; font-size: 42px; font-weight: bold; margin-bottom: 20px; text-shadow: 0 2px 4px rgba(0,0,0,0.3);"><?=t('about_title',$dict)?></h1>
                        <p class="intro" style="color: #fff; font-size: 20px; line-height: 1.6; text-shadow: 0 1px 2px rgba(0,0,0,0.2);"><?=t('about_intro',$dict)?></p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- ******MISSION & VISION****** -->
        <section class="mission-vision section" style="padding: 80px 0; background: #f5f5f5;">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="card h-100 border-0 shadow-sm" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <div class="card-body p-5">
                                <div class="icon-circle mb-4" style="width: 65px; height: 65px; background: linear-gradient(135deg, #0047AB 0%, #003380 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" class="bi bi-bullseye" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                        <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10m0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12"/>
                                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8"/>
                                        <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                                    </svg>
                                </div>
                                <h3 class="mb-3" style="color: #0047AB; font-weight: bold; font-size: 24px;"><?=t('mission_title',$dict)?></h3>
                                <p style="font-size: 16px; line-height: 1.8; color: #666;"><?=t('mission_text',$dict)?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="card h-100 border-0 shadow-sm" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                            <div class="card-body p-5">
                                <div class="icon-circle mb-4" style="width: 65px; height: 65px; background: linear-gradient(135deg, #003380 0%, #002855 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                    </svg>
                                </div>
                                <h3 class="mb-3" style="color: #0047AB; font-weight: bold; font-size: 24px;"><?=t('vision_title',$dict)?></h3>
                                <p style="font-size: 16px; line-height: 1.8; color: #666;"><?=t('vision_text',$dict)?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ******OUR SERVICES****** -->
        <section class="our-services section" style="padding: 80px 0;">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="title" style="font-size: 36px; font-weight: bold; margin-bottom: 15px; color: #0047AB;"><?=t('our_services_title',$dict)?></h2>
                    <p class="intro" style="font-size: 18px; color: #999; max-width: 700px; margin: 0 auto;"><?=t('our_services_intro',$dict)?></p>
                </div>

                <div class="row g-4">
                    <!-- Service 1 -->
                    <div class="col-lg-6">
                        <div class="service-card" style="background: #fff; border-radius: 8px; padding: 40px; box-shadow: 0 2px 15px rgba(0,0,0,0.08); transition: all 0.3s ease; height: 100%;">
                            <div class="d-flex align-items-start">
                                <div class="service-icon me-4" style="flex-shrink: 0;">
                                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #0047AB 0%, #003380 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#fff" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                            <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h4 class="mb-3" style="color: #0047AB; font-weight: bold; font-size: 20px;"><?=t('service_maintenance_title',$dict)?></h4>
                                    <p style="font-size: 15px; line-height: 1.7; color: #666; margin: 0;"><?=t('service_maintenance_desc',$dict)?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="col-lg-6">
                        <div class="service-card" style="background: #fff; border-radius: 8px; padding: 40px; box-shadow: 0 2px 15px rgba(0,0,0,0.08); transition: all 0.3s ease; height: 100%;">
                            <div class="d-flex align-items-start">
                                <div class="service-icon me-4" style="flex-shrink: 0;">
                                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #003380 0%, #002855 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#fff" class="bi bi-diagram-3-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5zm-6 8A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5zm6 0A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h4 class="mb-3" style="color: #0047AB; font-weight: bold; font-size: 20px;"><?=t('service_network_title',$dict)?></h4>
                                    <p style="font-size: 15px; line-height: 1.7; color: #666; margin: 0;"><?=t('service_network_desc',$dict)?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="col-lg-6">
                        <div class="service-card" style="background: #fff; border-radius: 8px; padding: 40px; box-shadow: 0 2px 15px rgba(0,0,0,0.08); transition: all 0.3s ease; height: 100%;">
                            <div class="d-flex align-items-start">
                                <div class="service-icon me-4" style="flex-shrink: 0;">
                                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #0066CC 0%, #0047AB 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#fff" class="bi bi-shield-fill-check" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.8 11.8 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7 7 0 0 0 1.048-.625 11.8 11.8 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.54 1.54 0 0 0-1.044-1.263 63 63 0 0 0-2.887-.87C9.843.266 8.69 0 8 0m2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h4 class="mb-3" style="color: #0047AB; font-weight: bold; font-size: 20px;"><?=t('service_security_title',$dict)?></h4>
                                    <p style="font-size: 15px; line-height: 1.7; color: #666; margin: 0;"><?=t('service_security_desc',$dict)?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service 4 -->
                    <div class="col-lg-6">
                        <div class="service-card" style="background: #fff; border-radius: 8px; padding: 40px; box-shadow: 0 2px 15px rgba(0,0,0,0.08); transition: all 0.3s ease; height: 100%;">
                            <div class="d-flex align-items-start">
                                <div class="service-icon me-4" style="flex-shrink: 0;">
                                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #5B8FC4 0%, #0047AB 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#fff" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                                            <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h4 class="mb-3" style="color: #0047AB; font-weight: bold; font-size: 20px;"><?=t('service_consulting_title',$dict)?></h4>
                                    <p style="font-size: 15px; line-height: 1.7; color: #666; margin: 0;"><?=t('service_consulting_desc',$dict)?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ******DIFFERENTIATORS****** -->
        <section class="differentiators section" style="padding: 80px 0; background: #f5f5f5;">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="title" style="font-size: 36px; font-weight: bold; margin-bottom: 15px; color: #0047AB;"><?=t('differentiators_title',$dict)?></h2>
                    <p class="intro" style="font-size: 18px; color: #999; max-width: 700px; margin: 0 auto;"><?=t('differentiators_intro',$dict)?></p>
                </div>

                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="text-center h-100">
                            <div class="diff-icon mb-4 mx-auto" style="width: 80px; height: 80px; background: linear-gradient(135deg, #0047AB 0%, #003380 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 5px 20px rgba(0,71,171,0.3);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#fff" class="bi bi-grid-3x3-gap-fill" viewBox="0 0 16 16">
                                    <path d="M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zM1 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zM1 12a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1z"/>
                                </svg>
                            </div>
                            <h4 class="mb-3" style="color: #0047AB; font-weight: bold; font-size: 22px;"><?=t('diff_allinone_title',$dict)?></h4>
                            <p style="font-size: 16px; line-height: 1.7; color: #666;"><?=t('diff_allinone_desc',$dict)?></p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="text-center h-100">
                            <div class="diff-icon mb-4 mx-auto" style="width: 80px; height: 80px; background: linear-gradient(135deg, #003380 0%, #002855 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 5px 20px rgba(0,51,128,0.3);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#fff" class="bi bi-sliders" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"/>
                                </svg>
                            </div>
                            <h4 class="mb-3" style="color: #0047AB; font-weight: bold; font-size: 22px;"><?=t('diff_custom_title',$dict)?></h4>
                            <p style="font-size: 16px; line-height: 1.7; color: #666;"><?=t('diff_custom_desc',$dict)?></p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="text-center h-100">
                            <div class="diff-icon mb-4 mx-auto" style="width: 80px; height: 80px; background: linear-gradient(135deg, #0066CC 0%, #0047AB 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 5px 20px rgba(0,102,204,0.3);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#fff" class="bi bi-lightning-charge-fill" viewBox="0 0 16 16">
                                    <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
                                </svg>
                            </div>
                            <h4 class="mb-3" style="color: #0047AB; font-weight: bold; font-size: 22px;"><?=t('diff_preventive_title',$dict)?></h4>
                            <p style="font-size: 16px; line-height: 1.7; color: #666;"><?=t('diff_preventive_desc',$dict)?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ******TEAM (Optional - Placeholder for future)****** -->
        <section class="team-preview section" style="padding: 80px 0; background: url('assets/images/background/team-bg.jpg') no-repeat center center; background-size: cover; position: relative;">
            <div style="background: rgba(255,255,255,0.95); position: absolute; left: 0; top: 0; width: 100%; height: 100%;"></div>
            <div class="container position-relative" style="z-index: 10;">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="assets/images/team/team-photo.jpg" alt="Entropic Networks Team" class="img-fluid rounded shadow-lg" style="border-radius: 12px !important;">
                        <!-- IMAGE: team-photo.jpg - Professional team photo in modern office setting -->
                    </div>
                    <div class="col-lg-6">
                        <h2 class="title mb-4" style="font-size: 36px; font-weight: bold; color: #0047AB;"><?=t('team_title',$dict)?></h2>
                        <p style="font-size: 18px; line-height: 1.8; color: #666; margin-bottom: 25px;">
                            <?=t('team_desc',$dict)?>
                        </p>
                        <ul class="list-unstyled" style="font-size: 16px; color: #666;">
                            <li class="mb-3"><i class="fas fa-check-circle" style="color: #27ae60; margin-right: 10px;"></i> <?=t('team_cert',$dict)?></li>
                            <li class="mb-3"><i class="fas fa-check-circle" style="color: #27ae60; margin-right: 10px;"></i> <?=t('team_exp',$dict)?></li>
                            <li class="mb-3"><i class="fas fa-check-circle" style="color: #27ae60; margin-right: 10px;"></i> <?=t('team_training',$dict)?></li>
                            <li><i class="fas fa-check-circle" style="color: #27ae60; margin-right: 10px;"></i> <?=t('team_multilang',$dict)?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- ******CTA****** --> 
        <section id="cta-section" class="cta-section" style="padding: 60px 0; background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);">
            <div class="container text-center">
                <h2 class="title" style="color: #fff; font-size: 32px; font-weight: bold; margin-bottom: 15px;"><?=t('cta_about_title',$dict)?></h2>
                <p class="intro" style="color: #ecf0f1; font-size: 18px; max-width: 600px; margin: 0 auto 30px;"><?=t('cta_about_text',$dict)?></p>
                <a class="btn btn-cta btn-cta-primary" href="contact.php?lang=<?=htmlspecialchars($lang, ENT_QUOTES, 'UTF-8')?>" style="font-size: 16px; padding: 12px 40px;"><?=t('contact_us',$dict)?></a>
            </div>
        </section>
            
    </div>
    
    <?php include __DIR__.'/../src/partials/footer.php'; ?>
    <?php include __DIR__.'/../src/partials/modals.php'; ?>
    
    <style>
    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 25px rgba(0,0,0,0.15) !important;
    }
    
    .mission-vision .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 25px rgba(0,0,0,0.15) !important;
    }
    
    @media (max-width: 768px) {
        #about-promo {
            min-height: 300px !important;
        }
        
        #about-promo .title {
            font-size: 28px !important;
        }
        
        #about-promo .intro {
            font-size: 16px !important;
        }
        
        .service-card {
            padding: 25px !important;
        }
        
        .service-icon div {
            width: 60px !important;
            height: 60px !important;
        }
        
        .service-icon svg {
            width: 30px !important;
            height: 30px !important;
        }
        
        .diff-icon {
            width: 80px !important;
            height: 80px !important;
        }
        
        .diff-icon svg {
            width: 40px !important;
            height: 40px !important;
        }
    }
    </style>
          
    <script src="assets/plugins/popper.min.js"></script> 
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script src="assets/plugins/vanilla-back-to-top.min.js"></script>   
    <script src="assets/js/main.js"></script>
    
    <a id="lang-toggle" href="?lang=<?=($lang === 'en') ? 'es' : 'en'?>">
        <i class="fa-solid fa-language"></i>
    </a>
</body>
</html>
