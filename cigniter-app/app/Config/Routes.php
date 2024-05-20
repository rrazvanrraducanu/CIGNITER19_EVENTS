<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->get('/', 'FlowerController::index');
$routes->get('/add', 'FlowerController::add');
$routes->get('/edit', 'FlowerController::edit');
$routes->get('/delete', 'FlowerController::delete');