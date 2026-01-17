<?php
class Router
{
    public static $routes = [];
    public function get($path, $controller)
    {
        return self::$routes[$path] = $controller;
    }
    public function dispatcher()
    {
        $page = $_GET['page'];
        if (!isset(self::$routes[$page])) {
            require_once "../Views/error/404.php";
        }
        $controller = self::$routes[$page];
        require($controller);
    }
}
