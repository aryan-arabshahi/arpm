<?php 

namespace App\Router;

/**
 * The Route class.
 */
class Route
{
    /**
     * The route name.
     * 
     * @var string
     */
    private string $name;

    /**
     * The path.
     * 
     * @var string
     */
    private string $path;

    /**
     * The controller class.
     * 
     * @var string
     */
    private string $controller;

    /**
     * The method.
     * 
     * @var string
     */
    private string $method;

    /**
     * Adding a route to the route list.
     * 
     * @param string $name       The route name.
     * @param string $path       The path.
     * @param string $controller The controller.
     * @param string $method     The method.
     * 
     * @return void
     */
    function __construct(string $path, string $controller, string $method)
    {
        $this->path       = $path;
        $this->controller = $controller;
        $this->method     = $method;
    }

    /**
     * The path getter.
     * 
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * The controller getter.
     * 
     * @return string
     */
    public function getController(): string
    {
        return $this->controller;
    }

    /**
     * The method getter.
     * 
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * The name getter.
     * 
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name setter.
     * 
     * @return void
     */
    public function setName(string $value): void
    {
        $this->name = $value;
    }
}
