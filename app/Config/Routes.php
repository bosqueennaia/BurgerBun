<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/menu', 'Home::menu');
$routes->get('/contact', 'Home::contact');
$routes->post('/contact', 'Home::saveContact');
$routes->get('success', 'Home::success');
$routes->resource('register');
$routes->resource('login');
$routes->group('', ['filter' => 'authMiddleware'], function($routes) {
    $routes->get('/', 'Home::index');
});