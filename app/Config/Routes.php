<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('our_courses', 'Home::our_courses');
$routes->get('contact_us', 'Home::contact_us');
$routes->get('register', 'Home::register');

$routes->get('login', 'Home::login');
$routes->get('Admindasboard', 'AdminController::Admindasboard');

$routes->post('contactus', 'Home::contactus');

$routes->post('userregister', 'Home::userregister');
$routes->post('userlogin', 'Home::userlogin');
$routes->post('submitEnquiry', 'Home::submitEnquiry');

$routes->get('shoolstudent', 'Home::shoolstudent');
$routes->get('abroadstudent', 'Home::abroadstudent');
$routes->get('career', 'Home::career');

