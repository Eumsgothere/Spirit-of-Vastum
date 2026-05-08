<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('faq', 'Users::faq');

$routes->get('contactus', 'Users::contactus');
$routes->get('about', 'Users::about');

// auth
$routes->get('login', 'Auth::showLoginForm');
$routes->post('login', 'Auth::login');
$routes->get('signup', 'Auth::showSignupForm');
$routes->post('signup', 'Auth::signup');
$routes->get('logout', 'Auth::logout');
$routes->post('logout', 'Auth::logout');

//devlog
$routes->get('devlog', 'Devlog::index');
$routes->get('devlog/create', 'Devlog::create');
$routes->post('devlog/store', 'Devlog::store');
$routes->post('devlog/delete/(:num)', 'Devlog::delete/$1');
