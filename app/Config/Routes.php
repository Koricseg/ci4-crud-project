<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Default route
$routes->get('/', 'Home::index');

// --- YOUR STUDENT CRUD ROUTES ---
$routes->get('students', 'StudentController::index');
$routes->get('students/create', 'StudentController::create');
$routes->post('students/store', 'StudentController::store');

$routes->get('students/edit/(:num)', 'StudentController::edit/$1');
$routes->post('students/update/(:num)', 'StudentController::update/$1');

$routes->get('students/delete/(:num)', 'StudentController::delete/$1');