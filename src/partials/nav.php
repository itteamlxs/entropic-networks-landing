<?php include __DIR__.'/alert-bar.php'; ?>
<!-- ******HEADER****** -->
<header id="header" class="header">
    <div class="container">
        <h1 class="logo">
            <a href="/index.php">
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
                        <a class="nav-link <?=($current_page === 'index') ? 'active' : ''?>" href="/index.php">
                            <?=t('nav_home',$dict)?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=($current_page === 'tour') ? 'active' : ''?>" href="/tour.php">
                            <?=t('nav_tour',$dict)?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=($current_page === 'pricing') ? 'active' : ''?>" href="/pricing.php">
                            <?=t('nav_pricing',$dict)?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=($current_page === 'about') ? 'active' : ''?>" href="/about.php">
                            <?=t('nav_about',$dict)?>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?=in_array($current_page, ['portal']) ? 'active' : ''?>" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                            <?=t('nav_portal',$dict)?> <i class="fas fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <?php
                            // Load portal items from separate config file
                            $portal_config_file = __DIR__ . '/../Config/' . $lang . '_portal.php';
                            if (file_exists($portal_config_file)) {
                                $portal_items = require $portal_config_file;
                                foreach ($portal_items as $item) {
                                    // Add leading slash for absolute path from root
                                    $absolute_url = '/' . ltrim($item['url'], '/');
                                    echo '<a class="dropdown-item" href="' . htmlspecialchars($absolute_url, ENT_QUOTES, 'UTF-8') . '?lang=' . htmlspecialchars($lang, ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') . '</a>' . "\n                            ";
                                }
                            } else {
                                // Fallback if portal config doesn't exist
                                echo '<a class="dropdown-item" href="/portal/nis2_eu.php?lang=' . htmlspecialchars($lang, ENT_QUOTES, 'UTF-8') . '">' . t('portal_nis2', $dict) . '</a>';
                            }
                            ?>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=($current_page === 'contact') ? 'active' : ''?>" href="/contact.php">
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
