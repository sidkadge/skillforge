<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('typrography', 'Home::typrography');
$routes->get('contact_us', 'Home::contact_us');
$routes->get('register', 'Home::register');

$routes->get('login', 'Home::login');
$routes->get('Admindasboard', 'AdminController::Admindasboard');

$routes->get('studentdashboard', 'AdminController::studentdashboard');
$routes->get('uploadmedia', 'AdminController::uplodefiles');
$routes->post('upload_img', 'AdminController::upload_img');
$routes->post('upload_video', 'AdminController::upload_video');
$routes->post('upload_doc', 'AdminController::upload_doc');

$routes->get('facultydashboard', 'AdminController::facultydashboard');

$routes->post('contactus', 'Home::contactus');

$routes->post('userregister', 'Home::userregister');
$routes->post('userlogin', 'Home::userlogin');
$routes->post('submitEnquiry', 'Home::submitEnquiry');



