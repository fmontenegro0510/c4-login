<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->match(['get', 'post'], 'register', 'User::register', ['filter' => 'noauth']);
$routes->match(['get', 'post'], 'login', 'User::login', ['filter' => 'noauth']);
$routes->get('dashboard', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('profile', 'User::profile', ['filter' => 'auth']);
$routes->get('logout', 'User::logout');
