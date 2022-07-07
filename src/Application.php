<?php

namespace PhpPmd\Framework;

class Application
{
    public static function run()
    {
        $request = new Request();
        $uri = $request->uri();
        $routeString = $uri[0];
        if (Route::has($routeString)) {
            Route::get($routeString)($request);
        } else {
            echo "not found\n";
        }
    }
}
