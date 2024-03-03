<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('order/(:segment)/(:segment)', 'Home::orderProduct/$1/$2');

$routes->post('confirm-order', 'Home::confirmInvoice');

$routes->get('invoice/(:any)', 'Home::purchase/$1');
$routes->get('process', 'Home::runPayment');

$routes->post('callback', 'Home::callback');