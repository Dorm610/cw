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
//$route['default_controller'] = 'welcome';
//$route['404_override'] = '';
//$route['translate_uri_dashes'] = FALSE;


$route['districts'] = 'CDistricts/create';
$route['districts/test'] = 'CDistricts/test';
$route['districts/create'] = 'CDistricts/create';

$route['clients/create'] = 'CClients/create';
$route['clients/search'] = 'CClients/search';
$route['clients/modify'] = 'CClients/modify';
$route['clients/modify/(:any)'] = 'CClients/modify/$1';
$route['clients/delete/(:any)'] = 'CClients/delete/$1';
$route['clients/import'] = 'CClients/import';
$route['clients/(:any)'] = 'CClients/view/$1';
$route['clients'] = 'CClients';

$route['messages/create'] = 'CMessages/create';
$route['messages/search'] = 'CMessages/search';
$route['messages/(:any)'] = 'CMessages/view/$1';
$route['messages'] = 'CMessages/search';
$route['messages/delete/(:any)'] = 'CMessages/delete/$1';

$route['company/create'] = 'CCompany/create';
$route['company/search'] = 'CCompany/search';
$route['company/(:any)'] = 'CCompany/view/$1';
$route['company'] = 'CCompany/search';
$route['company/delete/(:any)'] = 'CCompany/delete/$1';

$route['default_controller'] = 'CClients';

$route['WEUI'] = 'CClients/viewForWEUI';
$route['WEUI/clients'] = 'CClients/viewForWEUI';
$route['WEUI/clients/create'] = 'CClients/createForWEUI';
$route['WEUI/clients/import'] = 'CClients/importForWEUI';
$route['WEUI/clients/search'] = 'CClients/searchForWEUI';
$route['WEUI/clients/modify/(:any)'] = 'CClients/modifyForWEUI/$1';
$route['WEUI/clients/delete/(:any)'] = 'CClients/deleteForWEUI/$1';
$route['WEUI/clients/view/(:any)'] = 'CClients/viewForWEUI/$1';

$route['WEUI/company/create'] = 'CCompany/createForWEUI';
$route['WEUI/company/search'] = 'CCompany/searchForWEUI';
$route['WEUI/company/delete/(:any)'] = 'CCompany/deleteForWEUI/$1';
$route['WEUI/company/view/(:any)'] = 'CCompany/viewForWEUI/$1';

$route['WEUI/messages/create'] = 'CMessages/createForWEUI';
$route['WEUI/messages/search'] = 'CMessages/searchForWEUI';
$route['WEUI/messages/delete/(:any)'] = 'CMessages/deleteForWEUI/$1';
$route['WEUI/messages/view/(:any)'] = 'CMessages/viewForWEUI/$1';
//$route['(:any)'] = 'cclients/view/$1';
//$route['default_controller'] = 'pages/view';
//$route['(:any)'] = 'pages/view/$1';