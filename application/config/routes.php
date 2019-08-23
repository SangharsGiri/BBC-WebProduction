<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['default_controller'] = "home";
// $route['default_controller'] = "welcome";
$route['404_override'] = 'error';
$route['packages/rel/(:any)'] = 'packages/related/$1';
$route['content/(:any)'] = 'content/detail/$1';
$route['service/(:any)'] = 'content/service/$1';
$route['content/captcha'] = 'content/captcha_setting/';
$route['content/plan_captcha_setting'] = 'content/plan_captcha_setting/';
$route['content/plan'] = 'content/plan/';
$route['forex/(:any)'] = 'forex/detail/$1';
$route['destination/(:any)'] = 'content/destination/$1';
//$route['brands/(:any)'] = 'brands/brands_detail/';
//$route['paypal-hotel/(:any)'] = 'payment/hotel_paypal_process/$1';
//$route['atos-hotel/(:any)'] = 'payment/atos_request_hotel/$1';

//$route['booking'] = 'booking';
//$route['sansui-trek-&-expedition/(:any)'] = 'content/index/$1';


/* End of file routes.php */
/* Location: ./application/config/routes.php */