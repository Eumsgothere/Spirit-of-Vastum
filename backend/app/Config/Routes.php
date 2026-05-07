<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('faq', 'Users::faq');
$routes->get('devlog', 'Users::devlog');
$routes->get('contactus', 'Users::contactus');
$routes->get('about', 'Users::about');

// auth
$routes->get('login', 'Auth::showLoginForm');
$routes->post('login', 'Auth::login');
$routes->get('signup', 'Auth::showSignupForm');
$routes->post('signup', 'Auth::signup');
$routes->get('logout', 'Auth::logout');
$routes->post('logout', 'Auth::logout');
