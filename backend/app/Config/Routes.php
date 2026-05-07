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
