<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');
$routes->get('/about', 'About::about');
$routes->get('/menu', 'Menu::menu');
$routes->get('/contact', 'Contact::contact');
$routes->post('contact', 'Contact::saveContact'); // Untuk form submission
$routes->get('success', 'Contact::success');

$routes->resource('register');
$routes->resource('login');
$routes->group('', ['filter' => 'authMiddleware'], function($routes) {
    $routes->get('home', 'Home::index'); // Mengarahkan ke Home::index setelah login berhasil
});