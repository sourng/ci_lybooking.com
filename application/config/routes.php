<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
//$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/*
 * PS Page
 */
$route['index.html'] = 'home';
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
$route['admin'] = 'admin/login';
