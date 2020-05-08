<?php

/**
 * Define your route here
 * 
 * $router->get()
 */

require_once realpath("vendor/autoload.php");

 //$router->controller('/home', ['App\Controller\HomeController','index']);
//  $router->controller('/home',App\Controller\HomeController::class);
 $router->get('/', ['App\Controller\HomeController','index']);


//  User Route

$router->get('/users', ['App\Controller\UserController','index']);
 