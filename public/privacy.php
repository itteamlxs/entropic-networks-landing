<?php
require_once __DIR__.'/../src/bootstrap.php';
$lang = $_GET['lang'] ?? 'en';
$dict = require __DIR__.'/../src/Config/'.$lang.'.php';
$current_page = 'privacy';
?>
<!DOCTYPE html>
<html lang="<?=htmlspecialchars($lang, ENT_QUOTES, 'UTF-8')?>">
<head>
    <title><?=t('privacy_title',$dict)?> - <?=t('site_title',$dict)?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=t('privacy_meta',$dict)?>">
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,500,700' rel='stylesheet' type='text/css'>
    <script defer src="assets/plugins/fontawesome/js/all.js"></script>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
    <link rel="stylesheet" href="assets/css/custom-lang.css">
    <style>
        .legal-document {
            max-width: 900px;
            margin: 0 auto;
            font-family: 'Lato', 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.7;
            color: #333;
        }
        
        .document-header {
            text-align: center;
            padding-bottom: 40px;
            border-bottom: 2px solid #eaeaea;
            margin-bottom: 50px;
        }
        
        .document-title {
            font-size: 2.2rem;
            font-weight: 600;
            color: #0047AB;
            margin-bottom: 15px;
        }
        
        .document-date {
            font-size: 0.95rem;
            color: #666;
            font-weight: 400;
        }
        
        .section-title {
            font-size: 1.4rem;
            font-weight: 600;
            color: #222;
            margin-top: 50px;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eaeaea;
        }
        
        .subsection-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #333;
            margin-top: 30px;
            margin-bottom: 10px;
        }
        
        .document-content {
            font-size: 1rem;
            color: #444;
        }
        
        .document-content p {
            margin-bottom: 18px;
            text-align: justify;
        }
        
        .document-content ul {
            margin-bottom: 25px;
            padding-left: 25px;
        }
        
        .document-content li {
            margin-bottom: 8px;
            color: #444;
        }
        
        .contact-info {
            background-color: #f9f9f9;
            padding: 20px;
            border-left: 4px solid #0047AB;
            margin: 30px 0;
            border-radius: 4px;
        }
        
        .contact-info p {
            margin-bottom: 8px;
        }
        
        @media (max-width: 768px) {
            .legal-document {
                padding: 0 15px;
            }
            
            .document-title {
                font-size: 1.8rem;
            }
            
            .section-title {
                font-size: 1.2rem;
            }
        }
    </style>
</head>

