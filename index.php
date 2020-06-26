<?php

switch ($_SERVER['PATH_INFO']) {
    case '/':
        require 'home.php';
        break;

    case '/sitemap.xml':
        require 'gen_sitemap.php';
        break;

    case '/app/myPHP':
        require 'myPHP.php';
        break;

    default:
        echo "no page " . time();
        break;
}
