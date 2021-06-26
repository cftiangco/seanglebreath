<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'HomeController::index');
$routes->get('/packages', 'HomeController::packages');
$routes->get('/category/(:num)', 'HomeController::category/$1');
$routes->get('/package/(:num)', 'HomeController::package/$1');
$routes->get('/services', 'HomeController::services');
$routes->get('/whyus', 'HomeController::whyus');
$routes->get('/fundamentals', 'HomeController::fundamentals');
$routes->get('/freedive', 'HomeController::freedive');
$routes->get('/poolanddepth', 'HomeController::poolanddepth');
$routes->get('/about', 'HomeController::about');
$routes->get('/sb-hq1', 'HomeController::sbHq1');
$routes->get('/sb-hq2', 'HomeController::sbHq2');
$routes->get('/sb-hq3', 'HomeController::sbHq3');
$routes->get('/caheet-monte', 'HomeController::caheetMonte');

/* admin */
$routes->get('/admin', 'AdminController::index',['filter' => 'auth']);
$routes->get('/admin/listpackages', 'AdminController::listPackages',['filter' => 'auth']);
$routes->get('/admin/listpackages/(:num)', 'AdminController::basicPackages/$1',['filter' => 'auth']);
$routes->get('/admin/listpackages/new', 'AdminController::listPackagesNew',['filter' => 'auth']);
$routes->post('/admin/listpackages/new', 'AdminController::listPackagesStore',['filter' => 'auth']);
$routes->put('/admin/basicpackage/(:num)', 'AdminController::basicpackage/$1',['filter' => 'auth']);
$routes->put('/admin/basicpackage/(:num)/remove', 'AdminController::basicpackageImgRemove/$1',['filter' => 'auth']);
$routes->delete('/admin/basicpackage/(:num)', 'AdminController::basicpackageDelete/$1',['filter' => 'auth']);

/* categories */
$routes->get('/admin/categories', 'CategoryController::index',['filter' => 'auth']);
$routes->match(['get','post'],'/admin/categories/new', 'CategoryController::create',['filter' => 'auth']);
$routes->get('/admin/categories/(:num)', 'CategoryController::edit/$1',['filter' => 'auth']);
$routes->put('/admin/categories/(:num)', 'CategoryController::store/$1',['filter' => 'auth']);
$routes->delete('/admin/categories/(:num)/remove', 'CategoryController::removeImg/$1',['filter' => 'auth']);
$routes->delete('/admin/categories/(:num)', 'CategoryController::delete/$1',['filter' => 'auth']);

/* carousel */
$routes->get('/admin/carousel', 'CarouselController::index',['filter' => 'auth']);
$routes->get('/admin/carousel/new', 'CarouselController::create',['filter' => 'auth']);
$routes->post('/admin/carousel/new', 'CarouselController::store',['filter' => 'auth']);
$routes->get('/admin/carousel/(:num)', 'CarouselController::edit/$1',['filter' => 'auth']);
$routes->put('/admin/carousel/(:num)', 'CarouselController::update/$1',['filter' => 'auth']);
$routes->delete('/admin/carousel/(:num)', 'CarouselController::delete/$1',['filter' => 'auth']);

/* about */
$routes->get('/admin/about', 'AboutController::index',['filter' => 'auth']);
$routes->put('/admin/about/(:num)', 'AboutController::update/$1',['filter' => 'auth']);

/* testimonials */
$routes->get('/admin/testimonials', 'TestimonialController::index',['filter' => 'auth']);
$routes->get('/admin/testimonial/new', 'TestimonialController::create',['filter' => 'auth']);
$routes->post('/admin/testimonial/new', 'TestimonialController::store',['filter' => 'auth']);
$routes->delete('/admin/testimonial/(:num)', 'TestimonialController::delete/$1',['filter' => 'auth']);

/* accounts */
$routes->get('/admin/accounts', 'AccountController::index',['filter' => 'auth']);
$routes->get('/admin/account/new', 'AccountController::create',['filter' => 'auth']);
$routes->post('/admin/account/new', 'AccountController::store',['filter' => 'auth']);
$routes->get('/login', 'AccountController::login',['filter' => 'noauth']);
$routes->post('/login', 'AccountController::goLogin');
$routes->get('/logout', 'AccountController::logout',['filter' => 'auth']);

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
