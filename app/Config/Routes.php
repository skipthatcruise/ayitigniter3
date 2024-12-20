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
$routes->get('student_profile', 'StudentProfile::profile');
$routes->get('login', 'Login::login');




