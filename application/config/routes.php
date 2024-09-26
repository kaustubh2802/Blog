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
$route['employee/update/(:any)'] = "Frontend/EmployeeController/update/$1";


$route['employee/delete/(:any)'] = "Frontend/EmployeeController/delete/$1";


$route['employee/confirmdelete/(:any)']['DELETE'] = "Frontend/EmployeeController/delete/$1";
// $route['employee/confirmdelete/(:any)'] = "Frontend/EmployeeController/delete/$1";










// url: "/employee/confirmdelete/"+id, ajax = type: "DELETE",


// Check the current status of your repository
// git status

// // Stage the changes (add all modified files)
// git add .

// // Commit the changes with a message
// git commit -m "Updated to version 2"

// Push the changes to the GitHub repository
// git push origin master


// echo "# Blog" >> README.md
// git init
// git add README.md
// git commit -m "first commit"
// git branch -M master
// git remote add origin https://github.com/kaustubh2802/Blog.git
// git push -u origin master
// Check the current status of your repository



// 2nd time commit
// git status
// // Stage the changes (add all modified files)
// git add . 
// git commit -m "Updated to version 2" 
// git push origin master