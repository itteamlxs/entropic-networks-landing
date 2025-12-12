<?php
namespace App;

class Router {
    private array $whitelist = [
        'index','tour','pricing','about','contact','blog','blog-single','404'
    ];

    public function dispatch(string $lang, string $page): string {
        if (!in_array($page, $this->whitelist, true)) $page = '404';
        $dict = require SRC."/Config/$lang.php";
        ob_start();
        include SRC."/Templates/$page.php";
        return ob_get_clean();
    }
}