<body class="privacy-page">    
    <div class="wrapper">
        <?php include __DIR__.'/../src/partials/nav.php'; ?>
        
        <section class="legal-content section" style="padding: 60px 0;">
            <div class="container">
                <div class="legal-document">
                    
                    <!-- Document Header -->
                    <div class="document-header">
                        <h1 class="document-title"><?=t('privacy_title',$dict)?></h1>
                        <p class="document-date"><strong><?=t('privacy_last_update',$dict)?>:</strong> <?=t('privacy_date',$dict)?></p>
                    </div>
                    
                    <div class="document-content">
                        
                        <!-- Section 1 -->
                        <h2 class="section-title"><?=t('privacy_section1_title',$dict)?></h2>
                        <p><?=t('privacy_section1_content',$dict)?></p>
                        <p><strong><?=t('privacy_section1_controller',$dict)?></strong> <?=t('privacy_section1_controller_name',$dict)?></p>
                        <p><strong><?=t('privacy_section1_contact',$dict)?></strong> <?=t('privacy_section1_contact_email',$dict)?></p>
                        
                        <!-- Section 2 -->
                        <h2 class="section-title"><?=t('privacy_section2_title',$dict)?></h2>
                        
                        <p class="subsection-title"><?=t('privacy_section2_1_title',$dict)?></p>
                        <ul>
                            <li><?=t('privacy_section2_1_list1',$dict)?></li>
                            <li><?=t('privacy_section2_1_list2',$dict)?></li>
                            <li><?=t('privacy_section2_1_list3',$dict)?></li>
                            <li><?=t('privacy_section2_1_list4',$dict)?></li>
                            <li><?=t('privacy_section2_1_list5',$dict)?></li>
                        </ul>
                        
                        <p class="subsection-title"><?=t('privacy_section2_2_title',$dict)?></p>
                        <ul>
                            <li><?=t('privacy_section2_2_list1',$dict)?></li>
                            <li><?=t('privacy_section2_2_list2',$dict)?></li>
                            <li><?=t('privacy_section2_2_list3',$dict)?></li>
                        </ul>
                        
                        <p class="subsection-title"><?=t('privacy_section2_3_title',$dict)?></p>
                        <ul>
                            <li><?=t('privacy_section2_3_list1',$dict)?></li>
                            <li><?=t('privacy_section2_3_list2',$dict)?></li>
                        </ul>
                        
                        <!-- Section 3 -->
                        <h2 class="section-title"><?=t('privacy_section3_title',$dict)?></h2>
                        <p><?=t('privacy_section3_content',$dict)?></p>
                        <ul>
                            <li><?=t('privacy_section3_list1',$dict)?></li>
                            <li><?=t('privacy_section3_list2',$dict)?></li>
                            <li><?=t('privacy_section3_list3',$dict)?></li>
                            <li><?=t('privacy_section3_list4',$dict)?></li>
                        </ul>
                        
                        <!-- Section 4 -->
                        <h2 class="section-title"><?=t('privacy_section4_title',$dict)?></h2>
                        <p><?=t('privacy_section4_content',$dict)?></p>
                        <ul>
                            <li><?=t('privacy_section4_list1',$dict)?></li>
                            <li><?=t('privacy_section4_list2',$dict)?></li>
                            <li><?=t('privacy_section4_list3',$dict)?></li>
                            <li><?=t('privacy_section4_list4',$dict)?></li>
                            <li><?=t('privacy_section4_list5',$dict)?></li>
                            <li><?=t('privacy_section4_list6',$dict)?></li>
                            <li><?=t('privacy_section4_list7',$dict)?></li>
                            <li><?=t('privacy_section4_list8',$dict)?></li>
                            <li><?=t('privacy_section4_list9',$dict)?></li>
                        </ul>
                        
                        <!-- Section 5 -->
                        <h2 class="section-title"><?=t('privacy_section5_title',$dict)?></h2>
                        
                        <p class="subsection-title"><?=t('privacy_section5_1_title',$dict)?></p>
                        <ul>
                            <li><?=t('privacy_section5_1_list1',$dict)?></li>
                            <li><?=t('privacy_section5_1_list2',$dict)?></li>
                            <li><?=t('privacy_section5_1_list3',$dict)?></li>
                        </ul>
                        
                        <p class="subsection-title"><?=t('privacy_section5_2_title',$dict)?></p>
                        <ul>
                            <li><?=t('privacy_section5_2_list1',$dict)?></li>
                            <li><?=t('privacy_section5_2_list2',$dict)?></li>
                            <li><?=t('privacy_section5_2_list3',$dict)?></li>
                        </ul>
                        
                        <!-- Section 6 -->
                        <h2 class="section-title"><?=t('privacy_section6_title',$dict)?></h2>
                        <p><?=t('privacy_section6_content',$dict)?></p>
                        <ul>
                            <li><?=t('privacy_section6_list1',$dict)?></li>
                            <li><?=t('privacy_section6_list2',$dict)?></li>
                            <li><?=t('privacy_section6_list3',$dict)?></li>
                        </ul>
                        
                        <!-- Section 7 -->
                        <h2 class="section-title"><?=t('privacy_section7_title',$dict)?></h2>
                        <p><?=t('privacy_section7_content',$dict)?></p>
                        <ul>
                            <li><?=t('privacy_section7_list1',$dict)?></li>
                            <li><?=t('privacy_section7_list2',$dict)?></li>
                            <li><?=t('privacy_section7_list3',$dict)?></li>
                            <li><?=t('privacy_section7_list4',$dict)?></li>
                            <li><?=t('privacy_section7_list5',$dict)?></li>
                        </ul>
                        <p><?=t('privacy_section7_footer',$dict)?></p>
                        
                        <!-- Section 8 -->
                        <h2 class="section-title"><?=t('privacy_section8_title',$dict)?></h2>
                        <p><?=t('privacy_section8_content',$dict)?></p>
                        <ul>
                            <li><?=t('privacy_section8_list1',$dict)?></li>
                            <li><?=t('privacy_section8_list2',$dict)?></li>
                            <li><?=t('privacy_section8_list3',$dict)?></li>
                            <li><?=t('privacy_section8_list4',$dict)?></li>
                            <li><?=t('privacy_section8_list5',$dict)?></li>
                            <li><?=t('privacy_section8_list6',$dict)?></li>
                            <li><?=t('privacy_section8_list7',$dict)?></li>
                            <li><?=t('privacy_section8_list8',$dict)?></li>
                        </ul>
                        <p><?=t('privacy_section8_contact',$dict)?></p>
                        
                        <!-- Section 9 -->
                        <h2 class="section-title"><?=t('privacy_section9_title',$dict)?></h2>
                        <p><?=t('privacy_section9_content',$dict)?></p>
                        <ul>
                            <li><?=t('privacy_section9_list1',$dict)?></li>
                            <li><?=t('privacy_section9_list2',$dict)?></li>
                            <li><?=t('privacy_section9_list3',$dict)?></li>
                            <li><?=t('privacy_section9_list4',$dict)?></li>
                            <li><?=t('privacy_section9_list5',$dict)?></li>
                        </ul>
                        <p><?=t('privacy_section9_footer',$dict)?></p>
                        
                        <!-- Section 10 -->
                        <h2 class="section-title"><?=t('privacy_section10_title',$dict)?></h2>
                        
                        <p class="subsection-title"><?=t('privacy_section10_1_title',$dict)?></p>
                        <p><?=t('privacy_section10_1_content',$dict)?></p>
                        
                        <p class="subsection-title"><?=t('privacy_section10_2_title',$dict)?></p>
                        <p><?=t('privacy_section10_2_content',$dict)?></p>
                        
                        <p class="subsection-title"><?=t('privacy_section10_3_title',$dict)?></p>
                        <p><?=t('privacy_section10_3_content',$dict)?></p>
                        
                        <p><?=t('privacy_section10_footer',$dict)?></p>
                        
                        <!-- Section 11 -->
                        <h2 class="section-title"><?=t('privacy_section11_title',$dict)?></h2>
                        <p><?=t('privacy_section11_content',$dict)?></p>
                        
                        <!-- Section 12 -->
                        <h2 class="section-title"><?=t('privacy_section12_title',$dict)?></h2>
                        <p><?=t('privacy_section12_content',$dict)?></p>
                        
                        <!-- Section 13 -->
                        <h2 class="section-title"><?=t('privacy_section13_title',$dict)?></h2>
                        <p><?=t('privacy_section13_content',$dict)?></p>
                        
                        <!-- Section 14 -->
                        <h2 class="section-title"><?=t('privacy_section14_title',$dict)?></h2>
                        <p><?=t('privacy_section14_content',$dict)?></p>
                        <div class="contact-info">
                            <p><?=t('privacy_section14_email',$dict)?></p>
                            <p><?=t('privacy_section14_address',$dict)?></p>
                        </div>
                        
                        <!-- Section 15 -->
                        <h2 class="section-title"><?=t('privacy_section15_title',$dict)?></h2>
                        <p><?=t('privacy_section15_content',$dict)?></p>
                        
                        <!-- Section 16 -->
                        <h2 class="section-title"><?=t('privacy_section16_title',$dict)?></h2>
                        <p><?=t('privacy_section16_content',$dict)?></p>
                        <div class="contact-info">
                            <p><?=t('privacy_section16_website',$dict)?></p>
                            <p><?=t('privacy_section16_address',$dict)?></p>
                            <p><?=t('privacy_section16_phone',$dict)?></p>
                        </div>
                        
                        <!-- Section 17 -->
                        <h2 class="section-title"><?=t('privacy_section17_title',$dict)?></h2>
                        <p><?=t('privacy_section17_content',$dict)?></p>
                        <div class="contact-info">
                            <p><strong><?=t('privacy_section17_team',$dict)?></strong></p>
                            <p><?=t('privacy_section17_email',$dict)?></p>
                            <p><?=t('privacy_section17_address',$dict)?></p>
                            <p><?=t('privacy_section17_response',$dict)?></p>
                        </div>
                        
                        <!-- Section 18 -->
                        <h2 class="section-title"><?=t('privacy_section18_title',$dict)?></h2>
                        
                        <p class="subsection-title"><?=t('privacy_section18_1_title',$dict)?></p>
                        <p><?=t('privacy_section18_1_content',$dict)?></p>
                        
                        <p class="subsection-title"><?=t('privacy_section18_2_title',$dict)?></p>
                        <p><?=t('privacy_section18_2_content',$dict)?></p>
                        
                        <p class="subsection-title"><?=t('privacy_section18_3_title',$dict)?></p>
                        <p><?=t('privacy_section18_3_content',$dict)?></p>
                        
                    </div>
                </div>
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
