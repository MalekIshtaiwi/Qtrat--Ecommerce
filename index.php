<?php

require_once __DIR__.'/helpers/functions.php';
require_once __DIR__ . '/config/Router.php';
require_once __DIR__ . '/controllers/ProductController.php';
require_once __DIR__ . '/controllers/UserController.php';
require_once __DIR__ . '/controllers/OrderController.php';
require_once __DIR__ . '/controllers/CategoryController.php';

$router = new Router();

//$router->get('/', function(){
//    return view('home');
//}, 'home');

//users routes
$router->get('admin/login', 'AdminController@login', 'admin.login');
$router->post('admin/login', 'AdminController@authenticate', 'admin.authenticate');


$router->get('/users', 'UserController@index', 'user.list');

$router->get('/users/create', 'UserController@create', 'user.create');
$router->post('/users/create', 'UserController@store', 'user.store');

$router->get('/users/{id}/edit', 'UserController@edit', 'user.edit');
$router->put('/users/{id}/edit', 'UserController@update', 'user.update');

$router->delete('/users/{id}', 'UserController@destroy', 'user.destroy');
$router->get('/users/{id}', 'UserController@show', 'user.show');

//products routes
$router->get('/products', 'ProductController@index', 'product.index');

$router->get('/products/create', 'ProductController@create', 'product.create');
$router->post('/products/create', 'ProductController@store', 'product.store');

$router->get('/products/{id}/edit', 'ProductController@edit', 'product.edit');
$router->put('/products/{id}/edit', 'ProductController@update', 'product.update');

$router->delete('/products/{id}', 'ProductController@destroy', 'product.destroy');

$router->get('/products/{id}', 'ProductController@show', 'product.show');




//orders routes
$router->get('/orders', 'OrderController@index', 'order.index');
$router->get('/orders/{id}/edit', 'OrderController@edit', 'order.edit');
$router->put('/orders/{id}/edit', 'OrderController@update', 'order.update');
$router->delete('/orders/{id}', 'OrderController@destroy', 'order.destroy');


//category routes

$router->get('/categories', 'CategoryController@index', 'category.index');

$router->get('/categories/create', 'CategoryController@create', 'category.create');
$router->post('/categories/create', 'CategoryController@store', 'category.store');

$router->get('/categories/{id}/edit', 'CategoryController@edit', 'category.edit');
$router->put('/categories/{id}/edit', 'CategoryController@update', 'category.update');

$router->delete('/categories/{id}', 'CategoryController@destroy', 'category.destroy');



//require_once __DIR__.'/config/routerold.php';
//if($uri == '/internet-plans'){
//    require_once __DIR__.'/controllers/products.controller.php';
//}
//if($uri == '/'){
//    require_once __DIR__.'/controllers/home.controller.php';
//}
//if($uri == '/devices-and-accessories'){
//    require_once __DIR__.'/controllers/devices.controller.php';
//}else{
//    require_once __DIR__.'/views/pages/404.view.php';
//}

$router->dispatch();
