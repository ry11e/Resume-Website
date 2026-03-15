<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'MainController::index');
$routes->get('/', 'MainController::resume');
$routes->get('resume', 'MainController::resume');
$routes->get('admin', 'AdminController::index');
$routes->get('admin/edit-skill/(:num)', 'AdminController::editSkill/$1');       //The (:num) is a placeholder for the ID of the skill you want to change.
$routes->post('admin/update-skill/(:num)', 'AdminController::updateSkill/$1');  //The (:num) is a placeholder for the ID of the skill you want to change.
$routes->get('admin/edit-education/(:num)', 'AdminController::editEducation/$1');       //The (:num) is a placeholder for the ID of the skill you want to change.
$routes->post('admin/update-education/(:num)', 'AdminController::updateEducation/$1');  //The (:num) is a placeholder for the ID of the skill you want to change.

$routes->get('login', 'AuthController::login');
$routes->post('attempt-login', 'AuthController::attemptLogin');
$routes->get('logout', 'AuthController::logout');