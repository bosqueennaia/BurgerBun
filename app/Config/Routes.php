<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::about');
$routes->get('menu', 'Menu::index');
$routes->get('/contact', 'Contact::contact');
$routes->post('/contact', 'Contact::saveContact'); // Untuk form submission
$routes->get('/success', 'Contact::success');


$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
    $routes->get('menu', 'Menu::index');
    $routes->get('menu/edit/(:num)', 'Menu::edit/$1');
    $routes->post('menu/update/(:num)', 'Menu::update/$1');
    $routes->get('menu/new', 'Menu::new');
    $routes->post('menu/create', 'Menu::create');
    $routes->get('menu/delete/(:num)', 'Menu::delete/$1');

    $routes->get('employee', 'Employee::index');
    $routes->get('employee/new', 'Employee::new');
    $routes->post('employee/create', 'Employee::create');
    $routes->get('employee/edit/(:num)', 'Employee::edit/$1');
    $routes->post('employee/update/(:num)', 'Employee::update/$1');
    $routes->get('employee/delete/(:num)', 'Employee::delete/$1');
});




$routes->resource('register');
$routes->resource('login');
$routes->resource('logout');
