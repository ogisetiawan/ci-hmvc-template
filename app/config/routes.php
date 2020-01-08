<?php
defined('BASEPATH') or exit('No direct script access allowed');
//! ### DEFAULT ###
$route['default_controller']                           = '_login/LoginController';
$route['404_override']                                 = '';
$route['translate_uri_dashes']                         = FALSE;
//! ### LOGIN ###
$route['check_login']                                  = '_login/LoginController/check_login';
$route['insert_login']                                 = '_login/LoginController/insert_login';
$route['logout']                                       = '_login/LoginController/logout';

