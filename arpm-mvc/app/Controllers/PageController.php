<?php 

namespace App\Controllers;

use App\Router\Route;
use Symfony\Component\Routing\RouteCollection;

/**
 * The PageController class.
 */
class PageController extends BaseController
{
    /**
     * The home page.
     * 
     * @param Route $route The route instance.
     * 
     * @return mixed
     */
    public function home(Route $route)
    {
        require_once APP_ROOT . '/views/view.php';
    }

    /**
     * The home page.
     * 
     * @param Route $route The route instance.
     * 
     * @return mixed
     */
    public function folder1(Route $route)
    {
        require_once APP_ROOT . '/views/view.php';
    }

    /**
     * The home page.
     * 
     * @param Route $route The route instance.
     * 
     * @return mixed
     */
    public function folder2(Route $route)
    {
        require_once APP_ROOT . '/views/view.php';
    }
}
