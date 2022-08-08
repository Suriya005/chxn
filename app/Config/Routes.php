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
$routes->get('/profile', 'Home::profile');
$routes->get('/empprofile', 'Home::empprofile');



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

// $routes->get('/', 'Home::index');
 $routes->get('/profile', 'ProfileController::index');
//$routes->get('/cusprofile', 'Home::cusprofile');
//$routes->get('/partprofile', 'Home::partprofile');

$routes->get('/', 'Home::index');
$routes->get('/profile', 'ProfileController::index');
$routes->get('/cusprofile', 'Home::cusprofile');
$routes->get('/partprofile', 'Home::partprofile');
$routes->get('/master', 'Home::master');


// itemproducttype
$routes->post('/master/itemproducttype/insert', 'MasterController::insert_itemProductType');
$routes->get('/master/itemproducttype/get', 'MasterController::get_itemProductType');
$routes->post('/master/itemproducttype/edit/(:num)', 'MasterController::edit_itemProductType/$1');
$routes->post('/master/itemproducttype/delete/(:num)', 'MasterController::delete_itemProductType/$1');
// itemcollection
$routes->post('/master/itemcollection/insert', 'MasterController::insert_itemCollection');
$routes->get('/master/itemcollection/get', 'MasterController::get_itemCollection');
$routes->post('/master/itemcollection/edit/(:num)', 'MasterController::edit_itemCollection/$1');
$routes->post('/master/itemcollection/delete/(:num)', 'MasterController::delete_itemCollection/$1');
// itemproductsize clear
$routes->post('/master/itemproductsize/insert', 'MasterController::insert_itemProductSize');
$routes->get('/master/itemproductsize/get', 'MasterController::get_itemProductSize');
$routes->post('/master/itemproductsize/edit/(:num)', 'MasterController::edit_itemProductSize/$1');
$routes->post('/master/itemproductsize/delete/(:num)', 'MasterController::delete_itemProductSize/$1');

// metal_color
$routes->post('/master/metal_color/insert', 'MasterController::insert_metal_color');
$routes->get('/master/metal_color/get', 'MasterController::get_metal_color');
$routes->post('/master/metal_color/edit/(:num)', 'MasterController::edit_metal_color/$1');
$routes->post('/master/metal_color/delete/(:num)', 'MasterController::delete_metal_color/$1');

// metal_name
$routes->post('/master/metal_name/insert', 'MasterController::insert_metal_name');
$routes->get('/master/metal_name/get', 'MasterController::get_metal_name');
$routes->post('/master/metal_name/edit/(:num)', 'MasterController::edit_metal_name/$1');
$routes->post('/master/metal_name/delete/(:num)', 'MasterController::delete_metal_name/$1');

// gem_group
$routes->post('/master/gem_group/insert', 'MasterController::insert_gem_group');
$routes->get('/master/gem_group/get', 'MasterController::get_gem_group');
$routes->post('/master/gem_group/edit/(:num)', 'MasterController::edit_gem_group/$1');
$routes->post('/master/gem_group/delete/(:num)', 'MasterController::delete_gem_group/$1');

// gem_name
$routes->post('/master/gem_name/insert', 'MasterController::insert_gem_name');
$routes->get('/master/gem_name/get', 'MasterController::get_gem_name');
$routes->post('/master/gem_name/edit/(:num)', 'MasterController::edit_gem_name/$1');
$routes->post('/master/gem_name/delete/(:num)', 'MasterController::delete_gem_name/$1');

// gem_shape
$routes->post('/master/gem_shape/insert', 'MasterController::insert_gem_shape');
$routes->get('/master/gem_shape/get', 'MasterController::get_gem_shape');
$routes->post('/master/gem_shape/edit/(:num)', 'MasterController::edit_gem_shape/$1');
$routes->post('/master/gem_shape/delete/(:num)', 'MasterController::delete_gem_shape/$1');

// gem_color
$routes->post('/master/gem_color/insert', 'MasterController::insert_gem_color');
$routes->get('/master/gem_color/get', 'MasterController::get_gem_color');
$routes->post('/master/gem_color/edit/(:num)', 'MasterController::edit_gem_color/$1');
$routes->post('/master/gem_color/delete/(:num)', 'MasterController::delete_gem_color/$1');

// gem_clarity
$routes->post('/master/gem_clarity/insert', 'MasterController::insert_gem_clarity');
$routes->get('/master/gem_clarity/get', 'MasterController::get_gem_clarity');
$routes->post('/master/gem_clarity/edit/(:num)', 'MasterController::edit_gem_clarity/$1');
$routes->post('/master/gem_clarity/delete/(:num)', 'MasterController::delete_gem_clarity/$1');


