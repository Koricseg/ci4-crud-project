<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/products', 'Product::index');
$routes->get('/products/create', 'Product::create');
$routes->post('/products/store', 'Product::store');
$routes->get('/products/edit/(:num)', 'Product::edit/$1');
$routes->post('/products/update/(:num)', 'Product::update/$1');
$routes->get('/products/delete/(:num)', 'Product::delete/$1');
$routes->resource('api/products', ['controller' => 'Api\ProductApi']);

