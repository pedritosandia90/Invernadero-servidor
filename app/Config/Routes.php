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

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// vista con el formulario
$routes->get('/', 'Home::index');



$routes->post('auth/login', 'AuthController::login');
$routes->get('/auth/logout', 'AuthController::logout');

$routes->get('/monitoreos', 'monitoreoController::index');
$routes->get('/agricultores', 'agricultorController::index');
$routes->get('/parametros', 'parametroController::index');
$routes->get('/planta', 'plantaController::index');
$routes->get('/parcela', 'parcelaController::index');
//crud monitoreo
$routes->get('/reportes', 'Home::reportes');
$routes->get('/reportes/MonitorioPorDia', 'Home::MonitorioPorDia');
$routes->get('/reportes/ListadoParcelas', 'Home::ListadoParcelas');
$routes->get('/reportes/ListadoParametros', 'Home::ListadoParametros');

//crud monitoreo
$routes->get('/monitoreos', 'monitoreoController::index');
$routes->get('/monitoreos/crear', 'monitoreoController::crear');
$routes->post('/monitoreos/registrar', 'monitoreoController::registrar');
$routes->get('/monitoreos/editar/(:num)', 'monitoreoController::editar/$1');
$routes->post('/monitoreos/actualizar/(:num)', 'monitoreoController::actualizar/$1');
$routes->get('/monitoreos/eliminar/(:num)', 'monitoreoController::eliminar/$1');
//crud Detalle monitoreo
$routes->get('/detalle', 'monitoreodetController::index');
$routes->get('/detalle/crear/(:num)', 'monitoreodetController::crear/$1');
$routes->post('/detalle/registrar/(:num)', 'monitoreodetController::registrar/$1');
$routes->get('/detalle/editar/(:num)', 'monitoreodetController::editar/$1');
$routes->post('/detalle/actualizar/(:num)', 'monitoreodetController::actualizar/$1');
$routes->get('/detalle/eliminar/(:num)', 'monitoreodetController::eliminar/$1');
//crud agricultor
$routes->get('/agricultores', 'agricultorController::index');
$routes->get('/agricultores/crear', 'agricultorController::crear');
$routes->post('/agricultores/registrar', 'agricultorController::registrar');
$routes->get('/agricultores/editar/(:num)', 'agricultorController::editar/$1');
$routes->post('/agricultores/actualizar/(:num)', 'agricultorController::actualizar/$1');
$routes->get('/agricultores/eliminar/(:num)', 'agricultorController::eliminar/$1');
//crud parametros
$routes->get('/parametros', 'parametroController::index');
$routes->get('/parametros/crear', 'parametroController::crear');
$routes->post('/parametros/registrar', 'parametroController::registrar');
$routes->get('/parametros/editar/(:num)', 'parametroController::editar/$1');
$routes->post('/parametros/actualizar/(:num)', 'parametroController::actualizar/$1');
$routes->get('/parametros/eliminar/(:num)', 'parametroController::eliminar/$1');
//crud plantas
$routes->get('/planta', 'plantaController::index');
$routes->get('/planta/crear', 'plantaController::crear');
$routes->post('/planta/registrar', 'plantaController::registrar');
$routes->get('/planta/editar/(:num)', 'plantaController::editar/$1');
$routes->post('/planta/actualizar/(:num)', 'plantaController::actualizar/$1');
$routes->get('/planta/eliminar/(:num)', 'plantaController::eliminar/$1');
//crud parcelas
$routes->get('/parcela', 'parcelaController::index');
$routes->get('/parcela/crear', 'parcelaController::crear');
$routes->post('/parcela/registrar', 'parcelaController::registrar');
$routes->get('/parcela/editar/(:num)', 'parcelaController::editar/$1');
$routes->post('/parcela/actualizar/(:num)', 'parcelaController::actualizar/$1');
$routes->get('/parcela/eliminar/(:num)', 'parcelaController::eliminar/$1');
// lógica para el login
$routes->post('/login', 'AuthController::login');
$routes->get('/auth/logout', 'AuthController::logout');
//$routes->post('puestos/readEmpleados', 'ApiController::readEmpleados');
$routes->get('(:any)', 'Home::view/$1');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
