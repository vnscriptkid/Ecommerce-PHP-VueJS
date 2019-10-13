<?php

$router = new AltoRouter();

// define all the routes and their corresponding handlers
$router->map('GET', '/', 'App\Controllers\IndexController@show', 'Home Page');
$router->map('GET', '/about', 'App\Controllers\MyController@show', 'About Page');

$match = $router->match();