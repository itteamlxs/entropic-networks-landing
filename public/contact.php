<?php
require_once __DIR__.'/../src/bootstrap.php';

$lang = $_GET['lang'] ?? 'en';
$dict = require __DIR__.'/../src/Config/'.$lang.'.php';
$current_page = 'contact';

// Handle form submission
$message_sent = false;
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    $handler_path = __DIR__ . '/../src/contact_handler.php';
    if (file_exists($handler_path)) {
        require_once $handler_path;
        $result = handleContactForm($_POST);
        $message_sent = $result['success'];
        $error_message = $result['message'] ?? '';
    } else {
        $error_message = 'Configuration error. Please contact administrator.';
        error_log('contact_handler.php not found at: ' . $handler_path);
    }
}
?>
<!DOCTYPE html>
<html lang="<?=htmlspecialchars($lang, ENT_QUOTES, 'UTF-8')?>">
<head>
    <title><?=t('contact_title',$dict)?> - <?=t('site_title',$dict)?></title>
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

<body class="contact-page">    
    <div class="wrapper">
        <?php include __DIR__.'/../src/partials/nav.php'; ?>
        
        <section id="contact-main" class="contact-main section">
            <div class="container text-center">
                <h2 class="title"><?=t('contact_heading',$dict)?></h2>
                <p class="intro"><?=t('contact_intro',$dict)?></p>
                
                <div class="row">
                    <div class="item col-md-4 col-12">
                        <div class="item-inner">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-open" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.818l5.724 3.465L8 8.917l1.276.766L15 6.218V5.4a1 1 0 0 0-.53-.882l-6-3.2zM15 7.388l-4.754 2.877L15 13.117v-5.73zm-.035 6.874L8 10.083l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738zM1 13.117l4.754-2.852L1 7.387v5.73zM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2z"/>
                                </svg>
                            </div>
                            <div class="details">
                                <h4 class="title"><?=t('contact_email_title',$dict)?></h4>
                                <p><a href="mailto:support@entropicnetworks.com">support@entropicnetworks.com</a></p>
                                <p><a href="mailto:info@entropicnetworks.com">info@entropicnetworks.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item col-md-4 col-12">
                        <div class="item-inner">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-inbound" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0zm-12.2 1.182a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                </svg>
                            </div>
                            <div class="details">
                                <h4 class="title"><?=t('contact_phone_title',$dict)?></h4>
                                <p class="phone">+34 XXX XXX XXX</p>
                                <p class="day"><?=t('contact_hours',$dict)?></p>
                            </div>
                        </div>
                    </div>
                    <div class="item col-md-4 col-12 last">
                        <div class="item-inner">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
                                </svg>
                            </div>
                            <div class="details">
                                <h4 class="title"><?=t('contact_address_title',$dict)?></h4>
                                <p class="address"><?=t('contact_address',$dict)?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="container contact-form-section">
            <h3 class="title text-center"><?=t('contact_form_title',$dict)?></h3>
            <p class="intro text-center"><?=t('contact_form_intro',$dict)?></p>
            
            <?php if ($message_sent): ?>
                <div class="alert alert-success text-center mx-auto" style="max-width: 600px;" role="alert">
                    <i class="fas fa-check-circle"></i> <?=t('contact_success',$dict)?>
                </div>
            <?php endif; ?>
            
            <?php if ($error_message): ?>
                <div class="alert alert-danger text-center mx-auto" style="max-width: 600px;" role="alert">
                    <i class="fas fa-exclamation-circle"></i> <?=htmlspecialchars($error_message, ENT_QUOTES, 'UTF-8')?>
                </div>
            <?php endif; ?>
            
            <div class="row text-center">                
                <div class="contact-form col-lg-7 col-12 mx-lg-auto">                            
                    <form class="form" method="post" action="contact.php?lang=<?=htmlspecialchars($lang, ENT_QUOTES, 'UTF-8')?>">                
                        <div class="form-group name mb-3">
                            <label class="sr-only" for="name"><?=t('contact_name_label',$dict)?></label>
                            <input id="name" name="name" type="text" class="form-control" placeholder="<?=t('contact_name_placeholder',$dict)?>" required>
                        </div>
                        <div class="form-group email mb-3">
                            <label class="sr-only" for="email"><?=t('contact_email_label',$dict)?></label>
                            <input id="email" name="email" type="email" class="form-control" placeholder="<?=t('contact_email_placeholder',$dict)?>" required>
                        </div>
                        <div class="form-group subject mb-3">
                            <label class="sr-only" for="subject"><?=t('contact_subject_label',$dict)?></label>
                            <input id="subject" name="subject" type="text" class="form-control" placeholder="<?=t('contact_subject_placeholder',$dict)?>" required>
                        </div>
                        <div class="form-group message mb-3">
                            <label class="sr-only" for="message"><?=t('contact_message_label',$dict)?></label>
                            <textarea id="message" name="message" class="form-control" rows="8" placeholder="<?=t('contact_message_placeholder',$dict)?>" required></textarea>
                        </div>
                        <button type="submit" name="contact_submit" class="btn btn-block btn-cta-primary"><?=t('contact_send_btn',$dict)?></button>
                    </form>
                </div>
            </div>
        </section> 
         
        <section class="map-section">
            <h3 class="sr-only title"><?=t('contact_map_title',$dict)?></h3>
            <div class="gmap-wrapper" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.7934983333333!2d-3.7037902!3d40.4167754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDI1JzAwLjQiTiAzwrA0MicxMy42Ilc!5e0!3m2!1sen!2ses!4v1234567890" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </section>
        
    <?php include __DIR__.'/../src/partials/signup-section.php'; ?>    
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
