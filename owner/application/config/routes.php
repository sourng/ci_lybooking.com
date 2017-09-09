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
//$route['default_controller'] = 'front';
$route['default_controller'] = 'admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;




/*
 * PS Page
 */
$route['index.html'] = 'front';
$route['list.html'] = 'home/list_data';
$route['detail.html/(.+)$'] = 'home/detail/$1';
/*
 * PS TUK TUK
 */
$route['home-tuktuk.html'] = 'tuktuk';
$route['tuktuk-detail.html/(.+)$'] = 'tuktuk/detail/$1';

$route['signin.html'] = 'admin/User/signin';
$route['admin/register.html']='admin/register';


/*
 * PS Hotels
 */
$route['hotels.html'] = 'hotels';
$route['hotels2.html'] = 'hotels/grid';
$route['hotels-detail.html/(.+)$'] = 'hotels/detail/$1';

$route['signin.html'] = 'admin/User/signin';
$route['admin/register.html']='admin/register';

/* 
 User Pages
 */
$route['signin.html'] = 'admin/User/signin';
$route['logout.html'] = 'admin/User/logout';
$route['signup.html'] = 'admin/User/signup';
$route['activate-account.html/(.+)$'] = 'User/activate_account/$1';
/*
 * PS Page user main 
 */
$route['daskboard.html'] = 'user_main';



//****** Example Page *********//
$route['home.html/(.+)$'] = 'home/home/$1';
$route['rooms-and-rates-for-hotel-siem-reap-cambodia.html'] = 'c_room/index';
$route['rooms.html/(.+)$'] = 'c_room/index/$1';
$route['nirvana.html'] = 'c_room/nirvana';
$route['nirvana.html/(.+)$'] = 'c_room/nirvana/$1';
$route['contact-the-hotel-in-siem-reap-cambodia.html'] = 'c_page/contactUs';

//// Admin Panel ////
//$route['admin'] = 'admin/login';
