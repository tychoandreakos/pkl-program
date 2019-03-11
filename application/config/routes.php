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
$route['default_controller'] = 'landing';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'auth/login';
$route['pegawai/data-pegawai/(:any)'] = 'pegawai/lengkapidata/$1';
$route['pegawai/data-ortu/(:any)'] = 'orangtua/store/$1';
$route['pegawai/data-ortu/update/(:any)'] = 'orangtua/update/$1';
$route['pegawai/data-pasutri/(:any)'] = 'pasutri/store/$1';
$route['pegawai/data-pasutri/update/(:any)'] = 'pasutri/update/$1';
$route['pegawai/data-pendidikan/(:any)'] = 'pendidikan/store/$1';
$route['pegawai/data-pendidikan/update/(:any)'] = 'pendidikan/update/$1';
$route['pegawai/data-anak/(:any)'] = 'anak/store/$1';
$route['pegawai/data-anak/create/(:any)'] = 'anak/create/$1';
$route['pegawai/data-anak/update/(:any)'] = 'anak/update/$1';
$route['pegawai/data-anak/edit/(:any)'] = 'anak/edit/$1';
$route['pegawai/data-anak/hapus/(:any)'] = 'anak/delete/$1';
$route['pegawai/data-anak/detail/(:any)'] = 'anak/detail/$1';
$route['pegawai/data-pekerjaan/(:any)'] = 'pekerjaan/store/$1';
$route['pegawai/data-pekerjaan/update/(:any)'] = 'pekerjaan/update/$1';
$route['pegawai/data-pekerjaan/edit/(:any)'] = 'pekerjaan/edit/$1';
$route['pegawai/data-pekerjaan/hapus/(:any)'] = 'pekerjaan/delete/$1';
