<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
// $route['default_controller'] = 'welcome';
$route['default_controller'] = 'employee';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['abouts'] = 'welcome/demo';

$route['home'] = 'PageController/index';
$route['about'] = 'PageController/aboutus';


// $route['blog/(:any)'] = 'PageController/blog/$1';
$route['blog/(:num)'] = 'PageController/blog/$1';


$route['studentcontroller'] = 'StudentController/index';

// ===========
// employee routes
$route['employee'] ="Frontend/EmployeeController/index";

$route['employee/add'] = "Frontend/EmployeeController/create";
$route['employee/store'] = "Frontend/EmployeeController/store";



$route['employee/edit/(:any)'] = "Frontend/EmployeeController/edit/$1";