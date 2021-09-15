<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['index'] = 'Home/index';
$route['review/(:any)'] = 'home/review/$1';
$route['review'] = 'home/review';
$route['comments(:any)'] = 'home/comments/$1';
$route['insertComments(:any)'] = 'home/insertComments/$1';
$route['Login'] = 'login/index';
$route['Logout'] = 'Home/Logout';
$route['login/getUserDetails'] = 'Login/GetUserDetails';
$route['account'] = 'Account';
$route['response'] = 'Home/Comments';
$route['response-user'] = 'Home/UserName';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
