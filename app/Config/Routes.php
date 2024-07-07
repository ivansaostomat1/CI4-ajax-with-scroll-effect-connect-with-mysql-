<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
$routes->get('/catalog', 'Page::catalog');
$routes->get('/support', 'Page::support');
$routes->get('/admin', 'MobilController::list');
$routes->get('/admin/create', 'MobilController::create');
$routes->post('/admin/store', 'MobilController::store');
$routes->get('/admin/edit/(:segment)', 'MobilController::edit/$1');
$routes->post('/admin/update/(:segment)', 'MobilController::update/$1');
$routes->get('/admin/delete/(:segment)', 'MobilController::delete/$1');
$routes->get('mobil/getAllMobil', 'MobilController::getAllMobil');
$routes->delete('mobil/delete/(:num)', 'MobilController::delete/$1');
$routes->get('mobil/edit/(:num)', 'MobilController::edit/$1');
$routes->post('mobil/update/(:num)', 'MobilController::update/$1');
$routes->post('mobil/store', 'MobilController::store');

