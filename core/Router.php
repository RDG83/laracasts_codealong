<?php

class Router
{
    protected $routes = [];

    public function define($routes): void
    {
        $this->routes = $routes;
    }

    public function direct($uri): string
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception("The requested URI does not exist!");
    }
}
