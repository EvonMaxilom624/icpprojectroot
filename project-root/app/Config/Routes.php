<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LandingController::index');
$routes->get('/login', 'LoginController::index');

/*User*/
$routes->get('/organization/login', 'LoginController::index');
$routes->post('/loginproc', 'LoginController::process');
$routes->get('/forgotpassword', 'ForgotPasswordController::index');
$routes->post('/forgotpassword/process', 'ForgotPasswordController::process');

$routes->get('/logout', 'AuthController::logoutConfirmation');
$routes->get('/logout/confirm', 'AuthController::logout');

$routes->get('/dashboard', 'DashboardController::index');
$routes->get('/profile', 'ProfileController::index');
$routes->get('/calendar', 'CalendarController::index');
$routes->get('/calendar/events', 'CalendarController::fetchEvents');
$routes->get('/requestform', 'ActivityRequestController::index');
$routes->post('/requestform/submit', 'ActivityRequestController::submit');
$routes->post('/submit-request', 'ActivityRequestController::submit');
$routes->get('/activity-request-success', 'ActivityRequestController::success');

/*Admin*/
$routes->get('/admin/login', 'AdminController::loginForm');
$routes->post('/admin/loginproc', 'AdminController::login');
$routes->get('/admin/forgotpassword', 'AdminController::forgotPasswordForm');
$routes->post('/admin/forgotpasswordproc', 'AdminController::forgotPassword');

$routes->get('/admin/dashboard', 'AdminController::dashboard');
$routes->get('/admin/organizations', 'AdminController::viewOrganizations');
$routes->get('/admin/events', 'AdminController::viewEventReports');
$routes->delete('/admin/accounts/(:num)', 'AdminController::deleteAccount/$1');
$routes->get('/admin/accounts/(:num)', 'AdminController::viewAccount/$1');
$routes->post('/admin/accounts/(:num)', 'AdminController::updateAccount/$1');
$routes->get('/admin/accounts', 'AdminController::manageAccounts');
$routes->post('/admin/organizations/register', 'AdminController::registerOrganization');
