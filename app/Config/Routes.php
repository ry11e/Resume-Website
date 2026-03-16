<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'MainController::index');
$routes->get('/', 'MainController::resume');
$routes->get('resume', 'MainController::resume');
$routes->get('admin', 'AdminController::index');



//Admin Records Controller
$routes->get('admin/edit-skill/(:num)', 'AdminController::editSkill/$1');       //The (:num) is a placeholder for the ID of the skill you want to change.
$routes->post('admin/update-skill/(:num)', 'AdminController::updateSkill/$1');  //The (:num) is a placeholder for the ID of the skill you want to change.

$routes->get('admin/edit-education/(:num)', 'AdminController::editEducation/$1');       //The (:num) is a placeholder for the ID of the skill you want to change.
$routes->post('admin/update-education/(:num)', 'AdminController::updateEducation/$1');  //The (:num) is a placeholder for the ID of the skill you want to change.

$routes->get('admin/edit-experience/(:num)', 'AdminController::editExperience/$1');       //The (:num) is a placeholder for the ID of the skill you want to change.
$routes->post('admin/update-experience/(:num)', 'AdminController::updateExperience/$1');  //The (:num) is a placeholder for the ID of the skill you want to change.


$routes->post('admin/add-skill', 'AdminController::addSkill');                  // Add Skill
$routes->get('admin/delete-skill/(:num)', 'AdminController::deleteSkill/$1');    // Soft Delete Skill
$routes->post('admin/add-education', 'AdminController::addEducation');          // Add Education 
$routes->get('admin/delete-education/(:num)', 'AdminController::deleteEducation/$1'); // Soft Delete Education
$routes->post('admin/add-experience', 'AdminController::addExperience');          // Add Education 
$routes->get('admin/delete-experience/(:num)', 'AdminController::deleteExperience/$1'); // Soft Delete Education




// Admin Info Controller
$routes->get('admin/account', 'Admin::account');          // To view the page
$routes->post('admin/update-account', 'Admin::updateAccount'); // To handle the form



// Authorization Controller
$routes->get('login', 'AuthController::login');
$routes->post('attempt-login', 'AuthController::attemptLogin');
$routes->get('logout', 'AuthController::logout');