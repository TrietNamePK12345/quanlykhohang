<?php

namespace App\Core;

class Route
{
    public Request $request;
    public Response $response;
    protected static array $routes = [];

    /**
     * @param Request $request
     * @param Response $response
     */
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public static function get($path, $callback)
    {
        self::$routes['get'][$path] = $callback;
    }

    public static function post($path, $callback)
    {
        self::$routes['post'][$path] = $callback;
    }


    public static function resolve()
    {
        $path = Request::getPath();
        $method = Request::getMethod();
        $callback = self::$routes[$method][$path] ?? false;

        if ($callback === false) {
           Response::setStausCode(404);
           return self::view('errors/_404');
        }

        if (is_string($callback)) {
            return self::view($callback);
        }

        if (is_array($callback)) {  
           Application::$app->controller = new $callback[0]();
           $callback[0] = Application::$app->controller;
        }

        return call_user_func($callback, Request::class);
    }


    public static function view($view, $params = [])
    {
        $layoutContent = self::layoutContent();
        $viewContent = self::viewContent($view, $params);
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    protected static function layoutContent()
    {
        $layout = Controller::$layout;
        ob_start();
        require_once Application::$ROOT_DIR."/resources/views/layouts/$layout.php";
        return ob_get_clean();
    }

    protected static function viewContent($view, $params)
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }

        ob_start();
        require_once Application::$ROOT_DIR. "/resources/views/$view.php";
        return ob_get_clean();
    }
}