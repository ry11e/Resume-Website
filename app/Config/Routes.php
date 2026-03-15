<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'MainController::index');
$routes->get('/', 'MainController::resume');
$routes->get('admin', 'AdminController::index');
$routes->get('admin/edit-skill/(:num)', 'AdminController::editSkill/$1');       //The (:num) is a placeholder for the ID of the skill you want to change.
$routes->post('admin/update-skill/(:num)', 'AdminController::updateSkill/$1');  //The (:num) is a placeholder for the ID of the skill you want to change.
