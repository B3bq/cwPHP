<?php
namespace App;

class Router
{
    private array $routes;

    public function __construct(array $availableRoutes)
    {
        $this->routes = $availableRoutes;
    }

    public function match(Request $request): ?string
    {
        $path = $request->getPath();

        foreach ($this->routes as $route) {
            if ($route['path'] === $path) {
                return $route['page'];
            }
        }

        return 'homepage';
    }

    public function path(string $routeName): string
    {
        return $this->routes[$routeName]['page'] ?? '/';
    }
}