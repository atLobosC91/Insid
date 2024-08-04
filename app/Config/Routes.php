<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

$routes->get('/', 'LoginController::index');
$routes->post('/login', 'LoginController::authenticate');
$routes->get('/logout', 'LoginController::logout');
$routes->get('/dashboard', 'DashboardController::index', ['filter' => 'auth']);

// Routes for UsuarioController
$routes->get('/usuarios', 'UsuarioController::index', ['filter' => 'auth']);
$routes->get('/usuarios/create', 'UsuarioController::create', ['filter' => 'auth']);
$routes->post('/usuarios/store', 'UsuarioController::store', ['filter' => 'auth']);
$routes->get('/usuarios/edit/(:num)', 'UsuarioController::edit/$1', ['filter' => 'auth']);
$routes->post('/usuarios/update/(:num)', 'UsuarioController::update/$1', ['filter' => 'auth']);
$routes->get('/usuarios/delete/(:num)', 'UsuarioController::delete/$1', ['filter' => 'auth']);

// Routes for SolicitudController
$routes->get('/solicitudes', 'SolicitudController::index', ['filter' => 'auth']);
$routes->get('/solicitudes/create', 'SolicitudController::create', ['filter' => 'auth']);
$routes->post('/solicitudes/store', 'SolicitudController::store', ['filter' => 'auth']);
$routes->get('/solicitudes/edit/(:num)', 'SolicitudController::edit/$1', ['filter' => 'auth']);
$routes->post('/solicitudes/update/(:num)', 'SolicitudController::update/$1', ['filter' => 'auth']);
$routes->get('/solicitudes/delete/(:num)', 'SolicitudController::delete/$1', ['filter' => 'auth']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to override the default routes or the built-in ones.
 * You can place those here.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
