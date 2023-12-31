<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->setDefaultController('Maps');

$routes->get('dashboard', 'Maps::index');
$routes->get('KodeWilayah/index', 'KodeWilayah::index');
$routes->get('KodeWilayah/import', 'KodeWilayah::import');
$routes->post('KodeWilayah/import', 'KodeWilayah::import');
$routes->get('Data/index', 'Data::index');
$routes->get('Data/import', 'Data::import');
$routes->post('Data/import', 'Data::import');