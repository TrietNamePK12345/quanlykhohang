<?php

namespace App\Core;

class Response
{
    public static function setStausCode(int $code)
    {
        http_response_code($code);
    }

    public static function redirect($uri = '')
    {
        if (preg_match('~^(http|https)~is', $uri)) {
            echo $url = $uri;
        } else {
            $url = _WEB_ROOT . $uri;
        }
        header('Location: ' . $url);
        exit();
    }
}