<?php
require_once __DIR__.'/../src/bootstrap.php';

$lang = $_GET['lang'] ?? 'en';
$dict = require __DIR__.'/../src/Config/'.$lang.'.php';
$current_page = 'index';
?>
<!DOCTYPE html>
<html lang="<?=htmlspecialchars($lang, ENT_QUOTES, 'UTF-8')?>">
<head>
	<title><?=t('site_title',$dict)?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?=t('meta_desc',$dict)?>">
	<meta name="author" content="<?=t('author',$dict)?>">
	<link rel="shortcut icon" href="favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,500,700' rel='stylesheet' type='text/css'>
	<script defer src="assets/plugins/fontawesome/js/all.js"></script>
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
	<link rel="stylesheet" href="assets/css/custom-lang.css">
</head>

<body class="home-page">
	<div class="wrapper">
		
		<?php include __DIR__.'/../src/partials/nav.php'; ?>

		<!-- ******PROMO****** -->
		<section id="promo" class="promo section">
			<div class="container intro">
				<h2 class="title"><?=t('hero_title',$dict)?></h2>
				<p class="summary"><?=t('hero_sub',$dict)?></p>
				<a class="btn btn-cta btn-cta-secondary" href="tour.php"><?=t('hero_cta',$dict)?></a>
			</div>

			<div class="fixed-container">
				<div class="signup">
					<div class="container text-center">
						<h3 class="title"><?=t('signup_title',$dict)?></h3>
						<p class="summary"><?=t('signup_sub',$dict)?></p>
						<form class="signup-form">
							<div class="form-group">
								<label class="sr-only" for="semail1"><?=t('your_email',$dict)?></label>
								<input type="email" id="semail1" name="semail1" class="form-control" placeholder="<?=t('email_placeholder',$dict)?>">
							</div>
							<button type="submit" class="btn btn-cta btn-cta-primary"><?=t('signup_btn',$dict)?></button>
						</form>
					</div>
				</div>
			</div>
			<div class="bg-carousel-wrapper">
				<div id="bg-carousel" class="bg-carousel carousel slide carousel-fade" data-bs-ride="carousel" >
					<div class="carousel-inner slides">
						<div class="carousel-item active slide slide-1" data-bs-interval="6000"></div>
						<div class="carousel-item slide slide-2" data-bs-interval="6000"></div>
						<div class="carousel-item slide slide-3" data-bs-interval="6000"></div>
					</div>
				</div>
			</div>
		</section>

		<!-- ******PRESS****** -->
		<div class="press">
			<div class="container text-center">
				<div class="row">
					<div class="press-item col-lg-2 col-md-4 col-6"><a href="#"><img class="img-fluid" src="assets/images/press/press-1.png" alt=""></a></div>
					<div class="press-item col-lg-2 col-md-4 col-6"><a href="#"><img class="img-fluid" src="assets/images/press/press-2.png" alt=""></a></div>
					<div class="press-item col-lg-2 col-md-4 col-6"><a href="#"><img class="img-fluid" src="assets/images/press/press-3.png" alt=""></a></div>
					<div class="press-item col-lg-2 col-md-4 col-6"><a href="#"><img class="img-fluid" src="assets/images/press/press-4.png" alt=""></a></div>
					<div class="press-item col-lg-2 col-md-4 col-6"><a href="#"><img class="img-fluid" src="assets/images/press/press-5.png" alt=""></a></div>
					<div class="press-item col-lg-2 col-md-4 col-6"><a href="#"><img class="img-fluid" src="assets/images/press/press-6.png" alt=""></a></div>
				</div>
			</div>
		</div>

		<!-- ******WHY****** -->
		<section id="why" class="why section">
			<div class="container">
				<h2 class="title text-center"><?=t('why_title',$dict)?></h2>
				<p class="intro text-center"><?=t('why_sub',$dict)?></p>
				<div class="row">
					<div class="benefits col-lg-7 col-md-6 col-12">
						<div class="item">
							<div class="icon text-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layers" viewBox="0 0 16 16">
  									<path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0zM8 9.433 1.562 6 8 2.567 14.438 6z"/>
								</svg>
							</div>
							<div class="content">
								<h3 class="title"><?=t('benefit_1_title',$dict)?></h3>
								<p class="desc"><?=t('benefit_1_desc',$dict)?></p>
							</div>
						</div>
						<div class="item">
							<div class="icon text-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bounding-box" viewBox="0 0 16 16">
  									<path d="M5 2V0H0v5h2v6H0v5h5v-2h6v2h5v-5h-2V5h2V0h-5v2zm6 1v2h2v6h-2v2H5v-2H3V5h2V3zm1-2h3v3h-3zm3 11v3h-3v-3zM4 15H1v-3h3zM1 4V1h3v3z"/>
								</svg>
							</div>
							<div class="content">
								<h3 class="title"><?=t('benefit_2_title',$dict)?></h3>
								<p class="desc"><?=t('benefit_2_desc',$dict)?></p>
							</div>
						</div>
						<div class="item">
							<div class="icon text-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16">
  									<path d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56"/>
  									<path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
								</svg>
							</div>
							<div class="content">
								<h3 class="title"><?=t('benefit_3_title',$dict)?></h3>
								<p class="desc"><?=t('benefit_3_desc',$dict)?></p>
							</div>
						</div>
						<div class="item">
							<div class="icon text-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
  									<path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5"/>
								</svg>
							</div>
							<div class="content">
								<h3 class="title"><?=t('benefit_4_title',$dict)?></h3>
								<p class="desc"><?=t('benefit_4_desc',$dict)?></p>
							</div>
						</div>
						<div class="item last">
							<div class="icon text-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield" viewBox="0 0 16 16">
  									<path d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56"/>
								</svg>
							</div>
							<div class="content">
								<h3 class="title"><?=t('benefit_5_title',$dict)?></h3>
								<p class="desc"><?=t('benefit_5_desc',$dict)?></p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="text-center">
							<a class="btn btn-cta btn-cta-secondary" href="tour.php" ><?=t('why_cta',$dict)?></a>
						</div>
					</div>
					<div class="testimonials col-lg-4 col-md-5 col-12 ml-md-auto mr-md-auto">
						<div class="item">
							<div class="quote-box">
								<blockquote class="quote">Love it! vehicula consequat cursus. Morbi bibendum cursus urna, quis rhoncus arcu. Curabitur vel sollicitudin leo.</blockquote>
								<p class="details">
									<span class="name">Steven Turner</span>
									<span class="title">London, UK</span>
								</p>
								<i class="fas fa-quote-right"></i>
							</div>
							<div class="people text-center">
								<img class="user-pic" src="assets/images/people/people-1.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="quote-box">
								<blockquote class="quote">Great vehicula consequat cursus. Pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim!</blockquote>
								<p class="details">
									<span class="name">Michelle Cheung</span>
									<span class="title">San Francisco, US</span>
								</p>
								<i class="fas fa-quote-right"></i>
							</div>
							<div class="people text-center">
								<img class="user-pic" src="assets/images/people/people-2.png" alt="">
							</div>
						</div>
						<div class="item last">
							<div class="quote-box">
								<blockquote class="quote">Excellent Vivamus sit amet tortor id orci interdum tempor sed sit amet ante, pretium quis, sem. Nulla consequat massa quis enim!</blockquote>
								<p class="details">
									<span class="name">James Lee</span>
									<span class="title">London, UK</span>
								</p>
								<i class="fas fa-quote-right"></i>
							</div>
							<div class="people text-center">
								<img class="user-pic" src="assets/images/people/people-3.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ******VIDEO****** -->
		<section id="video" class="video section">
			<div class="container">
				<h2 class="title"><?=t('video_title',$dict)?></h2>
				<p class="summary"><?=t('video_sub',$dict)?></p>
				<div class="control text-center">
					<button type="button" id="play-video-trigger" class="video-play-trigger" data-bs-toggle="modal" data-bs-target="#modal-video"><span class="icon-holder"><i class="fas fa-play"></i></span></button>
					<p><?=t('watch_video',$dict)?></p>

					<div class="modal modal-video" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 id="videoModalLabel" class="modal-title">Video Tour</h4>
								</div>
								<div class="modal-body">
									<div class="video-container ratio ratio-16x9">
					                    <iframe width="560" height="315" src="https://www.youtube.com/embed/QviDwsMLXb0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					                </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ******FAQ****** -->
		<section id="faq" class="faq section has-bg-color">
			<div class="container">
				<h2 class="title text-center"><?=t('faq_title',$dict)?></h2>
				<div id="faqs-accordion" class="accordion faqs-accordion">
					<div class="row gx-3">
		                <div class="col-12 col-lg-6">
			                <div class="accordion-item">
							    <h2 class="accordion-header" id="faq-heading-1">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1"><i class="fas fa-square-plus"></i>
							        <?=t('faq_q1',$dict)?>
							      </button>
							    </h2>
							    <div id="faq1" class="accordion-collapse collapse" aria-labelledby="faq-heading-1">
							        <div class="accordion-body text-start p4">
							            <?=t('faq_a1',$dict)?>
							        </div>
							    </div>
							</div>
			                <div class="accordion-item">
							    <h2 class="accordion-header" id="faq-heading-2">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2"><i class="fas fa-square-plus"></i>
							        <?=t('faq_q2',$dict)?>
							      </button>
							    </h2>
							    <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faq-heading-2">
							        <div class="accordion-body text-start p4">
							            <?=t('faq_a2',$dict)?>
							        </div>
							    </div>
							</div>
	                        <div class="accordion-item">
							    <h2 class="accordion-header" id="faq-heading-3">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3"><i class="fas fa-square-plus"></i>
							        <?=t('faq_q3',$dict)?>
							      </button>
							    </h2>
							    <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faq-heading-3">
							        <div class="accordion-body text-start p4">
							            <?=t('faq_a3',$dict)?>
							        </div>
							    </div>
							</div>
							<div class="accordion-item">
							    <h2 class="accordion-header" id="faq-heading-4">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4"><i class="fas fa-square-plus"></i>
							        <?=t('faq_q4',$dict)?>
							      </button>
							    </h2>
							    <div id="faq4" class="accordion-collapse collapse" aria-labelledby="faq-heading-4">
							        <div class="accordion-body text-start p4">
							            <?=t('faq_a4',$dict)?>
							        </div>
							    </div>
							</div>
		                </div>
	                    <div class="col-12 col-lg-6">
		                    <div class="accordion-item">
							    <h2 class="accordion-header" id="faq-heading-5">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5"><i class="fas fa-square-plus"></i>
							        <?=t('faq_q5',$dict)?>
							      </button>
							    </h2>
							    <div id="faq5" class="accordion-collapse collapse" aria-labelledby="faq-heading-5">
							        <div class="accordion-body text-start p4">
							            <?=t('faq_a5',$dict)?>
							        </div>
							    </div>
							</div>
							<div class="accordion-item">
							    <h2 class="accordion-header" id="faq-heading-6">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6"><i class="fas fa-square-plus"></i>
							        <?=t('faq_q6',$dict)?>
							      </button>
							    </h2>
							    <div id="faq6" class="accordion-collapse collapse" aria-labelledby="faq-heading-6">
							        <div class="accordion-body text-start p4">
							            <?=t('faq_a6',$dict)?>
							        </div>
							    </div>
							</div>
							<div class="accordion-item">
							    <h2 class="accordion-header" id="faq-heading-7">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq7" aria-expanded="false" aria-controls="faq7"><i class="fas fa-square-plus"></i>
							        <?=t('faq_q7',$dict)?>
							      </button>
							    </h2>
							    <div id="faq7" class="accordion-collapse collapse" aria-labelledby="faq-heading-7">
							        <div class="accordion-body text-start p4">
							            <?=t('faq_a7',$dict)?>
							        </div>
							    </div>
							</div>
	                        <div class="accordion-item">
							    <h2 class="accordion-header" id="faq-heading-8">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq8" aria-expanded="false" aria-controls="faq8"><i class="fas fa-square-plus"></i>
							        <?=t('faq_q8',$dict)?>
							      </button>
							    </h2>
							    <div id="faq8" class="accordion-collapse collapse" aria-labelledby="faq-heading-8">
							        <div class="accordion-body text-start p4">
							            <?=t('faq_a8',$dict)?>
							        </div>
							    </div>
							</div>
						</div>
                    </div>
				</div>
				<div class="more text-center">
					<div class="intro"><?=t('faq_more',$dict)?></div>
					<a class="btn btn-cta btn-cta-secondary" href="contact.php"><?=t('faq_cta',$dict)?></a>
				</div>
			</div>
		</section>

		<!-- ******SIGNUP****** -->

		<?php include __DIR__.'/../src/partials/signup-section.php'; ?>

	        <!-- *****END SIGNUP*******>

	<?php include __DIR__.'/../src/partials/footer.php'; ?>
	<?php include __DIR__.'/../src/partials/modals.php'; ?>

	<!-- *****CONFIGURE STYLE****** -->
	<div id="config-panel" class="config-panel config-panel-hide d-none d-lg-block">
		<div class="panel-inner">
			<a id="config-trigger" class="config-trigger" href="#"><i class="fa-solid fa-gear mx-auto"></i></a>
			<h5>Choose Colour</h5>
			<ul id="color-options" class="list-unstyled list-inline mb-0">
				<li class="theme-1 list-inline-item active" ><a data-style="assets/css/theme-1.css" href="#"></a></li>
				<li class="theme-2 list-inline-item "><a data-style="assets/css/theme-2.css" href="#"></a></li>
				<li class="theme-3 list-inline-item "><a data-style="assets/css/theme-3.css" href="#"></a></li>
				<li class="theme-4 list-inline-item "><a data-style="assets/css/theme-4.css" href="#"></a></li>
				<li class="theme-5 list-inline-item "><a data-style="assets/css/theme-5.css" href="#"></a></li>
				<li class="theme-6 list-inline-item "><a data-style="assets/css/theme-6.css" href="#"></a></li>
				<li class="theme-7 list-inline-item "><a data-style="assets/css/theme-7.css" href="#"></a></li>
				<li class="theme-8 list-inline-item "><a data-style="assets/css/theme-8.css" href="#"></a></li>
				<li class="theme-9 list-inline-item "><a data-style="assets/css/theme-9.css" href="#"></a></li>
				<li class="theme-10 list-inline-item "><a data-style="assets/css/theme-10.css" href="#"></a></li>
			</ul>
			<a id="config-close" class="close" href="#"><i class="fa-solid fa-circle-xmark"></i></a>
		</div>
	</div>

	<script src="assets/plugins/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/vanilla-back-to-top.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/accordion.js"></script>
	<script src="assets/js/modal-video.js"></script>
	<script src="assets/js/demo/theme-switcher.js"></script>

	<a id="lang-toggle" href="?lang=<?= $lang === 'en' ? 'es' : 'en' ?>">
		<i class="fa-solid fa-language"></i>
	</a>
</body>
</html>
