<?php 

namespace App\Router;

use App\Router\RouteCollection;

class Router
{
    public function __invoke(RouteCollection $routes)
    {
        $candidateRoute = $this->findRoute($routes, $_SERVER['REQUEST_URI']);

        if ( !$candidateRoute )
        {
            $this->abort('404 Not Found.');
        }

        $className = $candidateRoute->getController();
        $methodName = $candidateRoute->getMethod();

        // NOTE: If there is no autoload, We can require_one the controller classe here dynamically.
        // But for now we add them manually in the route.php

        $classInstance = new $className();

        if (!method_exists($classInstance, $methodName))
        {
            $this->abort('The specified method does not exist.');
        }

        // NOTE: We can extend it and add route params here.
        $params = [$candidateRoute];

        return call_user_func_array(array($classInstance, $methodName), $params);
    }

    /**
     * Find route.
     * 
     * @param RouteCollection $routes The routes.
     * @param string          $path   The path.
     * 
     * @return Route|null
     */
    private function findRoute(RouteCollection $routes, string $path): Route|null
    {
        foreach ($routes->getRoutes() as $routeName => $route)
        {
            if ( trim($path) === $route->getPath() )
            {
                return $route;
            }
        }

        return null;
    }

    /**
     * Abort the request.
     * 
     * @return string $message The message.
     * 
     * @return mixed
     */
    private function abort(string $message)
    {
        echo $message;
        die();
    }
}

// Invoke teh router.
$router = new Router();
$router($routes);
