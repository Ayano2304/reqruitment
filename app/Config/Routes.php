<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/staffjobs','Staff::index');
$routes->get('/form/(:segment)','Staff::detail/$1');
$routes->get('/admin','Admin::index');
$routes->get('/admin/addJobs','Admin::add');
$routes->get('/admin','Admin::index');
$routes->post('/admin/admin_insert','Admin::save');
$routes->get('staff/edit/(:num)','Admin::edit/$1');
$routes->put('/admin/staff/update/(:num)','Admin::update/$1');
$routes->get('staff/delete/(:num)', 'Admin::delete/$1');

$routes->get('/operatorjobs', 'Operator::index');
$routes->get('/admin/addJobsOP','Admin::addOp');
$routes->post('/admin/operator_insert', 'Admin::saveOp');
$routes->get('operator/edit/(:num)', 'Admin::editOp/$1');
$routes->put('/admin/operator/update/(:num)', 'Admin::updateOp/$1');
$routes->get('operator/delete/(:num)', 'Admin::deleteOp/$1');

$routes->get('/formoperator/(:segment)', 'Operator::detail/$1');

$routes->post('add_employe','Staff::hire');

$routes->get('/admin_login','Admin::login');
$routes->post('/Auth/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

$routes ->get('operator_staff/detail/(:num)','Staff::detail/$1');
