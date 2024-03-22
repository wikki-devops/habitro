<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['change-password'] = 'welcome/get_admin_data';
$route['leads'] = 'welcome/leadform';
$route['add/new-blog'] = 'welcome/add-blog';
$route['add/residential-page/associate-partner'] = 'welcome/add-residentialpartner';
$route['add/before-after-slider'] = 'welcome/add-renovation';


$route['leads/update/(:any)'] = 'welcome/update_lead/$1';

$route['profile/update/(:any)'] = 'welcome/update_profile/$1';
$route['website-banner/update/(:any)'] = 'welcome/update_banner/$1';
$route['call-to-action/update/(:any)'] = 'welcome/update_cta/$1';
$route['residential/price/update/(:any)'] = 'welcome/updatepricing/$1';

$route['default_controller'] = 'welcome';

$route['(:any)'] = 'welcome/$1';



$route['404_override'] = '';
$route['translate_uri_dashes'] = true;
