<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/', 'Home::index');

$routes->get('/servicios', 'ServiceController::index', ['as' => 'services.index']);
$routes->get('/servicios/(:segment)', 'ServiceController::detail/$1', ['as' => 'services.detail']);
$routes->get('/proyectos', 'ProjectsController::index', ['as' => 'projects.index']);
$routes->get('/proyectos/(:segment)', 'ProjectsController::detail/$1', ['as' => 'projects.detail']);
$routes->get('/media/project-image/(:segment)', 'ProjectMediaController::image/$1', ['as' => 'projects.media.image']);
