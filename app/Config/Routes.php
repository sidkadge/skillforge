<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('typrography', 'Home::typrography');
$routes->get('contact_us', 'Home::contact_us');
