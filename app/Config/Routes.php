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
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
// $routes->get("articles", "Articles::index");
// $routes->get("articles/(:num)", "Articles::show/$1");
// $routes->get("articles/new", "Articles::new", ["as" => "new_article"]);
// $routes->post("articles", "Articles::create");
// $routes->get("articles/(:num)/edit", "Articles::edit/$1");
// $routes->patch("articles/(:num)", "Articles::update/$1");
// $routes->delete("articles/(:num)", "Articles::delete/$1");
// $routes->get("articles/(:num)/delete", "Articles::confirmDelete/$1");

// $routes->resource("articles", ["placeholder" => "(:num)"]);

$routes->setAutoRoute(false); 

$routes->get('/', 'Home::index');
$routes->get("articles", "Articles::index");
$routes->get("articles/(:num)", "Articles::show/$1");
$routes->get("articles/new", "Articles::new", ["as" => "new_article"]);
$routes->post("articles", "Articles::create");
$routes->get("articles/(:num)/edit", "Articles::edit/$1");
$routes->post("articles/update/(:num)", "Articles::update/$1");
$routes->match(["get", "post", "delete"], "articles/delete/(:num)", "Articles::delete/$1");
$routes->get("articles/(:num)/delete", "Articles::confirmDelete/$1");

service('auth')->routes($routes);

//these are all the routes for the equipmentadmin controller
$routes->get("equipmentadmin", "EquipmentAdmin::index");
$routes->get("equipmentadmin/(:num)", "EquipmentAdmin::show/$1");
$routes->get("equipmentadmin/new", "EquipmentAdmin::new", ["as" => "new_equipment"]);
$routes->post("equipmentadmin", "EquipmentAdmin::create");
$routes->get("equipmentadmin/(:num)/edit", "EquipmentAdmin::edit/$1");
$routes->post("equipmentadmin/update/(:num)", "EquipmentAdmin::update/$1");
$routes->match(["get", "post", "delete"], "equipmentadmin/delete/(:num)", "EquipmentAdmin::delete/$1");
$routes->get("equipmentadmin/(:num)/delete", "EquipmentAdmin::confirmDelete/$1");


//these are all the routes for the equipmentstaff controller
$routes->get("equipmentstaff", "EquipmentStaff::index");
$routes->get("equipmentstaff/(:num)", "EquipmentStaff::show/$1");


// $routes->get('login', 'Auth::login', ['as' => 'login']);
// $routes->post('login', 'Auth::attemptLogin');
// $routes->get('admin/login', 'Auth::adminLogin', ['as' => 'admin_login']);
// $routes->post('admin/login', 'Auth::attemptAdminLogin');
// $routes->get('logout', 'Auth::logout');

//instead of making two separate routes, you can just use add, but 
// it isn't as secure since it allows more options to be run 
// $routes->get('/articles/delete/(:num)', 'Articles::delete/$1');
// $routes->post('/articles/delete/(:num)', 'Articles::delete/$1');