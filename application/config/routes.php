<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'MainController';
// member ***********************************************
$route['members'] = 'MemberController';
$route['members/pilih-workshop/(:num)'] = 'MemberController/pilih_kelas/$1';
$route['members/kelas_workshop'] = 'MemberController/kelas_workshop';
// vote komunitas
$route['members/vote-komunitas/(:num)'] = 'MemberController/vote/$1';
$route['members/voting_komunitas'] = 'MemberController/voting_komunitas';
// pilih makanan
$route['members/pilih-menu/(:num)'] = 'MemberController/pilih_makanan/$1';
$route['members/menu_makan'] = 'MemberController/menu_makan';
// blog member
$route['members/informasi'] = 'MemberController/informasi';
$route['members/detail/komunitas/(:num)'] = 'MemberController/detail_komunitas/$1';
$route['members/detail/makanan/(:num)'] = 'MemberController/detail_makanan/$1';

// admin ***********************************************
$route['rangers/bukaTutupKelas'] = 'AdminController/bukaTutupKelas';
$route['rangers'] = 'AdminController';
$route['404_override'] = 'MainController/eror404';
$route['translate_uri_dashes'] = FALSE;
