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
        
        <!-- ******ABOUT US****** --> 
        <section id="about-us" class="about-us section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="title"><?=t('about_title',$dict)?></h2>
                    <p class="intro mx-auto"><?=t('about_intro',$dict)?></p>
                </div>
                
                <!-- Mission & Vision -->
                <div class="row mb-5">
                    <div class="col-lg-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-bullseye text-primary me-3" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                        <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10m0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12"/>
                                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8"/>
                                        <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                                    </svg>
                                    <h3 class="mb-0"><?=t('mission_title',$dict)?></h3>
                                </div>
                                <p class="mb-0"><?=t('mission_text',$dict)?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye text-primary me-3" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                    </svg>
                                    <h3 class="mb-0"><?=t('vision_title',$dict)?></h3>
                                </div>
                                <p class="mb-0"><?=t('vision_text',$dict)?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Our Services -->
                <div class="text-center mb-4">
                    <h3 class="title"><?=t('our_services_title',$dict)?></h3>
                    <p class="text-muted"><?=t('our_services_intro',$dict)?></p>
                </div>

                <div class="row g-4 mb-5">
                    <div class="col-lg-6">
                        <div class="service-item p-4 h-100 border rounded">
                            <div class="d-flex align-items-start mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-gear-fill text-primary me-3 flex-shrink-0" viewBox="0 0 16 16">
                                    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                                </svg>
                                <div>
                                    <h4 class="mb-2"><?=t('service_maintenance_title',$dict)?></h4>
                                    <p class="mb-0 text-muted"><?=t('service_maintenance_desc',$dict)?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="service-item p-4 h-100 border rounded">
                            <div class="d-flex align-items-start mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-diagram-3-fill text-primary me-3 flex-shrink-0" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5zm-6 8A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5zm6 0A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5z"/>
                                </svg>
                                <div>
                                    <h4 class="mb-2"><?=t('service_network_title',$dict)?></h4>
                                    <p class="mb-0 text-muted"><?=t('service_network_desc',$dict)?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="service-item p-4 h-100 border rounded">
                            <div class="d-flex align-items-start mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-shield-fill-check text-primary me-3 flex-shrink-0" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.8 11.8 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7 7 0 0 0 1.048-.625 11.8 11.8 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.54 1.54 0 0 0-1.044-1.263 63 63 0 0 0-2.887-.87C9.843.266 8.69 0 8 0m2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793z"/>
                                </svg>
                                <div>
                                    <h4 class="mb-2"><?=t('service_security_title',$dict)?></h4>
                                    <p class="mb-0 text-muted"><?=t('service_security_desc',$dict)?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="service-item p-4 h-100 border rounded">
                            <div class="d-flex align-items-start mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-chat-dots-fill text-primary me-3 flex-shrink-0" viewBox="0 0 16 16">
                                    <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                                </svg>
                                <div>
                                    <h4 class="mb-2"><?=t('service_consulting_title',$dict)?></h4>
                                    <p class="mb-0 text-muted"><?=t('service_consulting_desc',$dict)?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Differentiators -->
                <div class="text-center mb-4">
                    <h3 class="title"><?=t('differentiators_title',$dict)?></h3>
                    <p class="text-muted"><?=t('differentiators_intro',$dict)?></p>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="text-center p-4 h-100">
                            <div class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-grid-3x3-gap-fill text-primary" viewBox="0 0 16 16">
                                    <path d="M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zM1 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zM1 12a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1z"/>
                                </svg>
                            </div>
                            <h4 class="mb-3"><?=t('diff_allinone_title',$dict)?></h4>
                            <p class="text-muted"><?=t('diff_allinone_desc',$dict)?></p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="text-center p-4 h-100">
                            <div class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-sliders text-primary" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"/>
                                </svg>
                            </div>
                            <h4 class="mb-3"><?=t('diff_custom_title',$dict)?></h4>
                            <p class="text-muted"><?=t('diff_custom_desc',$dict)?></p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="text-center p-4 h-100">
                            <div class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-lightning-charge-fill text-primary" viewBox="0 0 16 16">
                                    <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
                                </svg>
                            </div>
                            <h4 class="mb-3"><?=t('diff_preventive_title',$dict)?></h4>
                            <p class="text-muted"><?=t('diff_preventive_desc',$dict)?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- ******CTA****** --> 
        <section id="cta-section" class="cta-section has-bg-color">
            <div class="container text-center">
                <h2 class="title"><?=t('cta_about_title',$dict)?></h2>
                <p class="intro mx-auto"><?=t('cta_about_text',$dict)?></p>
                <a class="btn-cta-primary btn btn-cta" href="contact.php?lang=<?=htmlspecialchars($lang, ENT_QUOTES, 'UTF-8')?>"><?=t('contact_us',$dict)?></a>
            </div>
        </section>
            
    </div>
    
    <?php include __DIR__.'/../src/partials/footer.php'; ?>
    <?php include __DIR__.'/../src/partials/modals.php'; ?>
          
    <script src="assets/plugins/popper.min.js"></script> 
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script src="assets/plugins/vanilla-back-to-top.min.js"></script>   
    <script src="assets/js/main.js"></script>
    
    <a id="lang-toggle" class="btn btn-sm btn-outline-secondary position-fixed bottom-0 end-0 m-3" href="?lang=<?=($lang === 'en') ? 'es' : 'en'?>"><?=($lang === 'en') ? 'ES' : 'EN'?></a>
</body>
</html>
