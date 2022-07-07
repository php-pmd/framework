<?php

namespace PhpPmd\Framework;

class Route
{
    public static $routes = [];

    public static function addRoute($route, callable $callback)
    {
        static::$routes[$route] = $callback;
    }

    public static function has($route)
    {
        return isset(static::$routes[$route]);
    }

    public static function get($route)
    {
        return static::$routes[$route];
    }
}
