<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('price-list', 'Home::priceList');
$routes->get('faqs', 'FaqsController::index');
$routes->get('contact', 'ContactController::index');

$routes->get('register', 'Auth\Register::index');
$routes->post('save-user', 'Auth\Register::registUser');

$routes->get('login', 'Auth\Login::index');
$routes->post('check-user', 'Auth\Login::userAuthorization');

$routes->get('dashboard', 'UserServiceController::index');

$routes->get('order/(:segment)/(:segment)', 'Home::orderProduct/$1/$2');

$routes->post('confirm-order', 'Home::confirmInvoice');

$routes->get('invoice/(:any)', 'Home::purchase/$1');
$routes->post('process', 'Home::runPayment');

$routes->post('callback', 'Home::callback');

$routes->get('tracking', 'Home::trackInvoice');
$routes->post('tracking-invoice', 'Home::trackInv');

$routes->get('winrate', 'WinrateController::index');
$routes->post('check-winrate', 'WinrateController::checkWR');

$routes->get('admin/login', 'Admin\AuthController::index');
$routes->post('admin/admincheck', 'Admin\AuthController::validation');

$routes->get('admin/dashboard', 'Admin\AdminController::dashboard');