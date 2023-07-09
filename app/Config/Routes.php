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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
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
$routes->get('/', 'Home::index');
$routes->get('/Products-category', 'Home::index');
$routes->get('/One-Product-In-Genre', 'Home::index');
$routes->get('/Search','Home::searchProductWithtJs');
$routes->get('/product-details','Home::makeProductView');
$routes->get('/Heart', 'Home::updateHeartForProduct');
$routes->post('/Login-traitement', 'Home::login');
$routes->post('/SignUp-traitement', 'Home::signUp');
$routes->get('/Craftsmen-List', 'Home::craftsmenList');
$routes->get('/Log-Out', 'Home::logOut');

$routes->get('/Login', 'Href::login');
$routes->get('/SignUp', 'Href::signUp');

//SERVER-SIDE
$routes->get('/Dashboard','Home::data');
$routes->get('/State', 'Back::state');
$routes->get('/Server-dashboard', 'Back::dashboard');
$routes->get('/Server-dashboard-other', 'Back::other');
$routes->get('/produits-List', 'Back::productsList');
$routes->get('/Server-products-category', 'Back::productsList');
$routes->get('/Search','Back::searchProductWithtJs');
$routes->get('/Server-home', 'Back::productsList');
$routes->get('/product-modify', 'Back::productModify');

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
