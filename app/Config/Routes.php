<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('order/(:segment)/(:segment)', 'Home::orderProduct/$1/$2');

$routes->post('confirm-order', 'Home::confirmInvoice');

$routes->get('invoice/(:any)', 'Home::purchase/$1');
$routes->post('process', 'Home::runPayment');

$routes->post('callback', 'Home::callback');

// $routes->get('form', 'TripayController::index');

// $routes->post('running', 'TripayController::run');
// $routes->post('zero', 'TripayController::zerodev');
// $routes->post('hexagek', 'TripayController::hexagek');