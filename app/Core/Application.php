<?php

namespace App\Core;

class Application
{
    public static string $ROOT_DIR;
    public Route $router;
    public Request $request;
    public Response $response;
    public Database $database;
    public static Application $app;
    public Controller $controller;
    public TemplateEngine $templateEngine;
    public Session $session;


    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->templateEngine = new TemplateEngine();
        $this->router = new Route($this->request, $this->response);
        $this->database = new Database();
        $this->session = new Session();

    }

    public function getController(): Controller
    {
        return $this->controller;
    }

    public function setController(Controller $controller): void
    {
        $this->controller = $controller;
    }

    public static function run()
    {
        echo Route::resolve();
    }


}