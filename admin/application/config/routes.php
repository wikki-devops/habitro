<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['change-password'] = 'welcome/get_admin_data';

$route['default_controller'] = 'welcome';

$route['(:any)'] = 'welcome/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = true;
