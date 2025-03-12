<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/service', 'Home::service');
$routes->get('/blog', 'Home::blog');
$routes->get('/blog-detail', 'Home::blogdetail');
$routes->get('/edulawcenter', 'Home::edulawcenter');
$routes->get('/edulawcenterdetail', 'Home::edulawcenterdetail');

$routes->get('/contact', 'Home::contact');

$routes->post('/locale', 'Home::setlocale');
$routes->post('/consultation', 'Home::sendemail');
$routes->get('/member', 'Home::member');
