<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'IndexController::index');
$routes->get('/dashboard', 'IndexController::dashboard');
$routes->get('/about', 'IndexController::about');
