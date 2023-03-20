<?php 

namespace App\Router;

class RouteCollection
{
    /**
     * The route list.
     * 
     * @var array
     */
    private array $routes;

    /**
     * Adding a route to the route list.
     * 
     * @param string $name  The name name.
     * @param Route  $route The route objject.
     * 
     * @return void
     */
    public function add(string $name, Route $route): void
    {
        $route->setName($name);

        $this->routes[$name] = $route;
    }

    /**
     * Get routes.
     * 
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }
}
