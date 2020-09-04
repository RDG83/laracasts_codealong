<?php

class Router
{
    protected $routes = [
        "GET" => [],
        "POST" => []
    ];

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    public function get($uri, $controller): void
    {
        $this->routes["GET"][$uri] = $controller;
    }

    public function post($uri, $controller): void
    {
        $this->routes["POST"][$uri] = $controller;
    }

    public function direct($uri, $method)
    {
        if (array_key_exists($uri, $this->routes[$method])) {

            return $this->callAction(
                ...explode("@", $this->routes[$method][$uri])
            );
        }

        throw new Exception("The requested URI does not exist!");
    }

    protected function callAction($controller, $action)
    {
        $controller = new $controller;

        if (!method_exists($controller, $action)) {
            throw new Exception(
                "This {$action} is not found on this controller {$controller}"
            );
        }

        return $controller->$action();
    }
}
