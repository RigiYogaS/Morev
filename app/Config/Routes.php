<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/guest/film', 'Pages::film');   
$routes->get('/guest/news', 'Pages::news');
$routes->get('/guest/review', 'Pages::review');
$routes->get('/guest/about', 'Pages::about');
$routes->get('/guest/addreview', 'Pages::addreview');

$routes->get('/auth/login', 'Pages::signin');
$routes->get('/auth/regis', 'Pages::signup');

$routes->get('/dashboard/index', 'Pages::indexDash');       
$routes->get('/dashboard/film', 'Pages::filmDash');
$routes->get('/dashboard/news', 'Pages::newsDash'); 
$routes->get('/dashboard/review', 'Pages::reviewDash');
$routes->get('/dashboard/about', 'Pages::aboutDash');
$routes->get('/dashboard/addreview', 'Pages::addreviewDash');