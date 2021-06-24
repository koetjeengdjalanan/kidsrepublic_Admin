<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override(function () {
	echo view('errors/html/error_404.php');
});
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->group('/admin', ['filter' => 'role:admin'], function ($routes) {
	$routes->get('/', 'Admin::index');
	$routes->get('index', 'Admin::index');
});
$routes->group('/finance', ['filter' => 'role:finance'], function ($routes) {
	$routes->get('/', 'Finance::index');
	$routes->get('index', 'Finance::index');
});
$routes->group('/admission', ['filter' => 'role:admission'], function ($routes) {
	$routes->get('/', 'Admission::index');
	$routes->get('index', 'Admission::index');
});
$routes->group('/executiveteacher', ['filter' => 'role:executiveteacher'], function ($routes) {
	$routes->get('/', 'Executiveteacher::index');
	$routes->get('index', 'Executiveteacher::index');
	$routes->group('/teacher', ['filter' => 'role:executiveteacher'], function ($routes) {
		$routes->get('principal', 'Teacher::principal');
		$routes->get('teacher', 'Teacher::index');
	});
});
$routes->group('/teacher', ['filter' => 'role:teacher'], function ($routes) {
	$routes->get('/', 'Teacher::index');
});

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
