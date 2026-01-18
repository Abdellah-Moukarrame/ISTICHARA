<?php
class Router
{
    public static $routes = [];
    public static function get($path, $controller)
    {
        return self::$routes[$path] = $controller;
    }
    public static function dispatcher()
    {
        $page = $_GET['page']??'';
        if (!array_key_exists($page,self::$routes)) {
            require_once "./View/error/404.php";
        }
        $controller = self::$routes[$page];
        require($controller);
    }
}
