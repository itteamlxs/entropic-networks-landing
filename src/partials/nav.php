<!-- ******HEADER****** -->
<?php include __DIR__.'/alert-bar.php'; ?>
<header id="header" class="header">
    <div class="container">
        <h1 class="logo">
            <a href="index.php">
                <span class="logo-title"><?=t('site_title',$dict)?></span>
            </a>
        </h1>
        
        <nav class="main-nav navbar navbar-expand-md navbar-dark" role="navigation">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?=($current_page === 'index') ? 'active' : ''?>" href="index.php">
                            <?=t('nav_home',$dict)?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=($current_page === 'tour') ? 'active' : ''?>" href="tour.php">
                            <?=t('nav_tour',$dict)?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=($current_page === 'pricing') ? 'active' : ''?>" href="pricing.php">
                            <?=t('nav_pricing',$dict)?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=($current_page === 'about') ? 'active' : ''?>" href="about.php">
                            <?=t('nav_about',$dict)?>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?=in_array($current_page, ['blog', 'blog-single']) ? 'active' : ''?>" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                            <?=t('nav_blog',$dict)?> <i class="fas fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="blog.php"><?=t('blog_home',$dict)?></a>
                            <a class="dropdown-item" href="blog-single.php"><?=t('blog_single',$dict)?></a>
                            <a class="dropdown-item" href="404.php">404 Page</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=($current_page === 'contact') ? 'active' : ''?>" href="contact.php">
                            <?=t('nav_contact',$dict)?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link login-trigger" data-bs-toggle="modal" data-bs-target="#login-modal">
                            <?=t('login',$dict)?>
                        </a>
                    </li>
                    <li class="nav-item nav-item-cta last">
                        <a class="nav-link btn btn-cta btn-cta-primary" data-bs-toggle="modal" data-bs-target="#signup-modal">
                            <?=t('get_started',$dict)?>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
