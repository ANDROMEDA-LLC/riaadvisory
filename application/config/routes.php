<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';

//admin url
$route['(?i)admin'] = 'admin/admin';

//home için
$route['(?i)login'] = 'login/index';
$route['workriadetail/(:any)'] = 'home/workriadetail/$1';
$route['(?i)(:any)'] = 'home/$1'; 


//duyurular için 
$route['(?i)blogdetay/(:any)'] = 'home/blogdetay/$1';
$route['iletisim/gec'] = 'home/iletisimForm';



$route['404_override'] = 'Custom404';
$route['translate_uri_dashes'] = FALSE;
