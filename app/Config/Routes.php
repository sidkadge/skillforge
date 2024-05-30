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
$routes->get('add_abroadclass', 'AdminController::addAbroadclass');
$routes->post('abrordclassname','AdminController::abrordclassname');
$routes->get('abroadclasslist', 'AdminController::abroadclasslist');
$routes->get('setabrordclassname', 'AdminController::setabrordclassname');
$routes->post('setabrordclassname', 'AdminController::setabrordclassname');
$routes->get('delete_compan/(:any)/(:any)', 'AdminController::delete_compan/$1/$1');
$routes->post('delete_compan', 'AdminController::delete');



$routes->get('add_schoolstudentclass', 'AdminController::add_schoolstudentclass');
$routes->post('setschoolclassname', 'AdminController::setschoolclassname');
$routes->get('schoolclasslist', 'AdminController::schoolclasslist');
$routes->post('add_abroadclass/(:any)', 'AdminController::addAbroadclass/$1');
$routes->get('add_schoolstudentclass/(:any)', 'AdminController::add_schoolstudentclass/$1');
$routes->post('deletefromschollclass', 'AdminController::deletefromschollclass');

$routes->get('addfacultyskills', 'AdminController::addfacultyskills');
$routes->post('setfacultyskills', 'AdminController::setfacultyskills');
$routes->get('facultyskilllist', 'AdminController::facultyskilllist');
$routes->get('addfacultyskills/(:any)', 'AdminController::addfacultyskills/$1');
$routes->post('deletefacultyskills', 'AdminController::deletefacultyskills');


$routes->post('abrordclassname/(:any)', 'AdminController::addAbroadclass/$1');

$routes->post('add_abroadclass/(:any)', 'AdminController::addAbroadclass/$1');

$routes->get('add_abroadclass/(:any)', 'AdminController::addAbroadclass/$1');

$routes->get('studentdashboard', 'AdminController::studentdashboard');
$routes->get('uploadmedia', 'AdminController::uplodefiles');
$routes->post('upload_img', 'AdminController::upload_img');
$routes->post('upload_video', 'AdminController::upload_video');
$routes->post('upload_doc', 'AdminController::upload_doc');

$routes->get('Facultydashboard', 'AdminController::Facultydashboard');
$routes->get('Faculty_uploadmedia', 'AdminController::Faculty_uploadmedia');
$routes->post('tbl_upload_image', 'AdminController::tbl_upload_image');
$routes->post('tbl_upload_video', 'AdminController::tbl_upload_video');
$routes->post('tbl_upload_doc', 'AdminController::tbl_upload_doc');
$routes->get('Faculty_videos', 'AdminController::Faculty_videos');
$routes->get('Facultyimages', 'AdminController::Facultyimages');
$routes->get('Facultydoc', 'AdminController::Facultydoc');


$routes->post('contactus', 'Home::contactus');

$routes->post('userregister', 'Home::userregister');
$routes->post('userlogin', 'Home::userlogin');
$routes->post('submitEnquiry', 'Home::submitEnquiry');


$routes->get('studentprofile', 'AdminController::studentprofile');
$routes->get('facultyprofile', 'AdminController::facultyprofile');
$routes->get('facultyuplodedmedia', 'AdminController::facultyuplodedmedia');
$routes->get('studentuplodedmedia', 'AdminController::studentuplodedmedia');


$routes->get('shoolstudent', 'Home::shoolstudent');
$routes->get('abroadstudent', 'Home::abroadstudent');


$routes->get('career', 'AdminController::showCareerForm');
$routes->post('career', 'AdminController::saveCareerForm');

