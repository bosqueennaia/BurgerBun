<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get('/', 'Main::index');
$routes->get('/home/new', 'Home::new');
$routes->post('/home', 'Home::create');
$routes->get('/about', 'About::about');
$routes->get('/menu', 'Menu::menu');
$routes->get('/contact', 'Contact::contact');
$routes->post('/contact', 'Contact::saveContact'); // Untuk form submission
$routes->get('/success', 'Contact::success');

$routes->group('', ['filter' => 'authMiddleware'], function($routes) {
    $routes->resource('home');
});

$routes->resource('register');
$routes->resource('login');
$routes->resource('logout');