<?php

namespace App\Core;

class Controller
{
    public static string $layout = 'client_layout';
    public static function setLayout($layout)
    {
        self::$layout = $layout;
    }
    public static function render($view, $params = [])
    {
        $content = Route::view($view, $params);
        TemplateEngine::run($content, $params);
    }
}