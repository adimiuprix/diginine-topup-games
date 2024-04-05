<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('price-list', 'Home::priceList');
$routes->get('faqs', 'FaqsController::index');
$routes->get('contact', 'ContactController::index');
$routes->get('policy', 'Home::policy');
$routes->get('terms-and-condition', 'Home::terms');

$routes->post('callback', 'TripayController::callback');

$routes->get('register', 'Auth\Register::index');
$routes->post('save-user', 'Auth\Register::registUser');

$routes->get('login', 'Auth\Login::index');
$routes->post('check-user', 'Auth\Login::userAuthorization');
$routes->get('logout', 'Auth\Login::logout');

$routes->get('dashboard', 'UserServiceController::index');
$routes->get('dashboard/dashboard', function() {
    return redirect()->to('dashboard');
});
$routes->get('dashboard/profile', 'UserServiceController::profile');
$routes->post('change-profile', 'UserServiceController::profileChange');

$routes->post('user-deposit', 'UserServiceController::topupBalance');

$routes->post('withdraw', 'UserServiceController::withdraws');

$routes->get('order/(:segment)/(:segment)', 'Home::orderProduct/$1/$2');

$routes->post('confirm-order', 'OrderController::confirmInvoice');

$routes->get('invoice/(:any)', 'OrderController::purchase/$1');
$routes->post('process', 'OrderController::runPayment');

$routes->get('tracking', 'Home::trackInvoice');
$routes->post('tracking-invoice', 'Home::trackInv');

$routes->get('winrate', 'WinrateController::index');
$routes->post('check-winrate', 'WinrateController::checkWR');

$routes->get('admin/login', 'Admin\AuthController::index');
$routes->post('admin/admincheck', 'Admin\AuthController::validation');

$routes->get('admin/dashboard', 'Admin\DashboardController::dashboard');

$routes->get('admin/category', 'Admin\CategoryController::index');
$routes->get('admin/category/add', 'Admin\CategoryController::addNew');
$routes->post('admin/category/store', 'Admin\CategoryController::store');
$routes->get('admin/category/edit/(:num)', 'Admin\CategoryController::edit/$1');
$routes->post('admin/category/update/(:num)', 'Admin\CategoryController::update/$1');
$routes->get('admin/category/delete/(:num)', 'Admin\CategoryController::remove/$1');

$routes->get('admin/items', 'Admin\ItemsController::index');
$routes->get('admin/items/add', 'Admin\ItemsController::addNew');
$routes->post('admin/items/store', 'Admin\ItemsController::store');
$routes->get('admin/items/edit/(:num)', 'Admin\ItemsController::edit/$1');
$routes->post('admin/items/update/(:num)', 'Admin\ItemsController::update/$1');
$routes->get('admin/items/delete/(:num)', 'Admin\ItemsController::remove/$1');

$routes->get('admin/products', 'Admin\ProductController::index');
$routes->get('admin/products/add', 'Admin\ProductController::addNew');
$routes->post('admin/products/store', 'Admin\ProductController::store');
$routes->get('admin/products/edit/(:num)', 'Admin\ProductController::edit/$1');
$routes->post('admin/products/update/(:num)', 'Admin\ProductController::update/$1');
$routes->get('admin/products/delete/(:num)', 'Admin\ProductController::remove/$1');

$routes->get('admin/favourite', 'Admin\FavouriteController::index');
$routes->get('admin/favourite/add', 'Admin\FavouriteController::addNew');
$routes->post('admin/favourite/store', 'Admin\FavouriteController::store');
$routes->get('admin/favourite/edit/(:num)', 'Admin\FavouriteController::edit/$1');
$routes->post('admin/favourite/update/(:num)', 'Admin\FavouriteController::update/$1');
$routes->get('admin/favourite/delete/(:num)', 'Admin\FavouriteController::remove/$1');

$routes->get('admin/sliders', 'Admin\SliderController::index');
$routes->get('admin/sliders/add', 'Admin\SliderController::addNew');
$routes->post('admin/sliders/store', 'Admin\SliderController::store');
$routes->get('admin/sliders/edit/(:num)', 'Admin\SliderController::edit/$1');
$routes->post('admin/sliders/update/(:num)', 'Admin\SliderController::update/$1');
$routes->get('admin/sliders/delete/(:num)', 'Admin\SliderController::remove/$1');

$routes->get('admin/transactions', 'Admin\TransactionController::index');
$routes->get('admin/transactions/edit/(:num)', 'Admin\TransactionController::edit/$1');
$routes->post('admin/transactions/update/(:num)', 'Admin\TransactionController::update/$1');

$routes->get('admin/user-manager', 'Admin\MemberController::index');

$routes->get('admin/review-manager', 'Admin\ReviewController::index');
$routes->get('admin/review/add', 'Admin\ReviewController::addNew');
$routes->post('admin/review/store', 'Admin\ReviewController::store');
$routes->get('admin/review/edit/(:num)', 'Admin\ReviewController::edit/$1');
$routes->post('admin/review/update/(:num)', 'Admin\ReviewController::update/$1');
$routes->get('admin/review/delete/(:num)', 'Admin\ReviewController::remove/$1');

$routes->get('admin/apis', 'Admin\ApiKeyController::index');
$routes->post('admin/apis/apigames', 'Admin\ApiKeyController::apigamesupdate');
$routes->post('admin/apis/tripay', 'Admin\ApiKeyController::tripayupdate');