<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;


/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'Home::index');

$routes->get('registration', 'Registration::reg');
$routes->post('registration/save', 'Registration::save');
$routes->get('success', 'Registration::success');
$routes->get('dashboard', 'Dashboard::dash');
$routes->get('active_students', 'ActiveStudents::active');
$routes->get('inactive_students', 'InactiveStudents::inactive');
$routes->get('pending_students', 'PendingStudents::pending');
$routes->get('student_profile/(:num)', 'StudentProfile::profile/$1');
$routes->get('approve/(:num)', 'StudentProfile::approve/$1');
$routes->get('decline/(:num)', 'StudentProfile::decline/$1');
$routes->get('admin/login', 'Login::login');
$routes->post('admin/authenticate', 'Login::authenticate');
$routes->get('admin/logout', 'Login::logout');
$routes->get('admin/dashboard', 'Login::dashboard');





