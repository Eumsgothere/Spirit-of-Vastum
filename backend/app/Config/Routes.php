<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Users::index');

$routes->get('faq', 'Users::faq');

$routes->get('contactus', 'Users::contactus');

/* ABOUT */
$routes->get('about', 'Users::about');

/* ABOUT GAME */
$routes->get('aboutgame', 'Users::aboutgame');

/* AUTH */

$routes->get('login', 'Auth::showLoginForm');
$routes->post('login', 'Auth::login');

$routes->get('signup', 'Auth::showSignupForm');
$routes->post('signup', 'Auth::signup');

$routes->get('logout', 'Auth::logout');
$routes->post('logout', 'Auth::logout');

/* FORGOT PASSWORD */

$routes->get('forgot-password', 'Auth::showForgotForm');
$routes->post('forgot-password', 'Auth::sendResetLink');

/* RESET PASSWORD */

$routes->get('reset-password/(:segment)', 'Auth::showResetForm/$1');
$routes->post('reset-password/(:segment)', 'Auth::resetPassword/$1');

/* DEVLOG */

$routes->get('devlog', 'Devlog::index');

$routes->get('devlog/create', 'Devlog::create');

$routes->post('devlog/store', 'Devlog::store');

$routes->post('devlog/delete/(:num)', 'Devlog::delete/$1');

/* STORYGAME */

$routes->get('storygame', 'Users::storygame');
