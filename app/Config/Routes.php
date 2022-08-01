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
// $routes->get('/profile', 'Home::profile');
// $routes->get('/empprofile', 'Home::empprofile');



$routes->match(['get', 'post'], 'login', 'UserController::login', ["filter" => "noauth"]);
// Admin routes
$routes->group("admin", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "AdminController::index");
    $routes->get('empprofile', 'EmpProfileController::index');
    $routes->post('emp_profile_form/insert', 'EmpProfileController::insert');
    $routes->post('emp_profile_form/update/(:num)', 'EmpProfileController::update/$1');
    $routes->get('profile', 'ProfileController::index');
});
// Employee routes
$routes->group("employee", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "EmployeeController::index");
});
$routes->get('logout', 'UserController::logout');

////////////////////////////////////////////////////////////////
// $routes->get('/', 'Home::index');
// $routes->get('/profile', 'ProfileController::index');
// $routes->get('/cusprofile', 'Home::cusprofile');
// $routes->get('/partprofile', 'Home::partprofile');
// $routes->get('/master', 'Home::master');
// $routes->get('/masterproduct', 'Home::masterproduct');
// $routes->get('/mastercorrection', 'Home::mastercorrection');
// $routes->get('/mastersize', 'Home::mastersize');
// $routes->get('/mastermetalcolor', 'Home::mastermetalcolor');
// $routes->get('/mastermetalname', 'Home::mastermetalname');
// $routes->get('/masterstonegroup', 'Home::masterstonegroup');
// $routes->get('/masterstonename', 'Home::masterstonename');
// $routes->get('/masterstoneshape', 'Home::masterstoneshape');
// $routes->get('/mastergemcolor', 'Home::mastergemcolor');
// $routes->get('/masterclarity', 'Home::masterclarity');
// $routes->get('/mastercutting', 'Home::mastercutting');
// $routes->get('/masterquality', 'Home::masterquality');
// $routes->get('/mastergemsize', 'Home::mastergemsize');
// $routes->get('/productstone', 'Home::productstone');
// $routes->get('/productjewelry', 'Home::productjewelry');
// $routes->get('/saleorder/saleorderstone', 'Home::saleorderstone');
// $routes->get('/saleorder/saleorderjewelry', 'Home::saleorderjewelry');
// $routes->get('/purchase/purchasestone', 'Home::purchasestone');
// $routes->get('/purchase/purchasejewelry', 'Home::purchasejewelry');
// $routes->get('/memoin/memoinstone', 'Home::memoinstone');
// $routes->get('/memoin/memoinjewelry', 'Home::memoinjewelry');
// $routes->get('/memoreturn/memoreturnstone', 'Home::memoreturnstone');
// $routes->get('/memoreturn/memoreturnjewelry', 'Home::memoreturnjewelry');
// $routes->get('/inventory/purchasejewelry', 'Home::inventorypurchasejewelry');
// $routes->get('/inventory/purchasestone', 'Home::inventorypurchasestone');
// $routes->get('/inventory/serviceorder', 'Home::inventoryserviceorder');
// $routes->get('/inventory/servicerepair', 'Home::inventoryservicerepair');
// $routes->get('/inventory/servicemounting', 'Home::inventoryservicemounting');

// $routes->get('/saving/savingstone', 'Home::savingstone');
// $routes->get('/saving/savingjewelry', 'Home::savingjewelry');
// $routes->get('/saving/savingmounting', 'Home::savingmounting');
// $routes->get('/memo/memojewelry', 'Home::memojewelry');
// $routes->get('/memo/memostone', 'Home::memostone');
// $routes->post('/test/test/(:any)/(:num)', 'CompanyController::insertcompany/$1/$2');

$routes->get('/empprofile', 'EmpProfileController::index');
$routes->post('/emp_profile_form/insert', 'EmpProfileController::insert');
$routes->post('/emp_profile_form/update/(:num)', 'EmpProfileController::update/$1');

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
