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
$routes->get('/', 'Home::index');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) 
{
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
$routes->get('jumbo', 'Paginas::index');
$routes->get('jumbo', 'Paginas::buscar');
$routes->get('personas', 'Formularios::index');
$routes->get('crear', 'Formularios::crear');
$routes->post('guardar', 'Formularios::guardar');
$routes->get('borrar/(:num)', 'Formularios::borrar/$1'); 
$routes->get('editar/(:num)', 'Formularios::editar/$1');
$routes->post('actualizar', 'Formularios::actualizar');
$routes->get('searching', 'Formularios::getshow');
$routes->get('home', 'Formularios::search');
$routes->get('ajax_crud', 'Ajax_crud::index'); 

