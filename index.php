<?php

switch ($_SERVER['PATH_INFO']) {
    case '/':
        require 'home.php';
        break;

    case '/portal.php':
        require 'portal.php';
        break;

    case '/app/myPHP':
        require 'myPHP.php';
        break;

    default:
        echo "no page " . time();
        break;
}
