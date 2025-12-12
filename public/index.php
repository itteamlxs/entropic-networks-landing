<?php
require_once __DIR__.'/../src/bootstrap.php';

$lang = $_GET['lang'] ?? 'en';   // idioma por defecto
$page = 'index';
$dict = require __DIR__.'/../src/Config/'.$lang.'.php';
?>
<!DOCTYPE html>
<html lang="<?=htmlspecialchars($lang)?>">
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
<link rel="stylesheet" href="assets/css/custom-lang.css">
<link rel="stylesheet" href="assets/css/custom-lang.css">
<link rel="stylesheet" href="assets/css/custom-lang.css">
<link rel="stylesheet" href="assets/css/custom-lang.css">
<link rel="stylesheet" href="assets/css/custom-lang.css">
</head>

<body class="home-page">
<div class="wrapper">
	<!-- ******HEADER****** -->
	<header id="header" class="header">
		<div class="container">
			<h1 class="logo">
				<a href="index.php"><span class="logo-title"><?=t('site_title',$dict)?></span></a>
			</h1>
			<nav class="main-nav navbar navbar-expand-md navbar-dark" role="navigation">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="navbar-collapse collapse justify-content-end" id="navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="nav-item"><a class="nav-link active" href="index.php"><?=t('nav_home',$dict)?></a></li>
						<li class="nav-item"><a class="nav-link" href="tour.php"><?=t('nav_tour',$dict)?></a></li>
						<li class="nav-item"><a class="nav-link" href="pricing.php"><?=t('nav_pricing',$dict)?></a></li>
						<li class="nav-item"><a class="nav-link" href="about.php"><?=t('nav_about',$dict)?></a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><?=t('nav_blog',$dict)?> <i class="fas fa-angle-down"></i></a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="blog.php"><?=t('blog_home',$dict)?></a>
								<a class="dropdown-item" href="blog-single.php"><?=t('blog_single',$dict)?></a>
								<a class="dropdown-item" href="404.php">404</a>
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
			<div id="bg-carousel" class="bg-carousel carousel slide carousel-fade" data-bs-ride="carousel">
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
					<!-- ...copia el resto de bloques, solo cambia los textos visibles por <?=t('clave',$dict)?> -->
					<div class="text-center">
						<a class="btn btn-cta btn-cta-secondary" href="tour.php"><?=t('why_cta',$dict)?></a>
					</div>
				</div>
				<!-- testimonios sin tocar -->
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
			</div>
		</div>
	</section>

	<!-- ******SIGNUP****** -->
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

	<!-- ******FOOTER****** -->
	<footer class="footer">
		<div class="footer-content">
			<div class="container">
				<div class="row gx-5">
					<div class="col-lg-6 col-12">
						<div class="footer-col about">
							<div class="footer-col-inner">
								<h3 class="title"><?=t('footer_title',$dict)?></h3>
								<p><?=t('footer_desc',$dict)?></p>
								<p><a class="more" href="#"><?=t('learn_more',$dict)?> <i class="fas fa-long-arrow-alt-right"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<!-- links y contact igual, solo textos con t() -->
					</div>
				</div>
			</div>
		</div>
		<!-- bottom-bar igual -->
	</footer>

	<!-- Scripts -->
	<script src="assets/plugins/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/vanilla-back-to-top.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/accordion.js"></script>
	<script src="assets/js/modal-video.js"></script>
<a id="lang-toggle" class="btn btn-sm btn-outline-secondary position-fixed bottom-0 end-0 m-3" href="?lang=<?= ($lang ?? 'en') === 'en' ? 'es' : 'en' ?>"><?= ($lang ?? 'en') === 'en' ? 'ES' : 'EN' ?></a>
<script src="assets/js/lang-switcher.js"></script>
<script src="assets/js/lang-switcher.js"></script>
<script src="assets/js/lang-switcher.js"></script>
</body>
</html>
