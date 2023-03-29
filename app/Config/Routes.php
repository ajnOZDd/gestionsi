<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home_controller');
$routes->setDefaultMethod('log');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home_controller::log');
$routes->get('/home', 'Home_accueil_controller::index');
$routes->post('/home/register', 'Home_controller_login::register');
$routes->post('/home/login', 'Home_controller_login::login');
$routes->get('/home/balance', 'Balance_Controller::index');
$routes->get('/home/devis', 'Devis_Controller::index');
$routes->get('/home/consultation', 'Consultation_Controller::index');
$routes->get('/home/journal', 'Journal_Controller::index');
$routes->post('/home/balance/value', 'Balance_Controller::index');
$routes->post('/home/devis/value', 'Devis_Controller::index');
$routes->post('/home/consultation/value', 'Consultation_Controller::index');
$routes->post('/home/journal/value', 'Journal_Controller::index');




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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
