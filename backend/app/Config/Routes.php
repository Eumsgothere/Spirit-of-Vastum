<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('FAQ', 'Users::FAQ');
$routes->get('Devlog', 'Users::devlog');
$routes->get('ContactUs', 'Users::ContactUS');
$routes->get('About', 'Users::about');

//auth
$routes->get('login', 'Auth::showLoginForm');
$routes->post('login', 'Auth::login');
$routes->get('signup', 'Auth::showSignupForm');
$routes->post('signup', 'Auth::signup');
$routes->get('logout', 'Auth::logout'); // GET for simplicity
