<?php

require_once __DIR__.'/helpers/functions.php';
require_once __DIR__ . '/config/Router.php';
require_once __DIR__ . '/controllers/AdminController.php';
require_once __DIR__ . '/controllers/ProductController.php';
require_once __DIR__ . '/controllers/UserController.php';
require_once __DIR__ . '/controllers/OrderController.php';
require_once __DIR__ . '/controllers/AdminsController.php';
require_once __DIR__ . '/controllers/CategoryController.php';
require_once __DIR__ . '/controllers/HomeController.php';
require_once __DIR__ . '/controllers/ProductspublicController.php';

$router = new Router();


//Admin View Routes
//auth routes
$router->get('/admin', 'AdminController@login', 'admin.login');
$router->post('/admin/login', 'AdminController@authenticate', 'admin.authenticate');

//Manage Users Routes
$router->get('/users', 'UserController@index', 'user.list');
$router->get('/users/create', 'UserController@create', 'user.create');
$router->post('/users/create', 'UserController@store', 'user.store');
$router->get('/users/{id}/edit', 'UserController@edit', 'user.edit');
$router->put('/users/{id}/edit', 'UserController@update', 'user.update');
$router->delete('/users/{id}', 'UserController@destroy', 'user.destroy');
$router->get('/users/{id}', 'UserController@show', 'user.show');

//Manage Products Routes
$router->get('/products', 'ProductController@index', 'product.index');
$router->get('/products/create', 'ProductController@create', 'product.create');
$router->post('/products/create', 'ProductController@store', 'product.store');
$router->get('/products/{id}/edit', 'ProductController@edit', 'product.edit');
$router->put('/products/{id}/edit', 'ProductController@update', 'product.update');
$router->delete('/products/{id}', 'ProductController@destroy', 'product.destroy');
$router->get('/products/{id}', 'ProductController@show', 'product.show');

//Manage Orders Routes
$router->get('/orders', 'OrderController@index', 'order.index');
$router->get('/orders/{id}/edit', 'OrderController@edit', 'order.edit');
$router->put('/orders/{id}/edit', 'OrderController@update', 'order.update');
$router->delete('/orders/{id}', 'OrderController@destroy', 'order.destroy');

//Manage Categories Routes

$router->get('/categories', 'CategoryController@index', 'category.index');
$router->get('/categories/create', 'CategoryController@create', 'category.create');
$router->post('/categories/create', 'CategoryController@store', 'category.store');
$router->get('/categories/{id}/edit', 'CategoryController@edit', 'category.edit');
$router->put('/categories/{id}/edit', 'CategoryController@update', 'category.update');
$router->delete('/categories/{id}', 'CategoryController@destroy', 'category.destroy');

//Manage Admins Routes
$router->get('/admins', 'AdminsController@index', 'admins.list');
$router->get('/admins/create', 'AdminsController@create', 'admins.create');
$router->post('/admins/create', 'AdminsController@store', 'admins.store');
$router->get('/admins/{id}/edit', 'AdminsController@edit', 'admins.edit');
$router->put('/admins/{id}/edit', 'AdminsController@update', 'admins.update');
$router->delete('/admins/{id}', 'AdminsController@destroy', 'admins.destroy');

//////////////////////////////////////////////

// Public Views Routes
///public products routes(Shop Page)
$router->get('/productspublic', 'ProductspublicController@index', 'product.index');
$router->get('/productspublic/{id}', 'ProductspublicController@show', 'product.show');

///home page routes (Landing Page)
$router->get('/pages', 'HomeController@index', 'home.index');
$router->get('/pages/{id}', 'HomeController@show', 'home.show');

/////////////Dispatch
$router->dispatch();