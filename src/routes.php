<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/systemLogin', 'SystemController@systemLogin');
$router->get('/system', 'SystemController@system');

$router->post('/login', 'SystemController@login');
$router->get('/logout', 'SystemController@logout');