// gem_cutting
$routes->post('/master/gem_cutting/insert', 'MasterController::insert_gem_cutting');
$routes->get('/master/gem_cutting/get', 'MasterController::get_gem_cutting');
$routes->post('/master/gem_cutting/edit/(:num)', 'MasterController::edit_gem_cutting/$1');
$routes->post('/master/gem_cutting/delete/(:num)', 'MasterController::delete_gem_cutting/$1');

// gem_quality
$routes->post('/master/gem_quality/insert', 'MasterController::insert_gem_quality');
$routes->get('/master/gem_quality/get', 'MasterController::get_gem_quality');
$routes->post('/master/gem_quality/edit/(:num)', 'MasterController::edit_gem_quality/$1');
$routes->post('/master/gem_quality/delete/(:num)', 'MasterController::delete_gem_quality/$1');

// gem_size
$routes->post('/master/gem_size/insert', 'MasterController::insert_gem_size');
$routes->get('/master/gem_size/get', 'MasterController::get_gem_size');
$routes->post('/master/gem_size/edit/(:num)', 'MasterController::edit_gem_size/$1');
$routes->post('/master/gem_size/delete/(:num)', 'MasterController::delete_gem_size/$1');

//other_inventory
$routes->post('/master/other_inventory/insert', 'MasterController::insert_other_inventory');
$routes->get('/master/other_inventory/get', 'MasterController::get_other_inventory');
$routes->post('/master/other_inventory/edit/(:num)', 'MasterController::edit_other_inventory/$1');



// other_general
$routes->post('/master/other_general/insert', 'MasterController::insert_other_general');
$routes->get('/master/other_general/get', 'MasterController::get_other_general');
$routes->post('/master/other_general/edit/(:num)', 'MasterController::edit_other_general/$1');
$routes->post('/master/other_general/delete/(:num)', 'MasterController::delete_other_general/$1');









$routes->get('/masterproduct', 'Home::masterproduct');
$routes->get('/mastercorrection', 'Home::mastercorrection');
$routes->get('/mastersize', 'MasterController::get_itemProductSize');
$routes->get('/mastermetalcolor', 'Home::mastermetalcolor');
$routes->get('/mastermetalname', 'Home::mastermetalname');
$routes->get('/masterstonegroup', 'Home::masterstonegroup');
$routes->get('/masterstonename', 'Home::masterstonename');
$routes->get('/masterstoneshape', 'Home::masterstoneshape');
$routes->get('/mastergemcolor', 'Home::mastergemcolor');
$routes->get('/masterclarity', 'Home::masterclarity');
$routes->get('/mastercutting', 'Home::mastercutting');
$routes->get('/masterquality', 'Home::masterquality');
$routes->get('/mastergemsize', 'Home::mastergemsize');
$routes->get('/productstone', 'Home::productstone');
$routes->get('/productjewelry', 'Home::productjewelry');
$routes->get('/saleorder/saleorderstone', 'Home::saleorderstone');
$routes->get('/saleorder/saleorderjewelry', 'Home::saleorderjewelry');
$routes->get('/purchase/purchasestone', 'Home::purchasestone');
$routes->get('/purchase/purchasejewelry', 'Home::purchasejewelry');
$routes->get('/memoin/memoinstone', 'Home::memoinstone');
$routes->get('/memoin/memoinjewelry', 'Home::memoinjewelry');
$routes->get('/memoreturn/memoreturnstone', 'Home::memoreturnstone');
$routes->get('/memoreturn/memoreturnjewelry', 'Home::memoreturnjewelry');
$routes->get('/inventory/purchasejewelry', 'Home::inventorypurchasejewelry');
$routes->get('/inventory/purchasestone', 'Home::inventorypurchasestone');
$routes->get('/inventory/serviceorder', 'Home::inventoryserviceorder');
$routes->get('/inventory/servicerepair', 'Home::inventoryservicerepair');
$routes->get('/inventory/servicemounting', 'Home::inventoryservicemounting');

$routes->get('/saving/savingstone', 'Home::savingstone');
$routes->get('/saving/savingjewelry', 'Home::savingjewelry');
$routes->get('/saving/savingmounting', 'Home::savingmounting');
$routes->get('/memo/memojewelry', 'Home::memojewelry');
$routes->get('/memo/memostone', 'Home::memostone');
$routes->post('/test/test/(:any)/(:num)', 'CompanyController::insertcompany/$1/$2');

$routes->get('/empprofile', 'EmpProfileController::index');
$routes->post('/emp_profile_form/insert', 'EmpProfileController::insert');
$routes->post('/emp_profile_form/update/(:num)', 'EmpProfileController::update/$1');
$routes->get('/permission', 'PermissionController::index');
$routes->post('/permission/edit', 'PermissionController::edit');
$routes->post('/permission/add', 'PermissionController::add');

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
