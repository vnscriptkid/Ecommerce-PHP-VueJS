<?php

$router = new AltoRouter();

// define all the routes and their corresponding handlers
$router->map('GET', '/', 'App\Controllers\IndexController@show', 'Home Page');
$router->map('GET', '/about', 'App\Controllers\MyController@show', 'About Page');
$router->map('GET', '/admin', 'App\Controllers\Admin\DashboardController@show', 'Admin Page');

// categories
$router->map('GET', '/admin/product/categories', 'App\Controllers\Admin\CategoryController@show', 'Category Page');
$router->map('POST', '/admin/product/categories', 'App\Controllers\Admin\CategoryController@create', 'New Category');

$match = $router->match();