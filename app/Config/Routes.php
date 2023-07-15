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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Login::');
$routes->get('dash', 'Prak::dash');
$routes->get('tugas1', 'Prak::tugas1');
$routes->get('tugas3', 'Prak::tugas3');
$routes->get('tugas4', 'Prak::tugas4');
$routes->get('tugas5', 'Prak::tugas5');
$routes->get('tugas6', 'Prak::tugas6');
$routes->get('absen', 'Prak::absen');
$routes->get('profile', 'Prak::profile');
$routes->get('matWeb', 'Prak::matWeb');
$routes->get('matSql', 'Prak::matSql');
$routes->get('dosen', 'Prak::dosen');
$routes->get('sqlDosen', 'Prak::sqlDosen');
$routes->get('tugas2', 'Prak::tugas2');
$routes->post('upload1', 'Prak::upload1');
$routes->post('upload2', 'Prak::upload2');
$routes->get('editProfile', 'Prak::editProfile');

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
