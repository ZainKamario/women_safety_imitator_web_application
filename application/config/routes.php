<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'institution/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['api/alert_post'] = 'Api/alert_post';
$route['api/disable_alert_post'] = 'Api/disable_alert_post';
$route['api/user_location_update'] = 'Api/user_location_update';
$route['api/create_report'] = 'Api/create_report';
$route['api/user_login'] = 'Api/user_login';
$route['api/recent_reports'] = 'Api/recent_reports';
$route['api/institutes'] = 'Api/institutes';
$route['api/safe_locations'] = 'Api/safe_locations';
$route['api/msgs_fetch'] = 'Api/msgs_fetch';
$route['api/send_msg'] = 'Api/send_msg';
