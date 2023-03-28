<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/system', 'SystemController@system');
$router->get('/dashboard', 'DashboardController@dashboard');

$router->get('/systemLogin', 'SystemController@systemLogin');
$router->post('/login', 'SystemController@login');
$router->get('/logout', 'SystemController@logout');

$router->get('/register', 'RegisterController@register');
$router->post('/registerAction', 'RegisterController@registerAction');

