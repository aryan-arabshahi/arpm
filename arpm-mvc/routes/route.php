<?php 

require_once APP_ROOT . '/app/Router/Route.php';
require_once APP_ROOT . '/app/Router/RouteCollection.php';
require_once APP_ROOT . '/app/Controllers/BaseController.php';
require_once APP_ROOT . '/app/Controllers/PageController.php';

use App\Router\Route;
use App\Router\RouteCollection;
use App\Controllers\PageController;


$routes = new RouteCollection();

$routes->add('home', new Route('/', PageController::class, 'home'));

$routes->add('folder1', new Route('/folder1', PageController::class, 'folder1'));

$routes->add('folder2', new Route('/folder2', PageController::class, 'folder2'));
