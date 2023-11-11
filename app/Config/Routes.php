<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('admin',['filter' => 'AuthGuard'], function ($routes) {
    $routes->get('/', 'AdminController::index');
    $routes->get('create', 'AdminController::create');
    $routes->post('store', 'AdminController::store');
    $routes->get('edit/(:num)', 'AdminController::edit/$1');
    $routes->post('update/(:num)', 'AdminController::update/$1');
    $routes->get('delete/(:num)', 'AdminController::delete/$1');
});

$routes->group('pegawai', ['filter' => 'AuthGuard'], function ($routes) {
    $routes->get('/', 'PegawaiController::index');
    $routes->get('create', 'PegawaiController::create');
    $routes->post('store', 'PegawaiController::store');
    $routes->get('edit/(:num)', 'PegawaiController::edit/$1');
    $routes->post('update/(:num)', 'PegawaiController::update/$1');
    $routes->get('delete/(:num)', 'PegawaiController::delete/$1');
});

$routes->group('cuti', ['filter' => 'AuthGuard'], function ($routes) {
    $routes->get('/', 'CutiController::index');
    $routes->get('create', 'CutiController::create');
    $routes->post('store', 'CutiController::store');
    $routes->get('edit/(:num)', 'CutiController::edit/$1');
    $routes->post('update/(:num)', 'CutiController::update/$1');
    $routes->get('delete/(:num)', 'CutiController::delete/$1');
});

$routes->get('/login', 'LoginController::index');
$routes->get('/logout', 'LoginController::logout');
$routes->match(['post'], 'LoginController/loginAuth', 'LoginController::loginAuth');





