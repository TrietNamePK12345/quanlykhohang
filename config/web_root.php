<?php
define('_DIR_ROOT', dirname(__DIR__));

//  Xử lý http root
if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on')
{
    $web_root = 'https://' . $_SERVER['HTTP_HOST'] . '/';
} else {
    $web_root = 'http://' . $_SERVER['HTTP_HOST'] . '/';
}


define('_WEB_ROOT', $web_root);


